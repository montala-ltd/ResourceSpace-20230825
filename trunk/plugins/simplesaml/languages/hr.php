<?php


$lang["simplesaml_configuration"]='Konfiguracija SimpleSAML-a';
$lang["simplesaml_main_options"]='Mogućnosti korištenja.';
$lang["simplesaml_site_block"]='Koristite SAML za blokiranje pristupa web stranici u potpunosti, ako je postavljeno na "true" tada nitko ne može pristupiti web stranici, čak ni anonimno, bez autentifikacije.';
$lang["simplesaml_allow_public_shares"]='Ako se blokira web stranica, omogućiti javne dijelove da zaobiđu SAML autentifikaciju?';
$lang["simplesaml_allowedpaths"]='Popis dodatnih dopuštenih putanja koje mogu zaobići SAML zahtjev.';
$lang["simplesaml_allow_standard_login"]='Dozvolite korisnicima da se prijave s običnim računima kao i korištenjem SAML SSO-a? UPOZORENJE: Onemogućavanje ove opcije može dovesti do rizika zaključavanja svih korisnika iz sustava ako SAML autentifikacija ne uspije.';
$lang["simplesaml_use_sso"]='Koristite SSO za prijavu.';
$lang["simplesaml_idp_configuration"]='Konfiguracija IdP-a';
$lang["simplesaml_idp_configuration_description"]='Koristite sljedeće za konfiguriranje dodatka kako bi radio s vašim IdP-om.';
$lang["simplesaml_username_attribute"]='Atribut(i) za korištenje za korisničko ime. Ako se radi o spajanju dva atributa, odvojite ih zarezom.';
$lang["simplesaml_username_separator"]='Ako se spajaju polja za korisničko ime, koristite ovaj znak kao separator.';
$lang["simplesaml_fullname_attribute"]='Atribut(i) za upotrebu za puno ime. Ako je ovo spajanje dva atributa, molimo odvojite ih zarezom.';
$lang["simplesaml_fullname_separator"]='Ako se spajaju polja za puno ime, koristite ovaj znak kao separator.';
$lang["simplesaml_email_attribute"]='Atribut koji se koristi za e-mail adresu.';
$lang["simplesaml_group_attribute"]='Atribut koji se koristi za određivanje članstva u grupi.';
$lang["simplesaml_username_suffix"]='Pripona koja se dodaje stvorenim korisničkim imenima kako bi se razlikovala od standardnih ResourceSpace računa.';
$lang["simplesaml_update_group"]='Ažuriraj grupu korisnika pri svakom prijavljivanju. Ako se ne koristi atribut grupe SSO za određivanje pristupa, postavite ovo na "false" tako da korisnici mogu biti ručno premješteni između grupa.';
$lang["simplesaml_groupmapping"]='SAML - Mapiranje grupa ResourceSpace-a';
$lang["simplesaml_fallback_group"]='Zadana korisnička grupa koja će se koristiti za novo kreirane korisnike.';
$lang["simplesaml_samlgroup"]='SAML grupa.';
$lang["simplesaml_rsgroup"]='ResourceSpace grupa.';
$lang["simplesaml_priority"]='Prioritet (veći broj će imati prednost)';
$lang["simplesaml_addrow"]='Dodaj mapiranje.';
$lang["simplesaml_service_provider"]='Naziv lokalnog pružatelja usluga (SP)';
$lang["simplesaml_prefer_standard_login"]='Preferiraj standardnu prijavu (preusmjeri na stranicu za prijavu po zadanom).';
$lang["simplesaml_sp_configuration"]='Konfiguracija simplesaml SP-a mora biti dovršena kako bi se koristio ovaj dodatak. Molimo pogledajte članak u bazi znanja za više informacija.';
$lang["simplesaml_custom_attributes"]='Prilagođena svojstva za zapisivanje u korisnički zapis.';
$lang["simplesaml_custom_attribute_label"]='SSO atribut';
$lang["simplesaml_usercomment"]='Stvoreno pomoću SimpleSAML dodatka.';
$lang["origin_simplesaml"]='Jednostavni dodatak SimpleSAML.';
$lang["simplesaml_lib_path_label"]='Putanja SAML biblioteke (molimo navedite punu putanju poslužitelja)';
$lang["simplesaml_login"]='Koristite SAML vjerodajnice za prijavu u ResourceSpace? (Ovo je relevantno samo ako je gornja opcija omogućena)';
$lang["simplesaml_create_new_match_email"]='Podudaranje e-pošte: Prije stvaranja novih korisnika, provjerite odgovara li e-pošta SAML korisnika postojećoj RS korisničkoj e-pošti. Ako se pronađe podudaranje, SAML korisnik će \'usvojiti\' taj račun.';
$lang["simplesaml_allow_duplicate_email"]='Dozvoli stvaranje novih računa ako postoje postojeći ResourceSpace računi s istom e-mail adresom? (ovo se poništava ako je postavljeno podudaranje e-pošte iznad i pronađeno je jedno podudaranje)';
$lang["simplesaml_multiple_email_match_subject"]='ResourceSpace SAML - pokušaj prijave s konfliktnom e-poštom';
$lang["simplesaml_multiple_email_match_text"]='Novi SAML korisnik je pristupio sustavu, ali već postoji više od jednog računa s istom e-mail adresom.';
$lang["simplesaml_multiple_email_notify"]='Adresa e-pošte za obavještavanje ako se pronađe sukob e-pošte.';
$lang["simplesaml_duplicate_email_error"]='Postoji postojeći račun s istom e-mail adresom. Molimo kontaktirajte svog administratora.';
$lang["simplesaml_usermatchcomment"]='Ažurirano na SAML korisnika putem SimpleSAML dodatka.';
$lang["simplesaml_usercreated"]='Stvoren novi SAML korisnik.';
$lang["simplesaml_duplicate_email_behaviour"]='Upravljanje duplim računima.';
$lang["simplesaml_duplicate_email_behaviour_description"]='Ovaj odjeljak upravlja time što se događa ako se novi SAML korisnik koji se prijavljuje sukobljava s postojećim računom.';
$lang["simplesaml_authorisation_rules_header"]='Pravilo autorizacije.';
$lang["simplesaml_authorisation_rules_description"]='Omogućite konfiguriranje ResourceSpace-a s dodatnom lokalnom autorizacijom korisnika na temelju dodatnog atributa (npr. tvrdnje/zahtjeva) u odgovoru od IdP-a. Ova tvrdnja će biti korištena od strane dodatka kako bi se utvrdilo je li korisnik dopušten da se prijavi u ResourceSpace ili ne.';
$lang["simplesaml_authorisation_claim_name_label"]='Naziv atributa (tvrdnje/zahtjeva)';
$lang["simplesaml_authorisation_claim_value_label"]='Atribut (tvrdnja/vrijednost tvrdnje)';
$lang["simplesaml_authorisation_login_error"]='Nemate pristup ovoj aplikaciji! Molimo kontaktirajte administratora svog računa!';
$lang["simplesaml_authorisation_version_error"]='VAŽNO: Potrebno je ažurirati vašu SimpleSAML konfiguraciju. Molimo pogledajte odjeljak \'<a href=\'https://www.resourcespace.com/knowledge-base/plugins/simplesaml#saml_instructions_migrate\' target=\'_blank\'>Migracija SP-a za korištenje ResourceSpace konfiguracije</a>\' u bazi znanja za više informacija.';
$lang["simplesaml_healthcheck_error"]='Jednostavna greška u dodatku SimpleSAML.';
$lang["simplesaml_rsconfig"]='Koristite standardne konfiguracijske datoteke ResourceSpace-a za postavljanje konfiguracije SP-a i metapodataka? Ako je ovo postavljeno na "false", tada je potrebno ručno uređivanje datoteka.';
$lang["simplesaml_sp_generate_config"]='Generiraj konfiguraciju SP-a.';
$lang["simplesaml_sp_config"]='Konfiguracija pružatelja usluga (PU)';
$lang["simplesaml_sp_data"]='Informacije o pružatelju usluga (PU).';
$lang["simplesaml_idp_section"]='IdP (engl. Identity Provider) - davatelj identiteta';
$lang["simplesaml_idp_metadata_xml"]='Zalijepite IdP metapodatke u XML obliku.';
$lang["simplesaml_sp_cert_path"]='Putanja do datoteke SP certifikata (ostavite prazno za generiranje, ali popunite detalje certifikata u nastavku)';
$lang["simplesaml_sp_key_path"]='Putanja do SP ključne datoteke (.pem) (ostavite prazno za generiranje)';
$lang["simplesaml_sp_idp"]='Identifikator IdP-a (ostavite prazno ako obrađujete XML)';
$lang["simplesaml_saml_config_output"]='Zalijepite ovo u vaš ResourceSpace konfiguracijski datoteku.';
$lang["simplesaml_sp_cert_info"]='Informacije o certifikatu (obavezno)';
$lang["simplesaml_sp_cert_countryname"]='Kôd zemlje (samo 2 znaka)';
$lang["simplesaml_sp_cert_stateorprovincename"]='Naziv države, županije ili pokrajine';
$lang["simplesaml_sp_cert_localityname"]='Lokalitet (npr. grad)';
$lang["simplesaml_sp_cert_organizationname"]='Naziv organizacije.';
$lang["simplesaml_sp_cert_organizationalunitname"]='Organizacijska jedinica / odjel';
$lang["simplesaml_sp_cert_commonname"]='Opće ime (npr. sp.acme.org)';
$lang["simplesaml_sp_cert_emailaddress"]='Adresa e-pošte.';
$lang["simplesaml_sp_cert_invalid"]='Nevažeće informacije o certifikatu.';
$lang["simplesaml_sp_cert_gen_error"]='Nije moguće generirati certifikat.';
$lang["simplesaml_sp_samlphp_link"]='Posjetite SimpleSAMLphp testnu stranicu.';
$lang["simplesaml_sp_technicalcontact_name"]='Ime tehničkog kontakta.';
$lang["simplesaml_sp_technicalcontact_email"]='Tehnička e-mail adresa za kontakt.';
$lang["simplesaml_sp_auth.adminpassword"]='SP Test stranica administratorska lozinka.';
$lang["simplesaml_acs_url"]='ACS URL / Reply URL -> ACS URL / URL za odgovor';
$lang["simplesaml_entity_id"]='Identifikator entiteta / URL metapodataka';
$lang["simplesaml_single_logout_url"]='Jedinstveni URL za odjavu.';
$lang["simplesaml_start_url"]='Početna/URL za prijavu';
$lang["simplesaml_existing_config"]='Slijedite upute u bazi znanja kako biste migrirali svoju postojeću SAML konfiguraciju.';
$lang["simplesaml_test_site_url"]='URL testnog mjesta SimpleSAML-a';