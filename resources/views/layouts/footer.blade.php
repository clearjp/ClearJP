<footer class="site-footer" role="contentinfo" aria-label="Pie de pagina">
    <div class="footer-container">
        

        <nav class="footer-nav" aria-label="Navegacion del pie de pagina">
            <a href="/">Inicio</a>
            <a href="/productos">Productos</a>
            <a href="/servicios">Servicios</a>
            <a href="/faq">FAQ</a>
            <a href="/login">Login</a>
        </nav>

        <div class="footer-contact">
            <a href="mailto:clearjp@yahoo.com" class="footer-link" aria-label="Enviar email a ClearJP">
                <span aria-hidden="true">✉</span>
                <span>Email: clearjp@yahoo.com</span>
            </a>
            <a href="https://wa.me/573043460665" class="footer-link" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp a ClearJP">
                <span aria-hidden="true">🟢</span>
                <span>WhatsApp: +57 304 346 0665</span>
            </a>
        </div>

        <div class="footer-social" aria-label="Redes sociales">
            <a href="https://www.tiktok.com/@clearjp.technology?_r=1&_t=ZS-94VUBOZLAN6" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="TikTok de ClearJP">
                <span aria-hidden="true">🎵</span>
                <span>TikTok</span>
            </a>
            <a href="https://www.facebook.com/share/1DfWG8dRFZ/" class="footer-social-link" target="_blank" rel="noopener noreferrer" aria-label="Facebook de ClearJP">
                <span aria-hidden="true">📘</span>
                <span>Facebook</span>
            </a>
        </div>

        <p class="footer-copy">&copy; {{ now()->year }} ClearJP - Todos los derechos reservados</p>
    </div>
</footer>

<style>
    .site-footer {
        background: var(--brand-primary, #006d77);
        color: #ffffff;
        margin-top: 2rem;
    }

    .footer-container {
        max-width: 1100px;
        margin: 0 auto;
        padding: 2rem 1rem;
        text-align: center;
    }

    .footer-brand {
        font-size: 1.4rem;
        font-weight: 700;
        letter-spacing: 0.02em;
    }

    .footer-nav {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 0.9rem;
        margin: 0 0 1.1rem;
    }

    .footer-nav a,
    .footer-link {
        color: #ffffff;
        text-decoration: none;
    }

    .footer-nav a:hover,
    .footer-link:hover {
        color: var(--brand-accent, #83c5be);
    }

    .footer-contact {
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 0.55rem;
        margin-bottom: 1rem;
    }

    .footer-link {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        font-size: 0.95rem;
    }

    .footer-social {
        display: flex;
        justify-content: center;
        gap: 0.9rem;
        margin-bottom: 1rem;
        flex-wrap: wrap;
    }

    .footer-social-link {
        display: inline-flex;
        align-items: center;
        gap: 0.4rem;
        color: #ffffff;
        text-decoration: none;
        padding: 0.35rem 0.6rem;
        border: 1px solid rgba(255, 255, 255, 0.25);
        border-radius: 999px;
    }

    .footer-social-link:hover {
        color: var(--brand-accent, #83c5be);
        border-color: var(--brand-accent, #83c5be);
    }

    .footer-copy {
        color: #d7efed;
        font-size: 0.9rem;
        margin: 0;
    }

    @media (max-width: 640px) {
        .footer-container {
            padding: 1.5rem 0.85rem;
        }

        .footer-brand {
            font-size: 1.2rem;
        }

        .footer-nav {
            gap: 0.7rem;
        }
    }
</style>
