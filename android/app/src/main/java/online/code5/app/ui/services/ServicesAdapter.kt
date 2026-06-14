package online.code5.app.ui.services

import android.view.LayoutInflater
import android.view.ViewGroup
import android.view.ViewOutlineProvider
import android.graphics.Outline
import androidx.recyclerview.widget.RecyclerView
import online.code5.app.databinding.ItemServiceBinding

class ServicesAdapter(
    private val onServiceClick: (ServiceItem) -> Unit
) : RecyclerView.Adapter<ServicesAdapter.ViewHolder>() {

    private val items = servicesList

    override fun onCreateViewHolder(parent: ViewGroup, viewType: Int): ViewHolder {
        val binding = ItemServiceBinding.inflate(
            LayoutInflater.from(parent.context), parent, false
        )
        return ViewHolder(binding)
    }

    override fun onBindViewHolder(holder: ViewHolder, position: Int) {
        holder.bind(items[position])
    }

    override fun getItemCount() = items.size

    inner class ViewHolder(
        private val binding: ItemServiceBinding
    ) : RecyclerView.ViewHolder(binding.root) {

        fun bind(service: ServiceItem) {
            binding.serviceName.text = service.name
            binding.serviceDesc.text = service.description
            binding.iconText.text = service.iconLetter

            binding.iconBg.outlineProvider = object : ViewOutlineProvider() {
                override fun getOutline(view: android.view.View?, outline: Outline?) {
                    outline?.setRoundRect(0, 0, view?.width ?: 0, view?.height ?: 0, 24f)
                }
            }
            binding.iconBg.clipToOutline = true

            binding.root.setOnClickListener {
                onServiceClick(service)
            }
        }
    }
}
