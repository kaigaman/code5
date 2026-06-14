package online.code5.app.ui.account

import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import online.code5.app.databinding.FragmentAccountBinding
import online.code5.app.ui.webview.WebViewFragment

class AccountFragment : WebViewFragment() {
    private var _accBinding: FragmentAccountBinding? = null
    private val accBinding get() = _accBinding!!

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?, savedInstanceState: Bundle?
    ): View {
        _accBinding = FragmentAccountBinding.inflate(inflater, container, false)
        return accBinding.root
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        setWebView(accBinding.webview)
        setSwipeRefresh(accBinding.swipeRefresh)
        setProgressBar(accBinding.progressBar)
        setOfflineView(accBinding.offlineView)
        setRetryButton(accBinding.btnRetry)

        super.onViewCreated(view, savedInstanceState)

        accBinding.btnPrivacy.setOnClickListener {
            val intent = Intent(Intent.ACTION_VIEW, Uri.parse("https://code5.online/privacy-policy-app.php"))
            startActivity(intent)
        }
    }

    override fun onDestroyView() {
        super.onDestroyView()
        _accBinding = null
    }
}
