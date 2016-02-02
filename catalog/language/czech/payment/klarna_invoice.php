<?php
// Text
$_['text_title']				= 'Účet Klarna - Platba z %s/měsíc';
$_['text_terms_fee']			= '<span id="klarna_invoice_toc"></span> (+%s)<script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\', charge: %s});</script>';
$_['text_terms_no_fee']			= '<span id="klarna_invoice_toc"></span><script type="text/javascript">var terms = new Klarna.Terms.Invoice({el: \'klarna_invoice_toc\', eid: \'%s\', country: \'%s\'});</script>';
$_['text_additional']			= 'Účet Klarna požaduje další informace, než bude možné provést transakci.';
$_['text_male']					= 'Muž';
$_['text_female']				= 'Žena';
$_['text_year']					= 'Rok';
$_['text_month']				= 'Měsíc';
$_['text_day']					= 'Den';
$_['text_payment_option']		= 'Možnosti platby';
$_['text_single_payment']		= 'Jednorázová platba';
$_['text_monthly_payment']		= '%s - %s za měsíc';
$_['text_comment']				= 'Klarna\'s fakturační ID: %s' . '\n' . '%s/%s: %.4f';

// Entry
$_['entry_gender']				= 'Pohlaví';
$_['entry_pno']					= 'Privátní číslo';
$_['entry_dob']					= 'Datum narození';
$_['entry_phone_no']			= 'Telefonní číslo';
$_['entry_street']				= 'Ulice';
$_['entry_house_no']			= 'Číslo domu';
$_['entry_house_ext']			= 'Popis domu';
$_['entry_company']				= 'IČO';

// Help
$_['help_pno']					= 'Zadejte vaše Social Security number';
$_['help_phone_no']				= 'Zadejte vaše telefonní číslo.';
$_['help_street']				= 'Zadejte vaše ulici';
$_['help_house_no']				= 'Zadejte vaše číslo domu';
$_['help_house_ext']			= 'Zadejte váš popis domu';
$_['help_company']				= 'Zadejte vaše IČO';

// Error
$_['error_deu_terms']			= 'Musíte souhlasit se zásady ochrany osobních údajů Klarna (Datenschutz)';
$_['error_address_match']		= 'Dodací a fakturační adresa musejí být shodné při použití Klarna Payments';
$_['error_network']				= 'Nastala chyba při spojení s Klarna. Zkuste to prosím znovu.';