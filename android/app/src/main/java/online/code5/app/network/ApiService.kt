package online.code5.app.network

import online.code5.app.network.models.DomainResponse
import online.code5.app.network.models.WhoisResponse
import retrofit2.http.GET
import retrofit2.http.Query

interface ApiService {
    @GET("domain-checker.php")
    suspend fun checkDomain(
        @Query("domain") domain: String,
        @Query("action") action: String = "register"
    ): DomainResponse

    @GET("whois-api.php")
    suspend fun whoisLookup(
        @Query("q") domain: String
    ): WhoisResponse
}
