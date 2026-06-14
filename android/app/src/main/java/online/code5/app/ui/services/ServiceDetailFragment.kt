package online.code5.app.ui.services

import android.content.ActivityNotFoundException
import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.widget.TextView
import android.widget.Toast
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.navArgs
import online.code5.app.R
import online.code5.app.databinding.FragmentServiceDetailBinding
import online.code5.app.util.Constants
import java.net.URLEncoder

class ServiceDetailFragment : Fragment() {
    private var _binding: FragmentServiceDetailBinding? = null
    private val binding get() = _binding!!
    private val args: ServiceDetailFragmentArgs by navArgs()

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?, savedInstanceState: Bundle?
    ): View {
        _binding = FragmentServiceDetailBinding.inflate(inflater, container, false)
        return binding.root
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        val service = servicesList.find { it.id == args.serviceId }
        if (service == null) {
            Toast.makeText(context, R.string.error_occurred, Toast.LENGTH_SHORT).show()
            return
        }

        displayService(service)
    }

    private fun displayService(service: ServiceItem) {
        binding.serviceName.text = service.name
        binding.serviceDescription.text = service.description
        binding.pricingValue.text = service.priceFrom ?: "Contact us for pricing"

        for (feature in service.features) {
            val featureView = LayoutInflater.from(context).inflate(
                R.layout.item_service_detail_feature, binding.featuresContainer, false
            ) as TextView
            featureView.text = feature
            binding.featuresContainer.addView(featureView)
        }

        val orderClick = View.OnClickListener { openWhatsApp(service) }
        binding.btnOrder.setOnClickListener(orderClick)
        binding.btnOrderBottom.setOnClickListener(orderClick)
    }

    private fun openWhatsApp(service: ServiceItem) {
        val message = "Hi Code5! I would like to know more about your ${service.name} service."
        val encoded = URLEncoder.encode(message, "UTF-8")

        try {
            val uri = Uri.parse("https://wa.me/${Constants.WHATSAPP_NUMBER}?text=$encoded")
            startActivity(Intent(Intent.ACTION_VIEW, uri))
        } catch (e: ActivityNotFoundException) {
            try {
                val webUri = Uri.parse("https://web.whatsapp.com/send?phone=${Constants.WHATSAPP_NUMBER}&text=$encoded")
                startActivity(Intent(Intent.ACTION_VIEW, webUri))
            } catch (e2: ActivityNotFoundException) {
                if (isAdded) {
                    Toast.makeText(context, R.string.error_occurred, Toast.LENGTH_SHORT).show()
                }
            }
        }
    }

    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}
