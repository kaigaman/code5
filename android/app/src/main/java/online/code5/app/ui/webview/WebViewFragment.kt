package online.code5.app.ui.webview

import android.graphics.Bitmap
import android.os.Bundle
import android.view.View
import android.webkit.WebChromeClient
import android.webkit.WebView
import android.webkit.WebViewClient
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.navArgs
import android.widget.ProgressBar
import android.widget.Button
import androidx.swiperefreshlayout.widget.SwipeRefreshLayout
import androidx.constraintlayout.widget.ConstraintLayout
import online.code5.app.util.NetworkUtils

open class WebViewFragment : Fragment() {
    private val args: WebViewFragmentArgs by navArgs()
    var currentUrl: String? = null
        private set

    protected lateinit var webView: WebView
    protected lateinit var swipeRefresh: SwipeRefreshLayout
    protected lateinit var progressBar: ProgressBar
    protected lateinit var offlineView: ConstraintLayout
    protected lateinit var btnRetry: Button
    protected var viewsReady = false

    protected fun setWebView(v: WebView) { webView = v }
    protected fun setSwipeRefresh(v: SwipeRefreshLayout) { swipeRefresh = v }
    protected fun setProgressBar(v: ProgressBar) { progressBar = v }
    protected fun setOfflineView(v: ConstraintLayout) { offlineView = v }
    protected fun setRetryButton(v: Button) { btnRetry = v }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        if (!::webView.isInitialized) return

        viewsReady = true
        setupWebView()
        setupSwipeRefresh()
        setupRetryButton()

        if (savedInstanceState == null) {
            loadUrl(args.url)
        } else {
            savedInstanceState.getString(KEY_URL)?.let { loadUrl(it) }
        }
    }

    override fun onSaveInstanceState(outState: Bundle) {
        super.onSaveInstanceState(outState)
        outState.putString(KEY_URL, currentUrl)
    }

    private fun setupWebView() {
        webView.apply {
            settings.apply {
                javaScriptEnabled = true
                domStorageEnabled = true
                allowFileAccess = false
                allowContentAccess = false
                setSupportZoom(true)
                builtInZoomControls = true
                displayZoomControls = false
                useWideViewPort = true
                loadWithOverviewMode = true
                cacheMode = android.webkit.WebSettings.LOAD_DEFAULT
                userAgentString = settings.userAgentString + " Code5Android/1.0"
            }

            webChromeClient = object : WebChromeClient() {
                override fun onProgressChanged(view: WebView?, newProgress: Int) {
                    if (newProgress < 100) {
                        progressBar.visibility = View.VISIBLE
                        progressBar.progress = newProgress
                    } else {
                        progressBar.visibility = View.GONE
                    }
                }
            }

            webViewClient = object : WebViewClient() {
                override fun onPageStarted(view: WebView?, url: String?, favicon: Bitmap?) {
                    super.onPageStarted(view, url, favicon)
                    currentUrl = url
                    offlineView.visibility = View.GONE
                    webView.visibility = View.VISIBLE
                }

                override fun onPageFinished(view: WebView?, url: String?) {
                    super.onPageFinished(view, url)
                    swipeRefresh.isRefreshing = false
                }

                override fun onReceivedError(
                    view: WebView?, errorCode: Int,
                    description: String?, failingUrl: String?
                ) {
                    super.onReceivedError(view, errorCode, description, failingUrl)
                    swipeRefresh.isRefreshing = false
                    if (isAdded && !NetworkUtils.isOnline(requireContext())) {
                        showOffline()
                    }
                }
            }
        }
    }

    private fun setupSwipeRefresh() {
        swipeRefresh.setOnRefreshListener {
            webView.reload()
        }
    }

    private fun setupRetryButton() {
        btnRetry.setOnClickListener {
            if (!isAdded) return@setOnClickListener
            if (NetworkUtils.isOnline(requireContext())) {
                offlineView.visibility = View.GONE
                webView.visibility = View.VISIBLE
                webView.reload()
            }
        }
    }

    private fun showOffline() {
        webView.visibility = View.GONE
        offlineView.visibility = View.VISIBLE
    }

    fun loadUrl(url: String) {
        currentUrl = url
        if (!isAdded || !viewsReady) return
        if (NetworkUtils.isOnline(requireContext())) {
            offlineView.visibility = View.GONE
            webView.visibility = View.VISIBLE
            webView.loadUrl(url)
        } else {
            showOffline()
        }
    }

    fun canGoBack(): Boolean = ::webView.isInitialized && webView.canGoBack()

    fun goBack(): Boolean {
        return if (::webView.isInitialized && webView.canGoBack()) {
            webView.goBack()
            true
        } else false
    }

    companion object {
        private const val KEY_URL = "webview_url"
    }
}
