<style>
.order-form-wrap {
    max-width: 900px;
    margin: 0 auto;
}
.order-form-wrap .category-group {
    margin-bottom: 24px;
    padding: 16px 20px;
    background: #f8f9fa;
    border-radius: 8px;
    border: 1px solid #e9ecef;
}
.order-form-wrap .category-group h4 {
    font-size: 1rem;
    font-weight: 700;
    margin-bottom: 12px;
    padding-bottom: 8px;
    border-bottom: 2px solid #40e0d0;
}
.order-form-wrap .product-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 6px 0;
    border-bottom: 1px solid #eee;
}
.order-form-wrap .product-item:last-child {
    border-bottom: none;
}
.order-form-wrap .product-item label {
    flex: 1;
    margin: 0;
    font-size: 0.9rem;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 8px;
}
.order-form-wrap .product-item input[type="checkbox"] {
    width: 16px;
    height: 16px;
    cursor: pointer;
}
.order-form-wrap .product-item .qty {
    width: 55px;
    text-align: center;
    padding: 2px 4px;
    font-size: 0.85rem;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.order-form-wrap .customer-fields .form-control {
    margin-bottom: 12px;
    font-size: 0.9rem;
}
.order-form-wrap .submit-area {
    text-align: center;
    padding: 20px 0;
}
.order-form-wrap .submit-area .btn-order-wa {
    display: inline-block;
    padding: 14px 40px;
    font-size: 1.1rem;
    font-weight: 700;
    color: #fff;
    background: #25D366;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background 0.3s ease;
    text-decoration: none;
}
.order-form-wrap .submit-area .btn-order-wa:hover {
    background: #1da851;
}
.order-form-wrap .total-estimate {
    font-size: 1.1rem;
    font-weight: 700;
    text-align: right;
    margin-top: 10px;
    padding: 10px 20px;
    background: #e8f5e9;
    border-radius: 6px;
}
.order-form-wrap .empty-cart-msg {
    text-align: center;
    color: #666;
    padding: 40px 20px;
    font-size: 1rem;
}
@media (max-width: 768px) {
    .order-form-wrap .product-item {
        flex-wrap: wrap;
    }
    .order-form-wrap .product-item label {
        flex: 1 1 100%;
    }
}
</style>

<div class="order-form-wrap">
    <div class="text-center mb-4">
        <h3 class="fw-bold">Place Your Order</h3>
        <p class="text-muted">Select the products you need below, then send your order to us on WhatsApp for processing.</p>
    </div>

    <div class="category-group" style="border-color:#eab308;background:#fffbe6;">
        <h4 style="border-bottom-color:#eab308;">Search &amp; Register a Domain</h4>
        <div class="domain-search-row" style="display:flex;gap:8px;flex-wrap:wrap;align-items:center;">
            <input type="text" id="domain_name" placeholder="yourdomain" style="flex:2;min-width:150px;padding:8px 12px;border:1px solid #ccc;border-radius:4px;font-size:0.9rem;">
            <select id="domain_tld" style="flex:1;min-width:120px;padding:8px 12px;border:1px solid #ccc;border-radius:4px;font-size:0.9rem;">
                <option value=".com" data-price="40000">.com - 40,000 Ugx/yr</option>
                <option value=".net" data-price="40000">.net - 40,000 Ugx/yr</option>
                <option value=".org" data-price="40000">.org - 40,000 Ugx/yr</option>
                <option value=".info" data-price="70000">.info - 70,000 Ugx/yr</option>
                <option value=".biz" data-price="70000">.biz - 70,000 Ugx/yr</option>
                <option value=".me" data-price="60000">.me - 60,000 Ugx/yr</option>
                <option value=".co" data-price="90000">.co - 90,000 Ugx/yr</option>
                <option value=".tv" data-price="110000">.tv - 110,000 Ugx/yr</option>
                <option value=".co.uk" data-price="50000">.co.uk - 50,000 Ugx/yr</option>
                <option value=".org.uk" data-price="50000">.org.uk - 50,000 Ugx/yr</option>
                <option value=".shop" data-price="130000">.shop - 130,000 Ugx/yr</option>
                <option value=".church" data-price="110000">.church - 110,000 Ugx/yr</option>
                <option value=".app" data-price="70000">.app - 70,000 Ugx/yr</option>
                <option value=".africa" data-price="80000">.africa - 80,000 Ugx/yr</option>
                <option value=".tours" data-price="100000">.tours - 100,000 Ugx/yr</option>
                <option value=".ug" data-price="100000">.ug - 100,000 Ugx/yr</option>
                <option value=".co.ug" data-price="100000">.co.ug - 100,000 Ugx/yr</option>
                <option value=".or.ug" data-price="100000">.or.ug - 100,000 Ugx/yr</option>
                <option value=".ac.ug" data-price="100000">.ac.ug - 100,000 Ugx/yr</option>
                <option value=".go.ug" data-price="100000">.go.ug - 100,000 Ugx/yr</option>
                <option value=".sc.ug" data-price="100000">.sc.ug - 100,000 Ugx/yr</option>
                <option value=".org.ug" data-price="100000">.org.ug - 100,000 Ugx/yr</option>
                <option value=".com.ug" data-price="100000">.com.ug - 100,000 Ugx/yr</option>
            </select>
            <button onclick="checkDomain()" style="padding:8px 20px;background:#0b0b0b;color:#fff;border:none;border-radius:4px;cursor:pointer;font-weight:600;">Check</button>
        </div>
        <div id="domain_result" style="margin-top:10px;font-size:0.9rem;min-height:30px;"></div>
        <div id="domain_selected" style="margin-top:6px;display:flex;flex-wrap:wrap;gap:6px;"></div>
    </div>

    <div class="customer-fields row g-2 mb-4">
        <div class="col-md-4">
            <input type="text" id="cust_name" class="form-control" placeholder="Your Full Name *" required>
        </div>
        <div class="col-md-4">
            <input type="tel" id="cust_phone" class="form-control" placeholder="Phone Number *" required>
        </div>
        <div class="col-md-4">
            <input type="email" id="cust_email" class="form-control" placeholder="Email Address">
        </div>
    </div>

    <div class="category-group">
        <h4>Shared Hosting</h4>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Economy Shared Hosting" data-price="50000"> Economy - <strong>50,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Deluxe Shared Hosting" data-price="80000"> Deluxe - <strong>80,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Premium Shared Hosting" data-price="120000"> Premium - <strong>120,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Ultra Shared Hosting" data-price="150000"> Ultra - <strong>150,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Corporate Shared Hosting" data-price="230000"> Corporate - <strong>230,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
    </div>

    <div class="category-group">
        <h4>VPS Hosting</h4>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="VPS Starter" data-price="1000000"> Starter - <strong>1,000,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="VPS Medium" data-price="1500000"> Medium - <strong>1,500,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="VPS Advanced" data-price="2000000"> Advanced - <strong>2,000,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
    </div>

    <div class="category-group">
        <h4>Cloud Hosting</h4>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Cloud S1" data-price="250000"> Hyperslice Cloud S1 - <strong>250,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Cloud S2" data-price="350000"> Hyperslice Cloud S2 - <strong>350,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Cloud S3" data-price="500000"> Hyperslice Cloud S3 - <strong>500,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
    </div>

    <div class="category-group">
        <h4>Dedicated Servers</h4>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Rapid Deploy Server" data-price="6000000"> Rapid Deploy Server - <strong>6,000,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="E-2136 Xeon Server" data-price="12000000"> E-2136 Coffee Lake Xeon - <strong>12,000,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="E-2236 Xeon Server" data-price="17400000"> E-2236 Coffee Lake Xeon - <strong>17,400,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
    </div>

    <div class="category-group">
        <h4>Domains</h4>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name=".com Domain Registration" data-price="45000"> .com - <strong>45,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name=".ug Domain Registration" data-price="120000"> .ug - <strong>120,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name=".co.ug Domain Registration" data-price="120000"> .co.ug - <strong>120,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name=".org Domain Registration" data-price="55000"> .org - <strong>55,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
    </div>

    <div class="category-group">
        <h4>SSL Certificates</h4>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="DV SSL Certificate" data-price="50000"> DV SSL - <strong>50,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="OV SSL Certificate" data-price="250000"> OV SSL - <strong>250,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="EV SSL Certificate" data-price="500000"> EV SSL - <strong>500,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
    </div>

    <div class="category-group">
        <h4>Other Services</h4>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="cPanel License" data-price="15000"> cPanel License - <strong>15,000 Ugx</strong>/mo</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Email Hosting" data-price="60000"> Email Hosting - <strong>60,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="SiteLock Security" data-price="600000"> SiteLock Website Security - <strong>600,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="CodeGuard Backup" data-price="120000"> CodeGuard Backup - <strong>120,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="Acronis Backup 25GB" data-price="120000"> Acronis Backup 25 GB - <strong>120,000 Ugx</strong>/yr</label>
            <input type="number" class="qty" value="1" min="1">
        </div>
        <div class="product-item">
            <label><input type="checkbox" class="order-cb" data-name="FOSSBilling Setup" data-price="15000"> FOSSBilling Setup - <strong>15,000 Ugx</strong></label>
            <input type="number" class="qty" value="1" min="1">
        </div>
    </div>

    <div class="category-group">
        <h4>Additional Items / Special Requests</h4>
        <textarea id="cust_notes" class="form-control" rows="4" placeholder="List any other products or services you need, or any special requests..."></textarea>
    </div>

    <div class="total-estimate" id="totalDisplay">Total Estimate: 0 Ugx</div>

    <div class="submit-area">
        <button onclick="sendWhatsAppOrder()" class="btn-order-wa">&#128241; Send Order via WhatsApp</button>
        <p class="text-muted mt-2 small">You'll be redirected to WhatsApp to confirm and send your order.</p>
    </div>
</div>

<script>
var domainPrices = {
    ".com": 40000, ".net": 40000, ".org": 40000,
    ".info": 70000, ".biz": 70000, ".me": 60000,
    ".co": 90000, ".tv": 110000, ".co.uk": 50000,
    ".org.uk": 50000, ".shop": 130000, ".church": 110000,
    ".app": 70000, ".africa": 80000, ".tours": 100000,
    ".ug": 100000, ".co.ug": 100000, ".or.ug": 100000,
    ".ac.ug": 100000, ".go.ug": 100000, ".sc.ug": 100000,
    ".org.ug": 100000, ".com.ug": 100000,
};

var domainCart = [];

function checkDomain() {
    var name = document.getElementById("domain_name").value.trim().toLowerCase();
    var tld = document.getElementById("domain_tld").value;
    var result = document.getElementById("domain_result");
    if (!name) { result.innerHTML = '<span style="color:#cc0000;">Please enter a domain name.</span>'; return; }
    if (!/^[a-z0-9][a-z0-9\-]{0,61}[a-z0-9]$/.test(name) && name.length > 0) {
        result.innerHTML = '<span style="color:#cc0000;">Invalid domain name. Use letters, numbers, and hyphens only.</span>';
        return;
    }
    result.innerHTML = '<span style="color:#888;">Checking availability...</span>';
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "includes/domain-check.php?domain=" + encodeURIComponent(name) + "&tld=" + encodeURIComponent(tld), true);
    xhr.onload = function() {
        try {
            var data = JSON.parse(xhr.responseText);
            if (data.status === "available") {
                var price = domainPrices[tld] || 45000;
                result.innerHTML = '<span style="color:#1a8a1a;font-weight:700;">✓ ' + data.domain + ' is available! ' + formatPrice(price) + ' Ugx/yr</span>'
                    + ' <button onclick="addDomainToCart()" style="padding:6px 16px;background:#eab308;color:#0b0b0b;border:none;border-radius:4px;cursor:pointer;font-weight:700;margin-left:8px;">+ Add to Order</button>';
            } else if (data.status === "taken") {
                result.innerHTML = '<span style="color:#cc0000;">✗ ' + data.domain + ' is already registered. Try a different name or TLD.</span>';
            } else {
                result.innerHTML = '<span style="color:#cc8800;">' + (data.message || "Check unavailable") + '</span>'
                    + ' <button onclick="addDomainToCart()" style="padding:6px 16px;background:#eab308;color:#0b0b0b;border:none;border-radius:4px;cursor:pointer;font-weight:700;margin-left:8px;">+ Add Anyway</button>';
            }
        } catch(e) {
            result.innerHTML = '<span style="color:#cc8800;">Check unavailable. <button onclick="addDomainToCart()" style="padding:6px 16px;background:#eab308;color:#0b0b0b;border:none;border-radius:4px;cursor:pointer;font-weight:700;margin-left:8px;">+ Add to Order Anyway</button></span>';
        }
    };
    xhr.onerror = function() {
        result.innerHTML = '<span style="color:#cc8800;">Network error. <button onclick="addDomainToCart()" style="padding:6px 16px;background:#eab308;color:#0b0b0b;border:none;border-radius:4px;cursor:pointer;font-weight:700;margin-left:8px;">+ Add to Order Anyway</button></span>';
    };
    xhr.send();
}

