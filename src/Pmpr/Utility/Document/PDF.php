<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66cb4829e927d             |
    |_______________________________________|
*/
 namespace Pmpr\Utility\Document; use ArPHP\I18N\Arabic; use Dompdf\Dompdf; use Dompdf\Options; use WP_Error; class PDF extends Container { public function wyqcekcuyecikkiq(array $ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::waguuiqqgsysuukq => "\101\x34", self::gcqwukogwcmcuqqg => true, self::aisguagukaewucii => self::ogigqueukwysusii, self::ssmskyqgcmeiayco => '', self::aeoikmkskgikaqmk => '', self::eimosqqwcookwqow => "\x70\157\x72\x74\162\x61\x69\164"]); $ywmkwiwkosakssii[self::ssmskyqgcmeiayco] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->memaocoueygwyomc($ywmkwiwkosakssii[self::ssmskyqgcmeiayco]); ob_start(); ob_clean(); return $this->ikkcwmuwmgkwaiok($ywmkwiwkosakssii); } private function ikkcwmuwmgkwaiok(array $ywmkwiwkosakssii = []) { $ksaameoqigiaoigg = ''; if ($this->kgymgemcmiisemqe() && $this->kosqiimaygkuugss()) { goto qogqewiwmwiwskgm; } $ksaameoqigiaoigg = $this->oemauiimmycumcsk(__("\x74\157\x20\143\162\x65\x61\x74\145\40\x70\144\x66\40\151\143\157\x6e\x76\x20\46\x20\x6d\142\x73\164\162\x69\x6e\147\x20\x70\150\x70\40\x65\170\x74\145\156\163\x69\157\x6e\x73\x20\151\163\40\162\145\x71\x75\x69\x72\x65\x64\56", PR__CMN__FOUNDATION)); goto qgoiooayqmqqsiok; qogqewiwmwiwskgm: $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::ysyaseouocgeqcyq => "\x64\x65\152\141\x76\165\x20\163\x61\156\x73", "\150\x74\155\x6c\65\137\160\141\162\x73\145\162" => true]); $gyackcoaeiqqacmc = $this->oomocmisomecccym(); $iiguicmayewwgmsw = $ywmkwiwkosakssii[self::waguuiqqgsysuukq] ?? "\x41\64"; $kkaioqogwwyagyya = $ywmkwiwkosakssii[self::eimosqqwcookwqow] ?? "\160\x6f\162\164\x72\x61\x69\164"; $ggqcaymgsigcuuyk = new Options(["\x74\145\155\x70\x44\151\162" => $gyackcoaeiqqacmc, "\144\145\x66\141\165\x6c\164\x46\x6f\x6e\164" => $ywmkwiwkosakssii["\146\157\156\x74"], "\154\x6f\x67\x4f\x75\164\x70\165\164\106\151\x6c\x65" => $gyackcoaeiqqacmc . DIRECTORY_SEPARATOR . "\154\x6f\147\x2e\x68\x74\155", "\x69\x73\x52\x65\155\x6f\x74\x65\105\x6e\141\x62\x6c\145\144" => true, "\144\x65\146\141\165\154\x74\115\x65\144\151\141\x54\171\x70\145" => self::ALL, "\x64\x65\x66\141\x75\154\164\120\141\x70\145\162\x53\x69\x7a\x65" => $iiguicmayewwgmsw, "\x69\163\x48\x74\x6d\x6c\65\x50\141\x72\163\145\x72\105\156\141\142\x6c\145\144" => $ywmkwiwkosakssii["\x68\164\x6d\x6c\65\x5f\160\141\162\x73\x65\x72"], "\145\x6e\x61\x62\154\145\x5f\x66\x6f\x6e\x74\x5f\x73\x75\x62\163\145\164\164\151\156\x67" => true, "\151\x73\106\x6f\156\x74\123\165\142\x73\145\x74\x74\151\156\x67\105\156\x61\x62\x6c\145\x64" => true, "\x64\x65\146\x61\x75\154\x74\x50\141\x70\x65\x72\117\x72\x69\145\x6e\164\141\x74\x69\157\x6e" => $kkaioqogwwyagyya]); $msiuksaeogaaqskq = new Dompdf(); $ewgwqamkygiqaawc = $ywmkwiwkosakssii[self::ssmskyqgcmeiayco]; $msiuksaeogaaqskq->setOptions($ggqcaymgsigcuuyk); $msiuksaeogaaqskq->loadHtml($ewgwqamkygiqaawc); $msiuksaeogaaqskq->setPaper($iiguicmayewwgmsw, $kkaioqogwwyagyya); $msiuksaeogaaqskq->render(); $wkcwykowmmmwioqs = $this->mawoacksgosuccme($ywmkwiwkosakssii); if ($ywmkwiwkosakssii[self::gcqwukogwcmcuqqg]) { goto cecuyayqoioasumi; } $aqykuigiuwmmcieu = $msiuksaeogaaqskq->output(); $ksaameoqigiaoigg = $this->kcgumuuaqgyouoiu($wkcwykowmmmwioqs, $aqykuigiuwmmcieu, $gyackcoaeiqqacmc, $ywmkwiwkosakssii[self::aisguagukaewucii]); goto qiaqsassksqiuyae; cecuyayqoioasumi: $msiuksaeogaaqskq->stream($wkcwykowmmmwioqs); qiaqsassksqiuyae: qgoiooayqmqqsiok: return $ksaameoqigiaoigg; } private function kosqiimaygkuugss() { return extension_loaded("\155\x62\163\164\162\151\156\x67"); } private function kgymgemcmiisemqe() { return extension_loaded("\x69\x63\x6f\x6e\166"); } private function oomocmisomecccym() { $skuyigkowomeowiq = ini_get("\x75\160\x6c\x6f\x61\x64\137\164\x6d\160\x5f\x64\151\162") ?: sys_get_temp_dir(); $mkomwsiykqigmqca = $this->ocksiywmkyaqseou("\144\x6f\x63\165\x6d\145\156\x74\137\x67\x65\x6e\x65\162\x61\x74\x6f\162\x5f\x70\x64\x66\137\165\x70\154\x6f\141\144\x5f\160\141\x74\x68", $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->uwkmaywceaaaigwo()->iuekyyeesukysksy()->oemywwmmmiywiqai(), "\142\x61\163\145\144\x69\x72")); $miawkwqioaeasiig = $this->ocksiywmkyaqseou("\x64\x6f\x63\x75\x6d\x65\x6e\x74\x5f\x67\145\156\145\162\x61\164\157\x72\137\160\144\x66\137\165\x70\x6c\x6f\141\144\137\x64\151\x72", "\160\x64\x66\163"); $iiaumsgauuyeqksw = $this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk(); $mmicssmagyqiooei = untrailingslashit($mkomwsiykqigmqca) . "\x2f{$miawkwqioaeasiig}"; if ($iiaumsgauuyeqksw->exists($mmicssmagyqiooei)) { goto qwigomakwmyiwkgo; } $iiaumsgauuyeqksw->oquguuiseiwkawkw($mmicssmagyqiooei, $miawkwqioaeasiig); qwigomakwmyiwkgo: if (!$iiaumsgauuyeqksw->exists($mmicssmagyqiooei)) { goto asmecuqiyyswueqe; } $skuyigkowomeowiq = $mmicssmagyqiooei; $yuyowiyumyysomoy = strpos($mmicssmagyqiooei, "\72\134"); if (!$yuyowiyumyysomoy) { goto myoicgcuugciueis; } $skuyigkowomeowiq = str_replace("\57", "\x5c", $mmicssmagyqiooei); myoicgcuugciueis: asmecuqiyyswueqe: return $skuyigkowomeowiq; } private function kcgumuuaqgyouoiu($wkcwykowmmmwioqs, $ewgwqamkygiqaawc, $gyackcoaeiqqacmc = null, string $aqykuigiuwmmcieu = self::ogigqueukwysusii) { if ($gyackcoaeiqqacmc) { goto csscmcacoikwsecs; } $gyackcoaeiqqacmc = $this->oomocmisomecccym(); csscmcacoikwsecs: $ksaameoqigiaoigg = false; $esaqeawoigqgagum = untrailingslashit($gyackcoaeiqqacmc) . "\x2f{$wkcwykowmmmwioqs}"; if (!$this->caokeucsksukesyo()->iuekyyeesukysksy()->kcciqwskewsuaemk()->kwsmkgyoyaqecwuu($esaqeawoigqgagum, $ewgwqamkygiqaawc)) { goto kuicqywysciceggs; } $ksaameoqigiaoigg = $esaqeawoigqgagum; if (!($aqykuigiuwmmcieu === self::ogigqueukwysusii)) { goto cuykwgmswkskqkyi; } $miiyyswuessymmwe = $this->caokeucsksukesyo()->iuekyyeesukysksy(); $ksaameoqigiaoigg = str_replace($miiyyswuessymmwe->oemywwmmmiywiqai(self::okmiyqowuqogaiiy), $miiyyswuessymmwe->oemywwmmmiywiqai(self::auqoykcmsiauccao), $ksaameoqigiaoigg); cuykwgmswkskqkyi: kuicqywysciceggs: return $ksaameoqigiaoigg; } private function mawoacksgosuccme(array $ywmkwiwkosakssii = []) { $yyauwyaeewsickwk = $this->caokeucsksukesyo()->owgcciayoweymuws(); $wkcwykowmmmwioqs = $ywmkwiwkosakssii["\146\151\154\145\x6e\x61\155\x65"] ?? $yyauwyaeewsickwk->uniqid(); if ($this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($wkcwykowmmmwioqs, "\x2e\x70\144\x66")) { goto mkwskuycuyguqqok; } $wkcwykowmmmwioqs .= "\x2e\160\144\146"; mkwskuycuyguqqok: return $wkcwykowmmmwioqs; } }
