<?php return [
    'plugin' => [
        'name' => 'Snipcart Shop',
        'description' => 'Ecommerce plugin für October CMS mit Snipcart Backend',
        'titles' => [
            'products' => [
                'create' => 'Produkt erstellen',
                'update' => 'Produkt bearbeiten',
                'preview' => 'Produkt-Vorschau',
            ],
            'categories' => [
                'create' => 'Kategorie erstellen',
                'update' => 'Kategorie bearbeiten',
                'preview' => 'Kategorie-Vorschau',
            ],
            'orders' => [
                'show' => 'Bestellungsdetails',
                'export' => 'Bestellungen exportieren',
            ],
            'discounts' => [
                'create' => 'Rabatt erstellen',
                'update' => 'Rabatt bearbeiten',
                'preview' => 'Rabatt-Vorschau',
            ],
        ],
        'menu_items' => [
            'all_categories' => 'Alle Shop-Kategorien',
        ],
        'api_settings' => [
            'label' => 'API und Webhooks',
            'description' => 'Einstellungen zur API und den Webhooks',
            'public_api_key' => 'Öffentlicher API-Key',
            'public_api_key_comment' => 'Öffentlicher API-Key von snipcart.com',
            'private_api_key' => 'Privater API-Key',
            'private_api_key_comment' => 'Privater API-Key von snipcart.com',
            'webhook_url' => 'Webhook-URL',
            'webhook_url_comment' => 'Trage diese URL als Webhook-Ziel im snipcart.com Backend ein',
        ],
        'currency_settings' => [
            'label' => 'Währungen',
            'description' => 'Einstellungen zu den verwendeten Währungen',
            'currencies' => 'Geben Sie jeweils nur den offiziellen dreistelligen Währungscode ein.',
            'currency_code' => 'Währungscode',
        ],
        'general_settings' => [
            'category' => 'Snipcart Shop',
            'label' => 'Grundkonfiguration',
            'description' => 'Allgemeine Einstellungen',
            'product_page' => 'Produkt-Seite mit Checkout-Button',
            'product_page_comment' => 'Auf dieser Seite muss der Checkout-Button von Snipcart vorhanden sein.',
            'product_page_slug' => 'URL-Parameter (Standard: "slug")',
            'product_page_slug_comment' => 'Verwende diesen Parameter aus der URL um das Produkt zu finden.',
            'category_page' => 'Kategorie-Seite für Produkte-Übersicht',
            'category_page_comment' => 'Auf dieser Seite muss die Produkt-Liste Komponente hinzugefügt werden.',
            'category_page_slug' => 'URL-Parameter (Standard: "slug")',
            'category_page_slug_comment' => 'Verwende diesen Parameter aus der URL um die Kategorie zu finden.',
            'auto_pop' => 'Warenkorb nach Hinzufügen anzeigen',
            'auto_pop_comment' => 'Der Warenkorb wird direkt angezeigt, wenn ein Produkt hinzugefügt wurde',
            'show_continue_shopping' => '«Weiter shoppen»-Option anzeigen',
            'show_continue_shopping_comment' => 'Diese Option wird neben dem «Warenkorb schliessen» Button angezeigt',
            'split_firstname_and_lastname' => 'Separate Felder für Vor- und Nachnamen verwenden',
            'split_firstname_and_lastname_comment' => 'Zeigt separate Felder für den Vor- und Nachnamen an',
            'links' => 'Verlinkungen',
            'links_comment' => 'Wähle aus, auf welche Seiten für dein Shop verwendet werden sollen',
            'customizations' => 'Optionen',
            'customizations_comment' => 'Globale Konfigurationseinstellungen für deinen Shop',
        ],
        'common' => [
            'shop' => 'Shop',
            'products' => 'Produkte',
            'product' => 'Produkt',
            'orders' => 'Bestellungen',
            'cart' => 'Warenkorb',
            'shipping' => 'Versand',
            'taxes' => 'Steuern',
            'inventory' => 'Lagerbestand',
            'accessories' => 'Zubehör',
            'accessory' => 'Zubehör',
            'custom_fields' => 'Benutzerdefinierte Felder',
            'variants' => 'Varianten',
            'discounts' => 'Rabatte',
            'discount' => 'Rabatt',
            'select_placeholder' => '-- Bitte wählen',
            'main_image' => 'Hauptbild',
            'images' => 'Bilder',
            'attachments' => 'Bilder/Downloads',
            'downloads' => 'Downloads',
            'select_image' => 'Bild auswählen',
            'select_file' => 'Datei auswählen',
            'allowed' => 'Erlaubt',
            'not_allowed' => 'Nicht erlaubt',
            'seo' => 'SEO',
            'properties_links' => 'Eigenschaften/Links',
            'categories' => 'Kategorien',
            'category' => 'Kategorie',
            'meta_title' => 'Meta-Titel',
            'meta_description' => 'Meta-Beschreibung',
            'reorder' => 'Reihenfolge ändern',
            'id' => 'ID',
            'created_at' => 'Erstellungsdatum',
            'hide_published' => 'Verstecke veröffentlichte',
            'slug' => 'URL',
            'add_value' => 'Wert hinzufügen',
            'export_orders' => 'Bestellungen exportieren',
            'use_backend_defaults' => 'Standard-Einstellung aus Backend-Settings übernehmen',
            'api_error' => 'Fehler beim Speichern der Änderungen. Die API-Anfrage war fehlerhaft.',
        ],
        'variant' => [
            'method' => [
                'single' => 'Artikel',
                'variant' => 'Artikelvarianten',
            ],
        ],
        'custom_field_options' => [
            'text' => 'Textfeld',
            'textarea' => 'Mehrzeiliges Textfeld',
            'dropdown' => 'Auswahlliste',
            'checkbox' => 'Checkbox',
            'add' => 'Option hinzufügen',
            'name' => 'Name',
            'price' => 'Aufpreis',
            'attributes' => 'Attribute',
            'option' => 'Option',
        ],
        'product' => [
            'user_defined_id' => 'Artikelnummer',
            'name' => 'Produktname',
            'published' => 'Veröffentlicht',
            'not_published' => 'Nicht veröffentlicht',
            'published_comment' => 'Dieser Artikel ist im Shop sichtbar',
            'stock' => 'Lagerbestand',
            'price' => 'Preis',
            'description_short' => 'Kurzbeschreibung',
            'description' => 'Beschreibung',
            'weight' => 'Gewicht (g)',
            'length' => 'Länge (mm)',
            'height' => 'Höhe (mm)',
            'width' => 'Breite (mm)',
            'quantity_default' => 'Standard-Bestellmenge',
            'quantity_min' => 'Minimale Bestellmenge',
            'quantity_max' => 'Maximale Bestellmenge',
            'inventory_management_method' => 'Inventarverwaltungs-Methode',
            'allow_out_of_stock_purchases' => 'Nicht-an-Lager-Kauf erlauben',
            'allow_out_of_stock_purchases_comment' => 'Dieser Artikel darf auch dann bestellt werden, wenn er nicht an Lager ist',
            'stackable' => 'In Warenkorb zusammenfassen',
            'stackable_comment' => 'Beim mehrmaligen Hinzufügen zum Warenkorb diesen Artikel nur einmal auflisten (Anzahl erhöhen)',
            'shippable' => 'Versand möglich',
            'shippable_comment' => 'Dieser Artikel kann versendet werden',
            'taxable' => 'Besteuert',
            'taxable_comment' => 'Auf diesen Artikel fallen Steuern an',
            'add_currency' => 'Währung hinzufügen',
            'is_taxable' => 'Besteuert',
            'is_not_taxable' => 'Nicht besteuert',
            'currency' => 'Währung',
            'general' => 'Allgemein',
            'duplicate_currency' => 'Sie haben für eine Währung mehrere Preise eingetragen.',
            'property_title' => 'Titel',
            'property_value' => 'Wert',
            'link_title' => 'Titel',
            'link_target' => 'Link-Ziel',
            'properties' => 'Eigenschaften',
            'links' => 'Links',
        ],
        'category' => [
            'name' => 'Name',
            'code' => 'Code',
            'code_comment' => 'Dieser Code kann im Frontend zur Identifikation der Kategorie genutzt werden.',
            'parent' => 'Elternelement',
            'no_parent' => 'Kein Elternelement',
        ],
        'custom_fields' => [
            'name' => 'Feldname',
            'type' => 'Typ',
            'options' => 'Optionen',
            'required' => 'Pflichtfeld',
            'required_comment' => 'Dieses Feld muss beim Tätigen einer Bestellung ausgefüllt werden',
            'is_required' => 'Pflichtfeld',
            'is_not_required' => 'Kein Pflichtfeld',
        ],
        'discounts' => [
            'name' => 'Name',
            'code' => 'Gutschein-Code',
            'total_to_reach' => 'Gültig ab Bestellwert',
            'type' => 'Gutschein-Typ',
            'trigger' => 'Gültig wenn',
            'rate' => 'Rabatt (%)',
            'amount' => 'Rabatt-Betrag',
            'alternate_price' => 'Alternativer Preis',
            'max_number_of_usages' => 'Maximale Anzahl Anwendungen',
            'expires' => 'Gültig bis',
            'number_of_usages' => 'Anzahl Anwendungen',
            'shipping_description' => 'Name für alternative Versand-Methode',
            'shipping_cost' => 'Preis für alternative Versand-Methode',
            'shipping_guaranteed_days_to_delivery' => 'Garantierte Lieferung in Tagen',
            'section_type' => 'Was bewirkt der Gutschein?',
            'section_trigger' => 'Wann ist der Gutschein gültig?',
            'types' => [
                'fixed_amount' => 'Fixer-Rabatt',
                'rate' => 'Prozentualer-Rabatt',
                'alternate_price' => 'Alternativer Preis',
                'shipping' => 'Alternativer Versand-Preis',
            ],
            'triggers' => [
                'total' => 'Bestimmter Bestellwert erreicht wird',
                'code' => 'Gutschein-Code eingegeben wird',
                'product' => 'Bestimmtes Produkt im Warenkorb liegt',
            ],
        ],
        'order' => [
            'invoice_number' => 'Rechnungsnummer',
            'customer' => 'Kunde',
            'creation_date' => 'Erstellt am',
            'modification_date' => 'Bearbeitet am',
            'completion_date' => 'Abgeschlossen am',
            'credit_card' => 'Kreditkarte',
            'payment_status' => 'Bezahlstatus',
            'grand_total' => 'Gesamttotal',
            'billing_address' => 'Rechnungsadresse',
            'shipping_address' => 'Versandadresse',
            'currency' => 'Währung',
            'status' => 'Status',
            'email' => 'Email',
            'will_be_paid_later' => 'Wird später bezahlt',
            'shipping_address_same_as_billing' => 'Versandadresse gleich wie Rechnungsadresse',
            'credit_card_last4_digits' => 'Letzte 4 Ziffern',
            'tracking_number' => 'Trackingnummer',
            'tracking_url' => 'Tracking-URL',
            'shipping_fees' => 'Versandkosten',
            'shipping_provider' => 'Spediteur',
            'shipping_method' => 'Versandart',
            'card_holder_name' => 'Kartenhalter',
            'card_type' => 'Kartentyp',
            'payment_method' => 'Zahlungsmethode',
            'payment_gateway_used' => 'Zahlungsgateway',
            'tax_provider' => 'Steuern-Anbieter',
            'lang' => 'Sprache',
            'refunds_amount' => 'Rückerstattungsbetrag',
            'adjusted_amount' => 'Korrigierter Betrag',
            'rebate_amount' => 'Rabatt',
            'total' => 'Total',
            'taxes_total' => 'Steuerntotal',
            'items_total' => 'Artikeltotal',
            'subtotal' => 'Zwischentotal',
            'taxable_total' => 'Steuerbares Total',
            'total_weight' => 'Gesamgtgewicht',
            'total_rebate_rate' => 'Gesamt-Rabatt',
            'notes' => 'Notiz',
            'custom_fields' => 'Benutzerdefinierte Felder',
            'shipping_enabled' => 'Versand aktiv',
            'payment_transaction_id' => 'Transaktions-ID',
            'change_order_status' => 'Bestellungsstatus ändern',
            'change_payment_status' => 'Bezahlstatus ändern',
            'items' => 'Artikel',
            'quantity' => 'Menge',
            'shipping_address_is_same_as_billing' => 'Rechnungs- und Versandadresse sind gleich',
            'update_tracking_info' => 'Sendungsverfolgung hinterlegen',
            'invalid_status' => 'Der ausgewählte Status existiert nicht',
            'updated' => 'Bestellung aktualisiert',
            'modal' => [
                'cancel' => 'Abbrechen',
                'update' => 'Daten aktualisieren',
            ]
        ],
        'order_status' => [
            'processed' => 'Verarbeitet',
            'disputed' => 'Reklamiert',
            'shipped' => 'Versendet',
            'delivered' => 'Geliefert',
            'pending' => 'Pendent',
            'cancelled' => 'Storniert',
        ],
        'payment_status' => [
            'paid' => 'Bezahlt',
            'deferred' => 'Auf Rechnung',
            'paid_deferred' => 'Auf Rechnung bezahlt',
            'paiddeferred' => 'Auf Rechnung bezahlt',
            'charged_back' => 'Zahlung beglichen',
            'refunded' => 'Zahlung rückerstattet',
            'paidout' => 'Ausgezahlt',
            'failed' => 'Zahlung fehlerhaft',
            'pending' => 'Zahlung pendent',
            'expired' => 'Zahlung abgelaufen',
            'cancelled' => 'Zahlung abgebrochen',
            'open' => 'Zahlung ausstehend',
        ],
        'permissions' => [
            'manage_products' => 'Kann Produkte verwalten',
            'manage_categories' => 'Kann Kategorien verwalten',
            'manage_orders' => 'Kann Bestellungen verwalten',
            'manage_discounts' => 'Kann Rabatte verwalten',
            'settings' => [
                'manage_general' => 'Kann die Grundeinstellungen des Shops verändern',
                'manage_api' => 'Kann die API-Konfiguration des Shops verändern',
                'manage_currency' => 'Kann die Währungs-Einstellungen des Shops verändern',
            ],
        ],
    ],
    'components' => [
        'dependencies' => [
            'details' => [
                'name' => 'Snipcart-Abhängigkeiten',
                'description' => 'Von Snipcart benötigte JS-Dateien',
            ],
            'properties' => [
                'include_jquery' => [
                    'title' => 'jQuery einbinden',
                    'description' => 'Bindet jQuery von code.jquery.com ein',
                ],
            ],
        ],
        'categories' => [
            'details' => [
                'name' => 'Kategorien',
                'description' => 'Listet vorhandene Kategorien auf',
            ],
            'properties' => [
                'parent' => [
                    'title' => 'Startkategorie',
                    'description' => 'Zeige nur dieser Kategorie untergeordnete Kategorien an',
                ],
                'categorySlug' => [
                    'title' => 'Kategorie URL-Parameter',
                    'description' => 'Verwende diesen Parameter um die Startkategorie aus der URL zu übernehmen',
                ],
                'categoryPage' => [
                    'title' => 'Kategorie-Seite',
                    'description' => 'Die Links werden auf diese Seite verweisen. Wenn nichts ausgewählt wird, wird die Page aus den Backend Settings verwendet.',
                ],
            ],
            'no_parent' => 'Zeige alle Kategorien',
            'by_slug' => 'Verwende Kategorie aus URL als Startkategorie',
        ],
        'cartButton' => [
            'details' => [
                'name' => 'Checkout-Button',
                'description' => 'Button um Checkout via Snipcart zu starten',
            ],
            'properties' => [
                'buttonLabel' => [
                    'title' => 'Button-Aufschrift',
                    'description' => 'Was soll auf dem Button stehen?',
                ],
            ],
        ],
        'cartSummary' => [
            'details' => [
                'name' => 'Warenkorb',
                'description' => 'Zeigt die Anzahl Produkte und den Gesamtwert des Warenkorbes an',
            ],
            'properties' => [
                'showItemCount' => [
                    'title' => 'Zeige Produkte-Anzahl',
                    'description' => 'Zeigt an, wie viele Produkte sich im Warenkorb befinden',
                ],
                'showTotalPrice' => [
                    'title' => 'Zeige Gesamtwert',
                    'description' => 'Zeigt den Wert aller Artikel im Warenkorb an',
                ],
            ],
        ],
        'customerDashboard' => [
            'details' => [
                'name' => 'Kundenkonto',
                'description' => 'Zeigt den Link zum Öffnen des Kundenkontos an',
            ],
            'properties' => [
                'customerDashboardLabel' => [
                    'title' => 'Kundenkonto-Text',
                    'description' => 'Link-Text für den Kundenkonto-Link',
                ],
                'logoutLabel' => [
                    'title' => 'Logout-Text',
                    'description' => 'Link-Text für den Logout-Link',
                ],
            ],
        ],
        'currencyPicker' => [
            'details' => [
                'name' => 'Währungsauswahl',
                'description' => 'Zeigt eine Auswahl für die aktuelle Shopwährung an',
            ],
        ],
        'products' => [
            'details' => [
                'name' => 'Produkt-Liste',
                'description' => 'Zeigt eine Liste von Produkten an',
            ],
            'properties' => [
                'categoryFilter' => [
                    'title' => 'Kategorie-Filter',
                    'description' => 'Zeige nur Produkte aus dieser Kategorie an.',
                    'no_filter' => 'Alle Produkte anzeigen',
                    'by_slug' => 'Kategorie aus URL übernehmen',
                ],
                'categorySlug' => [
                    'title' => 'Kategorie URL-Parameter',
                    'description' => 'Verwende diesen Parameter um den Kategorie-Filter aus der URL zu übernehmen',
                ],
                'displayCustomFields' => [
                    'title' => 'Zeige Produkt-Optionen an',
                    'description' => 'Zeige Auswahlfelder für Optionen für ein Produkt an',
                ],
                'productsPerPage' => [
                    'title' => 'Anzahl Produkte pro Seite',
                ],
                'noProductsMessage' => [
                    'title' => '«Keine Produkte»-Meldung',
                    'description' => 'Dieser Test wird angezeigt, wenn keine Artikel angezeigt werden können.',
                ],
                'sortOrder' => [
                    'title' => 'Sortierung',
                    'description' => 'Nach welchem Attribut die Produkte sortiert werden.',
                ],
                'productPage' => [
                    'title' => 'Produkt-Seite',
                    'description' => 'Die Produkt-Links werden auf diese Seite verweisen.',
                ],
            ],
        ],
        'product' => [
            'details' => [
                'name' => 'Produkt-Details',
                'description' => 'Zeigt die Details zu einem Produkt an',
            ],
            'properties' => [
                'productSlug' => [
                    'title' => 'Produkt URL-Parameter',
                    'description' => 'Verwende diesen Parameter um das Produkt aus der URL zu übernehmen',
                ],
            ],
        ],
    ],
];