function addDomainToCart() {
    var name = document.getElementById("domain_name").value.trim().toLowerCase();
    var tld = document.getElementById("domain_tld").value;
    var sel = document.getElementById("domain_tld");
    var price = parseInt(sel.options[sel.selectedIndex].getAttribute('data-price')) || domainPrices[tld] || 45000;
    var fqdn = name + tld;
    if (!name) return;
    if (domainCart.some(function(d) { return d.domain === fqdn; })) {
        document.getElementById("domain_result").innerHTML = '<span style="color:#cc8800;">' + fqdn + ' is already in your order.</span>';
        return;
    }
    domainCart.push({ domain: fqdn, tld: tld, price: price });
    renderDomainCart();
    updateTotal();
    document.getElementById("domain_result").innerHTML = '<span style="color:#1a8a1a;font-weight:700;">\u2713 ' + fqdn + ' added to your order!</span>';
    document.getElementById("domain_name").value = "";
}

function removeDomain(fqdn) {
    domainCart = domainCart.filter(function(d) { return d.domain !== fqdn; });
    renderDomainCart();
    updateTotal();
}

function renderDomainCart() {
    var container = document.getElementById("domain_selected");
    if (domainCart.length === 0) { container.innerHTML = ""; return; }
    var html = "";
    domainCart.forEach(function(d) {
        html += '<span style="display:inline-flex;align-items:center;gap:4px;background:#eab308;color:#0b0b0b;padding:4px 10px;border-radius:4px;font-size:0.85rem;font-weight:600;">'
            + d.domain + ' (' + formatPrice(d.price) + ' Ugx)'
            + ' <a href="#" onclick="removeDomain(\'' + d.domain + '\');return false;" style="color:#0b0b0b;text-decoration:none;font-weight:bold;">✕</a>'
            + '</span>';
    });
    container.innerHTML = html;
}

