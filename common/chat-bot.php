<style>
    /* Floating Buttons */
    .floating-wrap {
        position: fixed;
        bottom: 20px;
        z-index: 9999;
        font-family: Arial, sans-serif;
    }

    .floating-left {
        left: 20px;
    }

    .floating-right {
        right: 20px;
    }

    .floating-buttons {
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
    }

    .float-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 52px;
        height: 52px;
        border-radius: 50%;
        background: transparent;
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.12);
        cursor: pointer;
        text-decoration: none;
        font-size: 22px;
        transition: transform .12s ease, box-shadow .12s ease;
        position: relative;
    }

    .float-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 22px rgba(0, 0, 0, 0.14);
    }

    .float-btn[data-label]:hover::after {
        content: attr(data-label);
        position: absolute;
        padding: 6px 10px;
        border-radius: 8px;
        background: #111;
        color: #fff;
        font-size: 13px;
        white-space: nowrap;
    }

    /* Position tooltip on right or left based on button */
    .floating-left .float-btn[data-label]:hover::after {
        left: 64px;
    }

    .floating-right .float-btn[data-label]:hover::after {
        right: 64px;
    }

    @media (max-width:640px) {
        .float-btn[data-label]:hover::after {
            display: none;
        }
    }
</style>

<!-- Left: WhatsApp -->
<div class="floating-wrap floating-left" aria-hidden="false">
    <div class="floating-buttons">
        <a id="waBtn" href="https://api.whatsapp.com/send?phone=919142569346&text=Hello!%20I%20would%20like%20to%20know%20more%20about%20your%20services." class="float-btn" target="_blank" rel="noopener noreferrer" data-label="WhatsApp" aria-label="WhatsApp message">
            <img src="<?= $base_url ?>assets/images/user/whatsapp.gif" alt="WhatsApp" class="img-fluid" style="max-width:50px;">
        </a>
    </div>
</div>

<!-- Right: Call -->
<div class="floating-wrap floating-right" aria-hidden="false">
    <div class="floating-buttons">
        <a id="callBtn" href="tel:+919142569346" class="float-btn" data-label="Call us" aria-label="Call us">
            <img src="<?= $base_url ?>assets/images/user/call.gif" alt="Call Now" class="img-fluid" style="max-width:50px;">
        </a>
    </div>
</div>
