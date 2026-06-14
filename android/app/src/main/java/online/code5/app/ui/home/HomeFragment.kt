package online.code5.app.ui.home

import android.content.Intent
import android.net.Uri
import android.os.Bundle
import android.view.LayoutInflater
import android.view.View
import android.view.ViewGroup
import android.view.inputmethod.EditorInfo
import androidx.fragment.app.Fragment
import androidx.navigation.fragment.findNavController
import online.code5.app.R
import online.code5.app.databinding.FragmentHomeBinding

class HomeFragment : Fragment() {
    private var _binding: FragmentHomeBinding? = null
    private val binding get() = _binding!!

    override fun onCreateView(
        inflater: LayoutInflater, container: ViewGroup?, savedInstanceState: Bundle?
    ): View {
        _binding = FragmentHomeBinding.inflate(inflater, container, false)
        return binding.root
    }

    override fun onViewCreated(view: View, savedInstanceState: Bundle?) {
        super.onViewCreated(view, savedInstanceState)

        setupDomainSearch()
        setupServiceCards()
        setupButtons()
    }

    private fun setupDomainSearch() {
        binding.inputDomain.setOnEditorActionListener { _, actionId, _ ->
            if (actionId == EditorInfo.IME_ACTION_SEARCH) {
                val domain = binding.inputDomain.text.toString().trim()
                if (domain.isNotEmpty()) {
                    val bundle = Bundle().apply { putString("url", "https://code5.online/domain-checker.php?domain=$domain") }
                    findNavController().navigate(R.id.nav_domains)
                }
                true
            } else false
        }

        binding.btnSearch.setOnClickListener {
            val domain = binding.inputDomain.text.toString().trim()
            if (domain.isNotEmpty()) {
                findNavController().navigate(R.id.nav_domains)
            }
        }
    }

    private fun setupServiceCards() {
        binding.serviceWebHosting.setOnClickListener {
            val bundle = Bundle().apply { putString("service_id", "web_hosting") }
            findNavController().navigate(R.id.nav_service_detail, bundle)
        }
        binding.serviceDomains.setOnClickListener {
            val bundle = Bundle().apply { putString("service_id", "domains") }
            findNavController().navigate(R.id.nav_service_detail, bundle)
        }
        binding.serviceVps.setOnClickListener {
            val bundle = Bundle().apply { putString("service_id", "vps") }
            findNavController().navigate(R.id.nav_service_detail, bundle)
        }
        binding.serviceSsl.setOnClickListener {
            val bundle = Bundle().apply { putString("service_id", "ssl") }
            findNavController().navigate(R.id.nav_service_detail, bundle)
        }
    }

    private fun setupButtons() {
        binding.btnViewAllServices.setOnClickListener {
            findNavController().navigate(R.id.nav_services)
        }

        binding.btnViewPricing.setOnClickListener {
            findNavController().navigate(R.id.nav_services)
        }
    }

    override fun onDestroyView() {
        super.onDestroyView()
        _binding = null
    }
}