function sendWhatsAppOrder() {
    var name = document.getElementById('cust_name').value.trim();
    var phone = document.getElementById('cust_phone').value.trim();
    var email = document.getElementById('cust_email').value.trim();

    if (!name) { alert('Please enter your name.'); return; }
    if (!phone) { alert('Please enter your phone number.'); return; }

    var msg = '*New Order - Code5*';
    msg += '\n\n*Customer Details:*';
    msg += '\nName: ' + name;
    msg += '\nPhone: ' + phone;
    if (email) msg += '\nEmail: ' + email;

    msg += '\n\n*Items Ordered:*';
    var items = document.querySelectorAll('.order-cb:checked');
    var totalAmount = 0;
    var hasItems = false;

    items.forEach(function(cb) {
        hasItems = true;
        var pName = cb.getAttribute('data-name');
        var pPrice = parseInt(cb.getAttribute('data-price'));
        var row = cb.closest('.product-item');
        var qty = parseInt(row.querySelector('.qty').value) || 1;
        var lineTotal = pPrice * qty;
        totalAmount += lineTotal;
        msg += '\n- ' + pName + ' x' + qty + ' @ ' + formatPrice(pPrice) + ' Ugx = ' + formatPrice(lineTotal) + ' Ugx';
    });

    if (domainCart.length > 0) {
        msg += '\n\n*Domains Added:*';
        domainCart.forEach(function(d) {
            hasItems = true;
            totalAmount += d.price;
            msg += '\n- ' + d.domain + ' @ ' + formatPrice(d.price) + ' Ugx';
        });
    }

    if (!hasItems && domainCart.length === 0) { alert('Please select at least one product or domain.'); return; }

    msg += '\n\n*Total Estimated: ' + formatPrice(totalAmount) + ' Ugx*';

    var notes = document.getElementById('cust_notes').value.trim();
    if (notes) {
        msg += '\n\n*Additional Notes:*\n' + notes;
    }

    msg += '\n\n--- Please process this order ---';

    var waNum = '<?php echo $site_whatsapp; ?>';
    var url = 'https://wa.me/' + waNum + '?text=' + encodeURIComponent(msg);
    window.open(url, '_blank');
}

