---
title: 'Votre Projet ?'
media_order: 'Background 16_9.png'
smallTitle: Contact
menu: contact
cache_enable: false
visible: true
background: 'Background 16_9.png'
opacity: '0.75'
phoneTitle: Téléphone
phonePhone: 'Phone: (+33) 629 674 379'
emailTitle: E-mail
emailAddress: ncpmedia21@gmail.com
addressTitle: Où nous trouver ?
addressDetails: "Dijon | 21000<br>\r\nLyon | 69000"
form:
    name: kontakt-ajax-form
    template: form-messages
    action: /home
    refresh_prevention: true
    fields:
        -
            name: name
            label: false
            placeholder: 'Votre Nom'
            autofocus: 'off'
            autocomplete: 'on'
            type: text
            outerclasses: form-field
            classes: full-width
        -
            name: email
            label: false
            placeholder: 'Votre Adresse E-mail'
            type: email
            outerclasses: form-field
            classes: full-width
        -
            name: subject
            label: false
            type: text
            placeholder: Objet
            outerClasses: form-field
            classes: full-width
        -
            name: message
            label: false
            placeholder: 'Votre message'
            type: textarea
            outerclasses: form-field
            classes: full-width
            rows: null
    buttons:
        -
            type: submit
            value: Envoyer
            outerclasses: form-field
            classes: 'full-width btn--primary'
    process:
        -
            email: 
                from: '{{ config.plugins.email.from }}'
                to:
                    - '{{ config.plugins.email.from }}'
                    - '{{ form.value.email }}'
                subject: '[Message from] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            message: 'Merci pour votre message ! Nous reviendrons vers vous sous 48h.'
---

Dites nous en plus sur vos projets et besoins, nous reviendrons vers vous en moins de 48h !