<script>
    window.interdeal = {
        "sitekey": {{settings('\\Astrogoat\\Equalweb\\Settings\\EqualwebSettings', 'sitekey')}},
        "Menulang": "EN",
        "domains": {
            "js": "https://cdn.equalweb.com/",
            "acc": "https://access.equalweb.com/"
        }
    };
    (function(doc, head, body){
        var coreCall = doc.createElement('script');
        coreCall.src = 'https://cdn.equalweb.com/core/3.0.0/accessibility.js';
        coreCall.defer = true;
        coreCall.integrity = 'sha512-Z/Fp/le5EMHTTNnZV1RBa6aoSrTkOjXLSdL6nHqG8c70vKlDKjeuUCs7l5Nxt66oSkEnlcZAX6gUUNqjhN9Hew==';
        coreCall.crossOrigin = 'anonymous';
        coreCall.setAttribute('data-cfasync', false );
        body? body.appendChild(coreCall) : head.appendChild(coreCall);
    })(document, document.head, document.body);

    const equalWebEl = document.querySelector('#equalWeb');
    equalWebEl.addEventListener('click', e => {
        e.preventDefault();
        window.interdeal.a11y.openMenu();
    });
</script>