function formatPrice(n) {
    return n.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

(function() {
    var cbs = document.querySelectorAll('.order-cb');
    var qties = document.querySelectorAll('.order-cb, .qty');
    function updateTotal() {
        var total = 0;
        document.querySelectorAll('.order-cb:checked').forEach(function(cb) {
            var price = parseInt(cb.getAttribute('data-price'));
            var row = cb.closest('.product-item');
            var qty = parseInt(row.querySelector('.qty').value) || 1;
            total += price * qty;
        });
        if (typeof domainCart !== 'undefined') {
            domainCart.forEach(function(d) { total += d.price; });
        }
        document.getElementById('totalDisplay').textContent = 'Total Estimate: ' + formatPrice(total) + ' Ugx';
        var badge = document.getElementById('cartBadge');
        if (badge) {
            var count = document.querySelectorAll('.order-cb:checked').length;
            if (typeof domainCart !== 'undefined') { count += domainCart.length; }
            badge.textContent = count;
        }
    }
    cbs.forEach(function(el) { el.addEventListener('change', updateTotal); });
    qties.forEach(function(el) { el.addEventListener('change', updateTotal); el.addEventListener('input', updateTotal); });
})();
</script>

<script>
(function() {
    var params = new URLSearchParams(window.location.search);
    var domainParam = params.get('domain');
    if (domainParam) {
        var nameInput = document.getElementById('domain_name');
        var tldSelect = document.getElementById('domain_tld');
        if (nameInput) {
            var parts = domainParam.split('.');
            if (parts.length >= 2) {
                var name = parts[0];
                var tld = '.' + parts.slice(1).join('.');
                nameInput.value = name;
                if (tldSelect) {
                    for (var i = 0; i < tldSelect.options.length; i++) {
                        if (tldSelect.options[i].value === tld) {
                            tldSelect.selectedIndex = i;
                            break;
                        }
                    }
                }
                setTimeout(function() {
                    if (typeof checkDomain === 'function') {
                        checkDomain();
                    }
                }, 500);
            }
        }
    }
})();
</script>

<script>
(function() {
    var params = new URLSearchParams(window.location.search);
    var domainParam = params.get('domain');
    if (domainParam) {
        var nameInput = document.getElementById('domain_name');
        var tldSelect = document.getElementById('domain_tld');
        if (nameInput) {
            var parts = domainParam.split('.');
            if (parts.length >= 2) {
                var name = parts[0];
                var tld = '.' + parts.slice(1).join('.');
                nameInput.value = name;
                if (tldSelect) {
                    for (var i = 0; i < tldSelect.options.length; i++) {
                        if (tldSelect.options[i].value === tld) {
                            tldSelect.selectedIndex = i;
                            break;
                        }
                    }
                }
                setTimeout(function() {
                    if (typeof checkDomain === 'function') {
                        checkDomain();
                    }
                }, 500);
            }
        }
    }
})();
</script>

<script>
(function() {
    var params = new URLSearchParams(window.location.search);
    var domainParam = params.get('domain');
    if (domainParam) {
        var nameInput = document.getElementById('domain_name');
        var tldSelect = document.getElementById('domain_tld');
        if (nameInput) {
            var parts = domainParam.split('.');
            if (parts.length >= 2) {
                var name = parts[0];
                var tld = '.' + parts.slice(1).join('.');
                nameInput.value = name;
                if (tldSelect) {
                    for (var i = 0; i < tldSelect.options.length; i++) {
                        if (tldSelect.options[i].value === tld) {
                            tldSelect.selectedIndex = i;
                            break;
                        }
                    }
                }
                setTimeout(function() {
                    if (typeof checkDomain === 'function') {
                        checkDomain();
                    }
                }, 500);
            }
        }
    }
})();
</script>
