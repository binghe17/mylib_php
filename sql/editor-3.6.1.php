<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.1
*/error_reporting(6135);$Gb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Gb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ue=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ue)$$X=$ue;}}if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo"\000\000\000\000\000\000\000(\000\000\000\000\000(\000\000\000\000\000\000 \000\000\000\000\000\000\000\000\000À\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000ÿÿÿ\000\000\000ÿ\000aN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\00031\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0003331!31\000!\000\000\000!\000\000\000\000!\"\000\000\000\000\000\000\000\000\000\000\000\000ÿÿÕ\000ÀÿÕ\000€\000\000€ğ\000€¤\000€€\000€\000\000€\000\000€\000\000€ÿ\000€ÿ\000À\000ÿ\000ş\000ÿ\000ÿ\000ÿÕ\000ÿÿÕ\000";}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1Ì‡“ÙŒŞl7œ‡B1„4vb0˜Ífs‘¼ên2BÌÑ±Ù˜Şn:‡#(¼b.\rDc)ÈÈa7E„‘¤Âl¦Ã±”èi1Ìs˜´ç-4™‡fÓ	ÈÎi7†³é†„ŒFÃ©–¨a'3IĞÊd«Â!S±æ¾:4ç§+Mdåg¯‹¬Çƒ¡îöt™°c‘†£õãé b{H(Æ“Ñ”t1É)tÚ}F¦p0™•8è\\82›DL>‚9`'C¡¼Û—889¤È xQØş\000îe4™ÍQÊ˜lÁ­P±¿V‰Åbñ‘—½T4²\\W/™æéÕ\n€` 7\"hÄq¹è4ZM6£TÖ\r­r\\–¶C{hÛ7\rÓx67Î©ºJÊ‡2.3å9ˆKë¢H¢,Œ!m”Æ†o\$ã¹.[\r&î#\$²<ÁˆfÍ)Z£\000=Ïr¨9ÃÜjÎªJ è0«c,|Î=‘Ãâù½êš¡Rs_6£„İ·­û‚áÉí€Z6£2B¾p\\-‡1s2ÉÒ>ƒ X:\rÜº–È3»bšÃ¼Í-8SLõÀí¼ÉK.ü´-ÜÒ¥\rH@mlá:¢ëµ;®úş¦îJ£0LRĞ2´!è¿«åAêˆÆ2¤	mMT7óŒçSÕ5]2ìÃîäE)ØÈ£¯­æ8\rƒò*`Ü¯.iú‚6Uõu*ÑİÓ´“NÖÇïeÆÕ×U&ÀM„ıDÍ\n á#ÆÏí%%·W`ú4£8÷j¨	½³X‡Ck|2Llğ©Î\rıù)ƒÀZ;·Ó tø¾CÃ7‰TñJCŒ?êÁNÎÄ<í¡nó: (T….+U9eˆó—®’[US56îeW’ïzHÅô¨¨è-ƒÈà2‡·àÂ3Œ¢íş–ÚØC‚`Í>…ËšÈ®¨PFê†óSÊËÁ¼Ş\rC&4`õ X1['¸£ãb	eY–tWiª›†ä:C¨Ú7c€Ş²0êŒ‰éJõ“Ó–õGR«ÿVÒ|ôurÁlª´¥-¼\rã»\n8f{»×=„é9Œgiyû¢Ì£4˜t8.ü/w™}êÊ2ø‹,æÃ{ZŠ®Š»Œå”c3¿é^ @1d´Õ‚#®'Å^„[°\r£(æ¡ê›(tŠ;ÃwµÌh÷\nôÈKw~/Í©¤g6Jâ?Ç©¢¯v2Xcˆ\r5û!0nˆs`%åš\nÁrßønqPV„h@ØP)¤ë§°áH¹-]Ÿ°Œ\ra¼7p­ê	0ÖYİ‹†RaS‘(€¯™óçk\r°÷âı‹!<VÏ©6 nf›\000f\"áÈªÅ\\ÖÊŠ|9nĞÄKbñ€Œ¹8X6O—âFSñ®1G\nÓZ{Éb¡ óªĞvÅ#-(7…ÄÒØxpr-È£¦¹¤|>1ú@H)	!œ)'äõ!f<Vˆ;ÙlÌ8¬ÒîU¤¬| á·”É*L¹÷cLu>ŸfBßŒ\"q®<²†“äÈ;•‰&®È·Òh Fi0ºpdkU!!*rÀƒ•-. uÎc©üj×\"H3Ì(Ø›3j¡“*ğs¬ªD°ÄÃÛ:A˜„ràİ_Ğ}d Î‡0XÒE)ß¬·œŠİØ;SÑÖƒ©mglü*\rÈ™Pˆ˜(£å{jp¢9öÃ9/°Ñó˜§œ^…¥l®¦¥ •95Óu ©óa4¾*'l–­*TC‘¼!N8¨`åDi\"g%ÍûBùôA•© h‡²g®´rİs†^¯ƒá1h‰0_Î9ÈSª;æ	f™²% ÍÚTd´EDÓGTçĞúRœ20äâŸ%y”á;7^~eã‘¬îRµ:r§[ªÁ­¤q ×&?4+€-²Æ]sÕ£ø{êË¤=³\$úË)Úc éÖ¦Æ„Ó“IŠôTi©h\$4çkb§Ruµƒ¦ÚzamNaÎ\"’¬éúa\$ ÙŒØŠÊbºÍ“ex†ĞŞhu(æÆF˜42áXb\re–ìİ²ŒNîõ)·S”Å'@SvJd)C¥„oâ‰s³Ó ø€ÇP*gW:^ËúĞW+Tú½—I—w¼]Ãr³“¹,0›\000r°¦g¤¶7Uzá¬8¾&UT\\2âœ6¤à\000rÅØp@7è‘­Fª÷7âğGT5R´UTøc£>£Oà1˜µ|ù¯‡Š{WúÀºİCÃx;¬^ĞÎ#ÛiRb:Ç¸r}Ö,fp%ÈuÊ×*‡HLµ'Ø`@~&Œ0Í²kT³*Ÿù¤=¸š³í„íÈ\nĞ¾ÜŠİVkÕ|Ê‘›5¦#.êì3µˆ:EÛ‡pî{ÉwÖ\rà¼ôXtè}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:›ŒgCI¼Ü\n:Ìæsa”Pi2\nOgc	Èe6L†óÔÚe7Æs)Ğ‹\rÈHG’I’ÆÆ3a„æs'cãÑDÊi6œNŒ£ÑèœÑ2Hãñ8œuF¤R…#³””êr7‡#©”v}€@ `QŒŞo5šaÔIœÜ,2O'8”R-q:PÍÆS¸(ˆa¼Š*wƒ(¸ç%¿àp’<F)Ünx8äzA\"³Z-CÛe¸V'ˆ§ƒ¦ªs¢äqÕû;NF“1ä­²9ëğG¼Í¦'0™\r¦›ÙÈ¿±9n`ÃÑ€œX1©İG3Ìàtee9Š®:NeíŠıN±ĞOSòzøc‘Œzl`5âãÈß	³3âñyßü8.Š\rãÎ¹PÜú\rƒ@£®Ø\\1\rã ó\000‚@2j8Ø—=.º¦° -rÈÃ¡¨¬0ŠèQ¨êŠºhÄb¼Œì`À»^9‹qÚE!£ ’7)#Àºª*ÊÀQÆÈ‹\000ŠØÒ1«Èæ\"‘hÊ>ƒØú°ĞĞÆÚ-C \"’äX®‡S`\\¼¤FÖ¬h8àŠ²â Â3§£`X:Oñš,ª‡«Úú)£8ŠÒ<BğNĞƒ;>9Á8Òó‡c¼<‡*¬æ2c¥9ÏéÊ>¢HÀz™OjªB'BªğúªŠº²Œ5‘,ò„Pìb5Ğ45€Ö3ìÿ@…:·N+išj›ÕJ¢ŸÚŠ\\ª	¨Æ‡á@¼>‹ Æ4Xr(Qr RÙ¡ dó…u=ÏtÍA8A{Œc\\Š§)³½|×C4\n6ØWí˜7(V4l6µ	–9\r¡vËaŞ&:CK˜!æ-¡£pÎ:\r\000V¢M Q†#õK@¼\000Ò.…Ù€ËVy·›¦wEû\"Õãfƒ|jŞbgÙ¼F>Ä‹	BHn–İºZ¢ÔB²BÆ\$ÉF0•ÏÃ=ªñkC-9ã¸şC´ä‰O”9^Z3\rÇr…7àÖ0ê¨uÙwù•M¸gùÅ° Õv2¶ÔqI°¼ó²ìöpåµÀ¸äh5cãPyÇ…Ù.æ[°÷¥hV'-YÀÌÓT°èÓ…İ›’:vĞşŸ¨O&&6Š¨Z—áÈÎ»	rnû¶•¥¾Bc£oÚ Í0úMƒã£¤²xz]ÔŒ™ÕêÇ!€védz/sƒâÛCŒí‘¦=õd9K¹eVXÙs:pÌÑˆ8–rÃA0&i®)Ö¤R\$úY_Vé4¬¾…z÷È;ia°4° ÊlIçƒ‹ôîqØwlM(§”Àäáb)O&æÃxl&¡ÀÃ“ØF`ù—U’¦‚×Ã™íyÆ]N©ğPAx^+`†˜L”ªÕgŒº(‚†Ò|8Á,‡Äè¡è)Š‘Y-*h°ªXkwTáĞ<¡ BQ[òœ=«…tWãÈon´È@cİdÒBƒ×®È}UÊÁ>+5jWä›FwNÕ&Ù6ï\$ë o1~ª×©Ã\\	'Ò Á=4@¥DªhÄR,DFëÅ+çIiÊğK\$r²#È‡»\000À!&Oš>ÁB¾Ë¦)†(á˜:°Ê`LO—¯ˆ2&	·Sk:(“.8‘4hú	äß_\000şu44ÚúÑ[+§EûèÈ\rBÉ\$-•f,ç\000CO;`‰oÍ²G>x£YS‡I¿@ÎAí_Á‘9ÖÚşå	Ÿí“?ÖêÿØìöK ö3d–Ë¨Ô's£LÆ]CY3-¤FbpØ-.UDt¢™”FŠ˜(Õ>¢P:dŠ`Èb;¡®@:Úg’¶jJHP÷PÑÊ¼x\r’Phl%à°4V\000ØòNÊˆO5ùG KˆSš¢ÖZÂQ	Iveìˆ³Ö>ƒ¢´)0Ô7PhL( ˜7 æÙ ª†¿XK\rb,Uv\rI¨¢b•¨P\rææÌs¤-SÎÜ‡I“èUC±¡Ì)¥x9LCİ¨pF	«’°-Ô³À)=’IÂƒAUÀ²â†Y!ã!†Ää'‹š\n`M×w\$2†`VO.lw%0\\ÓSu“øe§@§©ÃàÏ‘×p3Ûé¦%!Ô'œ…™1V0aUò!¹9DŞBğap0ª†Í6\r\rá˜3pè.ètxK\na`®D@>Á¶Á\\'…I.Œ¢ShèCP!ÈÇÀ;”[bn\\\r’³ªşı„ô²±lª¥8À7ã,hQC\nY\röJü£XdC d\nA¼;‚‡fF+îWwĞ4LPïÉ»HAµ!ô;—‰&VÌ²yƒ¢65šåzçÍ=õ£CírÒmÄŠÕi`Ë‰bñ\\gyÔ‹\$#QèmtĞsÇ\\àrsÄYû²\000y¡¨ã§£äKC@iÅ§Z[‹yp°ÂCĞ]l.@V¼8\$ÀÅNjp›:IcáöÏ}•4K• ^ƒú4§)æ¾Ó8²\000S4€Äâ¤¡ohR£¨Ã\nßo:›Tj­Y«µ†²Ö•ËgmFp—JéE4Oj¸µ«ºfpÏvy˜PÂ†PÛ½%Ùİï\\3òGƒpM\röÎÖ¨-ÜÃg6…Oa¹ˆ´jÙ°§ÆŒs6?/i&´«!âœ3e·GU7øm\rÎ6¢şI–‘@‹Zs“ÀnNÁ?!\rÊN£-7—Ãã³™5!BÂ*¹Ù‡õ¥¯.óÉa.ùçÓÏÃBœ•|¨¡o¤Hvá»íè½‰£MÿXÜZ‹énÄÜhï¤Ó±®³I°8/HQVö'rí%·M±g\$\$V—Gv“ûè”I™Rƒ(a©B”NÏÇH—‚ïé7%åPß’w~S.g9Z{´ßïO¼‡??“P¢šÁæ†â{!ÁbXJ¤ÇW'€âhrqDÇ@Ã¦š\$9ÏW6fŠş0à¤”@bıäBù_0¡ƒĞb.À&™XMY¯~ÜB#êã‚nåc1£&1S>éÉ}Ñ%ÁÜ­ÕûoäÕJ¼­eŞÈ„†â\$ş\"Dx`¶ÿ‚qIXDb0²\000}æ(0ÀêC†TÄFË~‘é#‚²ª+„WïRùiˆº!ì;	£\000¢‰”­¬õè„øŒšğNHi¦ûÀòû0„4(ƒÇğ\"èŠ¯Ü…HpğFşiËg†À¢J( ¾j¬¼\rc@ÂÀ¨\r\">àeLÌ/ÿ°“\000\rà Xûğ«‚H Ò †Lõo[ˆB¨°Ô\$O¦V¢ˆ€a ]\rïš f²øb·é°ûI¢û¯Êü&¾ü`ÂõojˆHÀL‰¢÷Ï€Ğƒ¦¶ÊŸ\r°êšï© `)‚öN«jjª`êƒëd¶‘(dÊF…]mê>‰*°%jH1NêNo0›(¢ŠoßhæØ RLh±eL¥Yè¤Lä¨Şì³\"|“¬JH@)+D´ƒu‘^Ä SÏˆ©Ek‹B´pË0G¦xbC*ôĞ&‚€AÅlš{q°ĞÊ\\˜¥š8ƒCÍi\nbÚ*p1'°VÒLvxPÄÌì¾JdXÊ‚HP\r¤‚…­¬[`Ê[­²\\\000¼¿-`éƒÏ²(FîşEÄ„‹fğ¥\$\n- š ğÃÒ§Êò»£ˆ¨’`6`Ï&rj€Ğ¤ŠfÀÛ&’ltàú¥\"ª\r¬Š ‚J£föC(àğtÆPS‹&®1%ò‹&2)„Ã˜¦Iï(ÒÅ&ò{&RÓ)R,€Â\rRh®àÄX\r€ÄÛ Ö.\000%Œ* â+¥J'ˆNI\r€«àè00†åS	“1€Ë1Æf t\n… \\#\\6 °	àÄ\rDo2øS@ “E4“L cÄ	¨:>ÀæÂbE2k\n€ <àuEXÀó0Dì™³0\$@ŞCO\\ğ2ú)€ 	à¦\n†\000à‹:\000R’ê®Fğ/ı8“„0ÂK1³„	)-\$èp\$#. ¨¦ÔY­î[¨:¾.F\000Z?Àî§†²ê\$Ì) É+Sƒs¼“ÁsÄ8#d<@°´\nT¤Š¬?+%›7«2ÓŠS”T©^;¤,T£ÎL¾‘ĞÄ7f]C\"EC€ó ƒ(.òòaTLiä™8³¼I”P‘Ş·Â³DĞ6`’ã&ˆXŠ¾¬2èø¢%!4~ŠPLÃF*‹DÌ\\0fXÓ´ÀdX<CÄt 4ëPá€Ê\nÔ3àRì„hùN0 ó´ÓŠ¼¬ÀPùRøP€¶ùQŒ³úWä„†ª¸ç\\‹2åıHå	îı\$êO€Ãff‰<òi;Ç™´t—di,ˆEŠ M£ˆ²ëi/ÔªÔL\000^F€u(aŠÏJ‚ypZ;¢òø¼ıB˜Œõ`\rÜ’Î Ï”õ´Dƒ¨±	8iŠ³:Ø	Š™ñlÀìú dïÁĞ\\õpèqíû€ÙéÑÿõ0°£d°ëµJEˆ%Kt÷¾Læ	ì:\$±\$İ­Qo7Q¯ºLTdë<âò\$5í[£‹LêdŠÈL`„ìW(rfeÑIUî‘ƒ.ÅFP½`h€dû>öÀèÏ/ì¨5\000bÎ¤½#Ò@ÛUBä`Î°¶:·•lK%·c zÎæ3)fñ^t€ê\000`#›_®¸rÇ0(J 2°\rfòÂ›XÏ;H„HC_/ìæè„%iËä:¯/ ¤óÒÎr)à¨\rëD8ˆÜÀ–\$ ±O¦¿l è)èPìæVck€È³à¾kl¾Vº66¾ø\000pâa]Vó@`ŠIÂ\$#Åp Éo¤9×\$‚§\\÷¶ôŒî:+õïS5¾³\rá^óŞß):!êge°¯ôoÎ(€eHñáI P½óä¾k”3àLRsøV ª\n@’‡\000ÛK£.‹Õ0\"#>(¶QDtD³/;´<W\"èÙ²ÏfÔ¶T”º0öÿ`RÎœW2¢† §r‹fÕázÖ]{ƒ|†…£_ER\000YG|“¼†C_qWÔc&]UH‘|Ïi7'jV›~ÄjÃk2'oIo`ËqCÄÎUÔJG6€Z¥5àã V·X0¤„óòŞ ä„	€Ş8.* P Xƒ#„86ëpk0Ê!£8²×7Sc¤¾˜V¾ìs@å\\>‚¡Ì¾‚\$Á²›)ò¢JÒ¨<KéC[.T”¾—‹W”~Œ\$¯€­æĞŸæÔL˜i†Ë¿z+ ×¨ıQ%fF?‹W§KïÕdMHo%Ä\\üt`äöOe6ee“c y„PË‡±\\VQ`°x~6-õƒğª öÁ¸`¾˜Í\$&òÕ VŠ˜–³ËÑr WX\"½ WcäÆxg[Øks‚‚‚FÉ©‹ “W±éi²\n\nì¸³äU¯{•9VOóäóğªÏ†ËÅ¾\r€…çª\r(0P;ƒC‚cƒqiäÄçˆZÌŒ±\"LÒxb%‚àµk6Tõ\r¶PÍjÑ°GZ0RââÁ1—‘š‹Ušš0\rĞéYõ©õ¦0éYÚÀ•´šæxÏ/*İ&%QG;LŞË_Ñˆùò(b“? Ëw7v\r÷zÏ×&YÛHÀT­`<â§Ÿ:‘>¶ú\r`ƒ\në& ò(«@/cA!1å˜‡š„4ÒRë›,°Yñ,ïŸà\"Zo'ÉÎ¿ŸF¶:£ê ú ¿I‘I`Wvâ“¡—yw×§DŞgy†`ğ¬*Ë1hå«`Ù« áJ7˜:z-¢‰ªÄ½§Œá£ºŒdØY“uÃ¬Å#Ø·K×«£Õ­úBÅúF†ÒA¤ö’:L¯Q=nï^nôÀàÂ,ğuJº’wvz„¶K¯š‘¡7qwZ§¢M‹•ú+¢ú37ìåâ†8BmTè‚@");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\000\000¡\000\000îîî\000\000\000™™™\000\000\000,\000\000\000\000\000\000\000!„©ËíMñÌ*)¾oú¯) q•¡eˆµî#ÄòLË\000;";break;case"cross.gif":echo"GIF87a\000\000¡\000\000îîî\000\000\000™™™\000\000\000,\000\000\000\000\000\000\000#„©Ëí#\naÖFo~yÃ._wa”á1ç±JîGÂL×6]\000\000;";break;case"up.gif":echo"GIF87a\000\000¡\000\000îîî\000\000\000™™™\000\000\000,\000\000\000\000\000\000\000 „©ËíMQN\nï}ôa8ŠyšaÅ¶®\000Çò\000;";break;case"down.gif":echo"GIF87a\000\000¡\000\000îîî\000\000\000™™™\000\000\000,\000\000\000\000\000\000\000 „©ËíMñÌ*)¾[Wş\\¢ÇL&ÙœÆ¶•\000Çò\000;";break;case"arrow.gif":echo"GIF89a\000\n\000€\000\000€€€ÿÿÿ!ù\000\000\000,\000\000\000\000\000\n\000\000‚i–±‹”ªÓ²Ş»\000\000;";break;}}exit;}function
connection(){global$j;return$j;}function
adminer(){global$c;return$c;}function
idf_unescape($v){$uc=substr($v,-1);return
str_replace($uc.$uc,$uc,substr($v,1,-1));}function
escape_string($X){return
substr(q($X),1,-1);}function
remove_slashes($od,$Gb=false){if(get_magic_quotes_gpc()){while(list($y,$X)=each($od)){foreach($X
as$oc=>$W){unset($od[$y][$oc]);if(is_array($W)){$od[$y][stripslashes($oc)]=$W;$od[]=&$od[$y][stripslashes($oc)];}else$od[$y][stripslashes($oc)]=($Gb?$W:stripslashes($W));}}}}function
bracket_escape($v,$va=false){static$ie=array(':'=>':1',']'=>':2','['=>':3');return
strtr($v,($va?array_flip($ie):$ie));}function
h($Q){return
htmlspecialchars(str_replace("\0","",$Q),ENT_QUOTES);}function
nbsp($Q){return(trim($Q)!=""?h($Q):"&nbsp;");}function
nl_br($Q){return
str_replace("\n","<br>",$Q);}function
checkbox($C,$Y,$Fa,$sc="",$Sc="",$mc=false){static$u=0;$u++;$K="<input type='checkbox' name='$C' value='".h($Y)."'".($Fa?" checked":"").($Sc?' onclick="'.h($Sc).'"':'').($mc?" class='jsonly'":"")." id='checkbox-$u'>";return($sc!=""?"<label for='checkbox-$u'>$K".h($sc)."</label>":$K);}function
optionlist($Xc,$Fd=null,$_e=false){$K="";foreach($Xc
as$oc=>$W){$Yc=array($oc=>$W);if(is_array($W)){$K.='<optgroup label="'.h($oc).'">';$Yc=$W;}foreach($Yc
as$y=>$X)$K.='<option'.($_e||is_string($y)?' value="'.h($y).'"':'').(($_e||is_string($y)?(string)$y:$X)===$Fd?' selected':'').'>'.h($X);if(is_array($W))$K.='</optgroup>';}return$K;}function
html_select($C,$Xc,$Y="",$Rc=true){if($Rc)return"<select name='".h($C)."'".(is_string($Rc)?' onchange="'.h($Rc).'"':"").">".optionlist($Xc,$Y)."</select>";$K="";foreach($Xc
as$y=>$X)$K.="<label><input type='radio' name='".h($C)."' value='".h($y)."'".($y==$Y?" checked":"").">".h($X)."</label>";return$K;}function
confirm($Qa=""){return" onclick=\"return confirm('".lang(0).($Qa?" (' + $Qa + ')":"")."');\"";}function
print_fieldset($u,$wc,$Ee=false,$Sc=""){echo"<fieldset><legend><a href='#fieldset-$u' onclick=\"".h($Sc)."return !toggle('fieldset-$u');\">$wc</a></legend><div id='fieldset-$u'".($Ee?"":" class='hidden'").">\n";}function
bold($Ba){return($Ba?" class='active'":"");}function
odd($K=' class="odd"'){static$t=0;if(!$K)$t=-1;return($t++%2?$K:'');}function
js_escape($Q){return
addcslashes($Q,"\r\n'\\/");}function
json_row($y,$X=null){static$Hb=true;if($Hb)echo"{";if($y!=""){echo($Hb?"":",")."\n\t\"".addcslashes($y,"\r\n\"\\").'": '.($X!==null?'"'.addcslashes($X,"\r\n\"\\").'"':'undefined');$Hb=false;}else{echo"\n}\n";$Hb=true;}}function
ini_bool($ic){$X=ini_get($ic);return(eregi('^(on|true|yes)$',$X)||(int)$X);}function
sid(){static$K;if($K===null)$K=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));return$K;}function
q($Q){global$j;return$j->quote($Q);}function
get_vals($I,$g=0){global$j;$K=array();$J=$j->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[]=$L[$g];}return$K;}function
get_key_vals($I,$k=null){global$j;if(!is_object($k))$k=$j;$K=array();$J=$k->query($I);if(is_object($J)){while($L=$J->fetch_row())$K[$L[0]]=$L[1];}return$K;}function
get_rows($I,$k=null,$o="<p class='error'>"){global$j;$Pa=(is_object($k)?$k:$j);$K=array();$J=$Pa->query($I);if(is_object($J)){while($L=$J->fetch_assoc())$K[]=$L;}elseif(!$J&&!is_object($k)&&$o&&defined("PAGE_HEADER"))echo$o.error()."\n";return$K;}function
unique_array($L,$x){foreach($x
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$K=array();foreach($w["columns"]as$y){if(!isset($L[$y]))continue
2;$K[$y]=$L[$y];}return$K;}}$K=array();foreach($L
as$y=>$X){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$y))$K[$y]=$X;}return$K;}function
where($Z){global$nc;$K=array();foreach((array)$Z["where"]as$y=>$X)$K[]=idf_escape(bracket_escape($y,1)).(($nc=="sql"&&ereg('\\.',$X))||$nc=="mssql"?" LIKE ".exact_value(addcslashes($X,"%_\\")):" = ".exact_value($X));foreach((array)$Z["null"]as$y)$K[]=idf_escape($y)." IS NULL";return
implode(" AND ",$K);}function
where_check($X){parse_str($X,$Ea);remove_slashes(array(&$Ea));return
where($Ea);}function
where_link($t,$g,$Y,$Uc="="){return"&where%5B$t%5D%5Bcol%5D=".urlencode($g)."&where%5B$t%5D%5Bop%5D=".urlencode(($Y!==null?$Uc:"IS NULL"))."&where%5B$t%5D%5Bval%5D=".urlencode($Y);}function
cookie($C,$Y){global$aa;$fd=array($C,(ereg("\n",$Y)?"":$Y),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$fd[]=true;return
call_user_func_array('setcookie',$fd);}function
restart_session(){if(!ini_bool("session.use_cookies"))session_start();}function
stop_session(){if(!ini_bool("session.use_cookies"))session_write_close();}function&get_session($y){return$_SESSION[$y][DRIVER][SERVER][$_GET["username"]];}function
set_session($y,$X){$_SESSION[$y][DRIVER][SERVER][$_GET["username"]]=$X;}function
auth_url($db,$O,$V,$n=null){global$eb;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($eb))."|username|".($n!==null?"db|":"").session_name()),$A);return"$A[1]?".(sid()?SID."&":"").($db!="server"||$O!=""?urlencode($db)."=".urlencode($O)."&":"")."username=".urlencode($V).($n!=""?"&db=".urlencode($n):"").($A[2]?"&$A[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($zc,$Hc=null){if($Hc!==null){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',($zc!==null?$zc:$_SERVER["REQUEST_URI"]))][]=$Hc;}if($zc!==null){if($zc=="")$zc=".";header("Location: $zc");exit;}}function
query_redirect($I,$zc,$Hc,$td=true,$yb=true,$Bb=false){global$j,$o,$c;if($yb)$Bb=!$j->query($I);$Ld="";if($I)$Ld=$c->messageQuery("$I;");if($Bb){$o=error().$Ld;return
false;}if($td)redirect($zc,$Hc.$Ld);return
true;}function
queries($I=null){global$j;static$rd=array();if($I===null)return
implode(";\n",$rd);$rd[]=(ereg(';$',$I)?"DELIMITER ;;\n$I;\nDELIMITER ":$I);return$j->query($I);}function
apply_queries($I,$T,$ub='table'){foreach($T
as$R){if(!queries("$I ".$ub($R)))return
false;}return
true;}function
queries_redirect($zc,$Hc,$td){return
query_redirect(queries(),$zc,$Hc,$td,false,!$td);}function
remove_from_uri($ed=""){return
substr(preg_replace("~(?<=[?&])($ed".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($F,$Ua){return" ".($F==$Ua?$F+1:'<a href="'.h(remove_from_uri("page").($F?"&page=$F":"")).'">'.($F+1)."</a>");}function
get_file($y,$Va=false){$Db=$_FILES[$y];if(!$Db||$Db["error"])return$Db["error"];$K=file_get_contents($Va&&ereg('\\.gz$',$Db["name"])?"compress.zlib://$Db[tmp_name]":($Va&&ereg('\\.bz2$',$Db["name"])?"compress.bzip2://$Db[tmp_name]":$Db["tmp_name"]));if($Va){$Md=substr($K,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Md,$ud))$K=iconv("utf-16","utf-8",$K);elseif($Md=="\xEF\xBB\xBF")$K=substr($K,3);}return$K;}function
upload_error($o){$Fc=($o==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($o?lang(1).($Fc?" ".lang(2,$Fc):""):lang(3));}function
repeat_pattern($H,$xc){return
str_repeat("$H{0,65535}",$xc/65535)."$H{0,".($xc%65535)."}";}function
is_utf8($X){return(preg_match('~~u',$X)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$X));}function
shorten_utf8($Q,$xc=80,$Sd=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$xc).")($)?)u",$Q,$A))preg_match("(^(".repeat_pattern("[\t\r\n -~]",$xc).")($)?)",$Q,$A);return
h($A[1]).$Sd.(isset($A[2])?"":"<i>...</i>");}function
friendly_url($X){return
preg_replace('~[^a-z0-9_]~i','-',$X);}function
hidden_fields($od,$ec=array()){while(list($y,$X)=each($od)){if(is_array($X)){foreach($X
as$oc=>$W)$od[$y."[$oc]"]=$W;}elseif(!in_array($y,$ec))echo'<input type="hidden" name="'.h($y).'" value="'.h($X).'">';}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($R){global$c;$K=array();foreach($c->foreignKeys($R)as$r){foreach($r["source"]as$X)$K[$X][]=$r;}return$K;}function
enum_input($U,$sa,$p,$Y,$ob=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Cc);$K=($ob!==null?"<label><input type='$U'$sa value='$ob'".((is_array($Y)?in_array($ob,$Y):$Y===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($Cc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?$Y==$t+1:(is_array($Y)?in_array($t+1,$Y):$Y===$X));$K.=" <label><input type='$U'$sa value='".($t+1)."'".($Fa?' checked':'').'>'.h($c->editVal($X,$p)).'</label>';}return$K;}function
input($p,$Y,$s){global$pe,$c,$nc;$C=h(bracket_escape($p["field"]));echo"<td class='function'>";$xd=($nc=="mssql"&&$p["auto_increment"]);if($xd&&!$_POST["save"])$s=null;$Sb=(isset($_GET["select"])||$xd?array("orig"=>lang(5)):array())+$c->editFunctions($p);$sa=" name='fields[$C]'";if($p["type"]=="enum")echo
nbsp($Sb[""])."<td>".$c->editInput($_GET["edit"],$p,$sa,$Y);else{$Hb=0;foreach($Sb
as$y=>$X){if($y===""||!$X)break;$Hb++;}$Rc=($Hb?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($p["field"])))."]']; if ($Hb > f.selectedIndex) f.selectedIndex = $Hb;\"":"");$sa.=$Rc;echo(count($Sb)>1?html_select("function[$C]",$Sb,$s===null||in_array($s,$Sb)||isset($Sb[$s])?$s:"","functionChange(this);"):nbsp(reset($Sb))).'<td>';$kc=$c->editInput($_GET["edit"],$p,$sa,$Y);if($kc!="")echo$kc;elseif($p["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$p["length"],$Cc);foreach($Cc[1]as$t=>$X){$X=stripcslashes(str_replace("''","'",$X));$Fa=(is_int($Y)?($Y>>$t)&1:in_array($X,explode(",",$Y),true));echo" <label><input type='checkbox' name='fields[$C][$t]' value='".(1<<$t)."'".($Fa?' checked':'')."$Rc>".h($c->editVal($X,$p)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads"))echo"<input type='file' name='fields-$C'$Rc>";elseif(($Zd=ereg('text|lob',$p["type"]))||ereg("\n",$Y)){if($Zd&&$nc!="sqlite")$sa.=" cols='50' rows='12'";else{$M=min(12,substr_count($Y,"\n")+1);$sa.=" cols='30' rows='$M'".($M==1?" style='height: 1.2em;'":"");}echo"<textarea$sa>".h($Y).'</textarea>';}else{$Gc=(!ereg('int',$p["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$p["length"],$A)?((ereg("binary",$p["type"])?2:1)*$A[1]+($A[3]?1:0)+($A[2]&&!$p["unsigned"]?1:0)):($pe[$p["type"]]?$pe[$p["type"]]+($p["unsigned"]?0:1):0));echo"<input value='".h($Y)."'".($Gc?" maxlength='$Gc'":"").(ereg('char|binary',$p["type"])&&$Gc>20?" size='40'":"")."$sa>";}}}function
process_input($p){global$c;$v=bracket_escape($p["field"]);$s=$_POST["function"][$v];$Y=$_POST["fields"][$v];if($p["type"]=="enum"){if($Y==-1)return
false;if($Y=="")return"NULL";return+$Y;}if($p["auto_increment"]&&$Y=="")return
null;if($s=="orig")return($p["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($p["field"]):false);if($s=="NULL")return"NULL";if($p["type"]=="set")return
array_sum((array)$Y);if(ereg('blob|bytea|raw|file',$p["type"])&&ini_bool("file_uploads")){$Db=get_file("fields-$v");if(!is_string($Db))return
false;return
q($Db);}return$c->processInput($p,$Y,$s);}function
search_tables(){global$c,$j;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Ob=false;foreach(table_status()as$R=>$S){$C=$c->tableName($S);if(isset($S["Engine"])&&$C!=""&&(!$_POST["tables"]||in_array($R,$_POST["tables"]))){$J=$j->query("SELECT".limit("1 FROM ".table($R)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($R),array())),1));if(!$J||$J->fetch_row()){if(!$Ob){echo"<ul>\n";$Ob=true;}echo"<li>".($J?"<a href='".h(ME."select=".urlencode($R)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$C</a>\n":"$C: <span class='error'>".error()."</span>\n");}}}echo($Ob?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($cc,$Lc=false){global$c;$K=$c->dumpHeaders($cc,$Lc);$cd=$_POST["output"];if($cd!="text")header("Content-Disposition: attachment; filename=".$c->dumpFilename($cc).".$K".($cd!="file"&&!ereg('[^0-9a-z]',$cd)?".$cd":""));session_write_close();return$K;}function
dump_csv($L){foreach($L
as$y=>$X){if(preg_match("~[\"\n,;\t]~",$X)||$X==="")$L[$y]='"'.str_replace('"','""',$X).'"';}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$L)."\r\n";}function
apply_sql_function($s,$g){return($s?($s=="unixepoch"?"DATETIME($g, '$s')":($s=="count distinct"?"COUNT(DISTINCT ":strtoupper("$s("))."$g)"):$g);}function
password_file(){$bb=ini_get("upload_tmp_dir");if(!$bb){if(function_exists('sys_get_temp_dir'))$bb=sys_get_temp_dir();else{$Eb=@tempnam("","");if(!$Eb)return
false;$bb=dirname($Eb);unlink($Eb);}}$Eb="$bb/adminer.key";$K=@file_get_contents($Eb);if($K)return$K;$Qb=@fopen($Eb,"w");if($Qb){$K=md5(uniqid(mt_rand(),true));fwrite($Qb,$K);fclose($Qb);}return$K;}function
is_mail($lb){$qa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$H="$qa+(\\.$qa+)*@($cb?\\.)+$cb";return
preg_match("(^$H(,\\s*$H)*\$)i",$lb);}function
is_url($Q){$cb='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($cb?\\.)+$cb(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$Q,$A)?strtolower($A[1]):"");}function
slow_query($I){global$c,$he;$n=$c->database();if(support("kill")&&is_object($k=connect())&&($n==""||$k->select_db($n))){$rc=$k->result("SELECT CONNECTION_ID()");echo'<script type="text/javascript">
var timeout = setTimeout(function () {
	ajax(\'',js_escape(ME),'script=kill\', function () {
	}, \'token=',$he,'&kill=',$rc,'\');
}, ',1000*$c->queryTimeout(),');
</script>
';}else$k=null;ob_flush();flush();$K=@get_key_vals($I,$k);if($k){echo"<script type='text/javascript'>clearTimeout(timeout);</script>\n";ob_flush();flush();}return
array_keys($K);}function
lzw_decompress($_a){$ab=256;$Aa=8;$Ia=array();$yd=0;$zd=0;for($t=0;$t<strlen($_a);$t++){$yd=($yd<<8)+ord($_a[$t]);$zd+=8;if($zd>=$Aa){$zd-=$Aa;$Ia[]=$yd>>$zd;$yd&=(1<<$zd)-1;$ab++;if($ab>>$Aa)$Aa++;}}$Za=range("\0","\xFF");$K="";foreach($Ia
as$t=>$Ha){$kb=$Za[$Ha];if(!isset($kb))$kb=$Ie.$Ie[0];$K.=$kb;if($t)$Za[]=$Ie.$kb[0];$Ie=$kb;}return$K;}global$c,$j,$eb,$ib,$qb,$o,$Sb,$Vb,$aa,$jc,$nc,$a,$tc,$Qc,$hd,$Pd,$he,$ke,$pe,$we,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$fd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$fd[]=true;call_user_func_array('session_set_cookie_params',$fd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Gb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$tc=array('en'=>'English','cs'=>'ÄŒeÅ¡tina','sk'=>'SlovenÄina','nl'=>'Nederlands','es'=>'EspaÃ±ol','de'=>'Deutsch','fr'=>'FranÃ§ais','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'CatalÃ ','pt'=>'PortuguÃªs','sl'=>'Slovenski','lt'=>'LietuviÅ³','tr'=>'TÃ¼rkÃ§e','ro'=>'Limba RomÃ¢nÄƒ','id'=>'Bahasa Indonesia','ru'=>'Ğ ÑƒÑÑĞºĞ¸Ğ¹ ÑĞ·Ñ‹Ğº','uk'=>'Ğ£ĞºÑ€Ğ°Ñ—Ğ½ÑÑŒĞºĞ°','sr'=>'Ğ¡Ñ€Ğ¿ÑĞºĞ¸','zh'=>'ç®€ä½“ä¸­æ–‡','zh-tw'=>'ç¹é«”ä¸­æ–‡','ja'=>'æ—¥æœ¬èª','ta'=>'à®¤â€Œà®®à®¿à®´à¯','bn'=>'à¦¬à¦¾à¦‚à¦²à¦¾','ar'=>'Ø§Ù„Ø¹Ø±Ø¨ÙŠØ©','fa'=>'ÙØ§Ø±Ø³ÛŒ',);function
get_lang(){global$a;return$a;}function
lang($v,$D=null){global$a,$ke;$je=($ke[$v]?$ke[$v]:$v);if(is_array($je)){$jd=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D%10>1&&$D%10<5&&$D/10%10!=1?1:2):($a=='sl'?($D%100==1?0:($D%100==2?1:($D%100==3||$D%100==4?2:3))):($a=='lt'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D%10<5&&$D/10%10!=1?1:2)):1)))))));$je=$je[$jd];}$oa=func_get_args();array_shift($oa);$Nb=str_replace("%d","%s",$je);if($Nb!=$je)$oa[0]=number_format($D,0,".",lang(7));return
vsprintf($Nb,$oa);}function
switch_lang(){global$a,$tc,$he;echo"<form action='' method='post'>\n<div id='lang'>",lang(8).": ".html_select("lang",$tc,$a,"this.form.submit();")," <input type='submit' value='".lang(9)."' class='hidden'>\n","<input type='hidden' name='token' value='$he'>\n","</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($tc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($tc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Cc,PREG_SET_ORDER);foreach($Cc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$y=>$qd){if(isset($tc[$y])){$a=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ja[$y])&&isset($tc[$y])){$a=$y;break;}}}$ke=&$_SESSION["translations"];if($_SESSION["translations_version"]!=1126468046){$ke=array();$_SESSION["translations_version"]=1126468046;}if(!$ke){switch($a){case"en":$i="A9D“yÔ@s:ÀGà¢©¸Âb6@†ñÔàl7˜L‚€Ìiˆ‹DÓ	àÒm:›c†ÈÁÜËÄ`æ“ÔÒs	Nd)A2Ì³ƒq¼è 2ÉgI”Úp:AFó‘¤Îi‡Dè¡Ò9È…€¢a„Üg:˜LæXaÎØPˆ˜mÑ[™¼İ7™„CD\n’t2›f›´âu=ŸÒ)GK\r´Êr½N:Ü¤Å9‚ˆ†pİ:Ií…3¥VÏ™!V'*‘8Êt;Õ\r`¢9”Şm×ë,“|`(Šd4ÄÎXã”;p\n(\\{‘’Èo«›¹óm›GŒtkfS¸ƒƒN²\\¨çU°K1p\000Ÿ8ƒÓ€Ìr”PPb-ÿPQLÊÕŒc@³#ºú€¿ª èİ® Œm\nìşŒ¨Œ\"ß®ª@Ã“nş£Ô2ÂâKÇÁbè¯@-ÀÜŞ¿ÌøöŒ°ÈÂBä÷¬\në…Ïb7ÃCbqÈ/-ÑzD¢àP\$Bhš\nb˜-2èò.Ã#hZ29Âc ‚Áoô,£ŒŒàÂ\r,(9I.L;#`Òˆb˜¤#/cxÖÀ…ÁbĞ/¨ò¨•-Q¸Ü‘LÃ<Ğƒ£Æ¡c0ê6\$OğæÁ®Ô à8AAP¥ÇŠBˆ%ôí0Â\rÌPà4 # X\"ïúæì«àÏG\$S¼ó=„jë3Ë®1LX+k²ğ½/ˆQÁIx@(	…šÀÔ@'AJ8€£“Â@¯Œ©¨7¢ƒ­m‰â˜¨Mªõ\n)%ôª%Dß(ê¨ï\rÖ5u IÕŠ»#ë@äÎVÅi42M‚À%QÒq%Ö#\$*×Õ P“ŒG1Ş8ŠÎC‘©ØV5GÊÂÜ90\"DßÁÖd<;±¢˜Ã\$¿¹ú³#cìĞÃªüàM:<æQ@@»X‰°¡’eù8Â3Ø¥[!;ØÄ§kÛÅ›3H-YbÏCÖT(ìğ6iT\rL7¸0ó²¤Onw’ãqíb“Ô™¦ÇÁ\rùæK\$æ:ŸlíˆmÙ½-ÓZ÷D«Õ`—ÁØğçK³êÀÎ_ƒf Â±ÊF˜OCvæ‰ï{îş¾&áï¥\$NJ×8<ZĞAì™Û33#]3owF@Ãzd€¡ˆ!£»|<q0X“Éæ¤\0004_v½İŒÈ©vuk2ö:SXÅDƒ®j	â\\ƒø~CJ†ıö[Oä\000";break;case"cs":$i="O8Œ'c!Ô~\n'Nó!…Š™4›\râ™”@n0šL5	Ò(o:˜ç!p(ša<M±Ãa¹†­BÎÆóa–\\¡Œ¦ÃI¬Şsä#‘Ô@j‹	Nd))N‡#‹™L²šÖ‘%€ÇFIr¤pb«æuÉx)Š½Y\"¡„Äu6Ï2Q\000(”a=M`¢±äÅ:Š)ü¼Û11WÆ“QÒ-H®QB	ñ¸ÆoÄªm<ä ©šjµpQWi;qÆÃ™­‡k:NS/9› ¢&¨ë‡0ˆˆÓ	ÎÌ˜2‰³ÑŒÊ\n!fç)r´S—±T ¢9”Şmäœ<ò™”õ6í¦CIÒG¥Óêu`¢A—roÁCÍ&ƒdpæö¢x¨95/êÖ°\"â8b”)²Ê'3ã‰1C[v('éªÈ˜(ÙB7BÀPJ2ÂÆ1K¶1LI1«0ÏÀÜç„°\\‘Øb¾/àÊ†°#XÈ2§ÉàìëŒ¨xÂö0\"bTöBÖçH€æÕB(Z6Œ(ˆ'Èãš^İ>b‚!®[+BŒ[538Ş46“#í4:ÈØ!“Ú873q Ë/Ì#`\\ˆSğó@L¯ì?GÅT<Àˆ®tdü‰Ğ-Í‰Ò´B\"°¤¬qˆG¾‚@t&‰¡Ğ¦)C \\6…ÂØå[BìÆ2AEÿ7¶RÚ=\"7c`è9I Ëd!#„Ğ—«`Ş5¦Á\000†)ŠB0\\OPbjÇ2F6®Y2<ìÀê’Ì•ì&Ş19oâ&;1zÒ5İr`æÿô%å6“crº\\“2`1eê<™&qR¦¾Ø;6C•Şİ‰‹ôş!Èê,Š¦,&Ãİ#µûfÙí~=·Pc00Œix@a—HkH³­8;=AÉ3x!€@2'ã ê8`ìV{—2hXÈ…°M 1\000 \$\n •³[ª\nPR’Î“8Ó')Û\\œ\nx¦*híPÃm‹O\000İwÜ\"¢‘]Äp\rdk¥2˜Ì4Œãªáìo`å\$E(9í	 ß\n¸#üàs\000õAîì5ÎD¼ø@0zPÂPŒ?ÒÃŒ,¥u-Òs8¦İ(ª€ r¦xP­Aõâ.I(«8Ê_79ul@×Ç‘¹š=|Honh4´¾b<àŞöê6l¿E.Q³û1%\rÎ]	teÎ0Ö”ĞÙGımGÛ‚Ò‘'âüÏJ‹}*qğ¿§Ü¨ñZ=\nŞ0ÔÉàkk€Œ!2^pÉóu«-—5ƒœ¸Ó\rÇ´’¾@Jš¡îÊ\rB®ˆı „á¶» Üÿasò=\nfÃ8k\nĞü‡0,ÒCˆ@\$å`š¢Ø[‹‚üM,d¨EJ«L9eğ=Ôğ‚Y„/¸å–Ã^{…+¼Ø˜€êiÌi!ˆXÉÅG‚\njÇPh„…›”†uQ\$xé5¢çŒ^@yÒ5£ œFPô@@\$\"HÅ†ëÛu- (çÕ£\nÅì~‘€‰#Sä—CÄ)A&5€’\$š|<·—8Ö\000PTŠÄİŒQ0¾Ñ’Œl\000à";break;case"sk":$i="N0›ÏFPüSa®ŒFó€æaŒ§yÂr4›\rñ	 äab©EÀ¢i„ği6°Ô&ÃtB(v7›¦éP€ìeb/fóœ†	…œ¢Q”@%9¤pˆT2\"e2ÉÎgC­Fp9JFH*i3šf’°Szi0×(ÇC	ˆë95db\000Q(Âz<šÁEcÉŠ?!SÆ´Û6¾™NGJ5¹C='fã¼ìi2šèç:]Q4Ôê¦YUŠ¾ÂŒ8ÉÉÌÖÃTˆ‡“äÄFaNfÃ(‰*ªaâDi„æ\n)d7s”B±JUÒc\000G2›Í¦S¤czZKM»b)Òt†`Mç]>§W8_‰]Ù¿4%G3Lú\nƒ“Tı6*ÀÒü¿i›0	Ì²jŠ#M8ÖŞŠ	âd®&ªš²PĞ˜Œ\000Ä‚€LADƒÌMÄcSĞ;CËè\rÏ°HÁ i†+Øò4'+J@RCXÈÌéÊn½<ë0ó0bPóBÖ1­ğàİH`PŠ£\n2	ã\"xÌ7câÁ£#¶:/p‰|şÈŒ\n\r\r´ËK¢b\"³âh^¨ñË0LC`\\ÏÃ`Ó@LÍØÂš61=0£+•˜£t\r%AŒcE\nRôK,‘±ˆøôù	Ğš&‡B˜¦pÚc•t9³ É/ã\000¾KejŸz6;¨;›Pb'4ĞmŞ5¦a\000†)ŠB0\\Of*Vó¨Ã26¯ÑB†Q«T‘Ì¶\000ç(ÊÀÊ1¯Ê6;£¼2\rcª–ú?ƒxİ~C+¶7RĞş\"òŸ%éŠfØ`cƒÍ åq-àY„@÷R¦£!øCÃk,0¤bu¦Õá°3òãeòÂŒ„¢Ê²Ê³­(@ÁW„ĞXœÌ(Š5\"ªkN´-YmúŠßÙ}AQhš1[¤0¡\000P¤)ìVÑ×lø5íˆ 'Šb Ad”+e¾-awÉ¹ÙAC{£cĞìa—·\r¬jª2X0Ì°¨ûˆ2[˜Ó„c£R<³{59	b)Š!Ì(ÇÏNPœEÑoÜÈë#Ö´•u@¤umâm9båJ¬,»\000³jšş¸´³”è\n¾R|—Zü‘—§×âàpe\rCæyÅ.ıİöÓš|bù¼o¼»Â0Í!hÕ\000;`ò;\"ZÚF\"&PÖ£ƒ[Ipäµ«Ÿ¡Zq	Û#s\$0ØBs\\8zaiĞ‘¨Ğ@Jò/RnQ‡¢´x”ZQğ`†A¦‰àğ¡]¡„ñÂ9ÃlvbõPÁØ?:\000-¥¼6RDˆ¡#É¬U‘«ØynÈÑ5œš(¥#¦Ù62ÖPÌb.#n\$®ófÕÏbspäU	™’GŞ\" çt•!ÓzE\rÚmPh}¯õ®ŠÚT.1áã™`yi,A?ÈBHcN5fôæŸ¥àÅìqLÅè%‘¥Ü—B(xƒ (\$ÃJ’\000¾HK!¾¯ÂØ[‹*{aR—z£Ñ¶\n±)ê®#¸NÀ";break;case"nl":$i="W2™N‚¨€ÑŒ¦³)È~\n'›¦ó9”Øi5Ä#)Ìèa7C,àl7˜L†Sp¸M0\r&Ó©¶Fo2ÅM†!º7ÈNfs‘¼Şt’\r'1\000”æB—¨	¸ÓŠòd¸Ù3‚ç#IœÒn€›Dxú?6Wå ©qPÂaµ[G#©¤×k2Şï±¡ˆ€í ÃÍ‘Zà€Êxœêç1Õ4çQ©Ègñë¼å2eğ+ô6†e•™¬æ–®+‘NÜ~ã,'“\\uº0d!qàQ\nÎa4çÄZÌ°æ\n'@ğÛı°ŞmY ¢db=¸\"™\r'Kù¥9Í×sh(®a1š‡z1Ë€I7JøÎ,\\Ô3¸ÜŠ»c€'*ã¨î¥\$h˜Î»á\000à0¬ÏX¤Cò’0Â7\r¶ƒËh7\ràPH…¡ g† P´œ!ƒrÄ;!«À)¬i#?*M˜ä¿ˆ#èÉB\\ˆ\"…£kµ\nÉ ®N˜ä88)Â´œ·0Ô¿‚²…+‘”<2É2[\r/«iZ[¤S\$”4Šdh9SJº\rÃ¨\$	Ğš&‡B˜¦ƒ\$’6…¢ØÕEBè*¼oÓø¶9£r˜9¢Ã,„†·`è9Fèlç'§OÎb˜¤#&ñˆ\\KÏHè:£’„Ëh‹¡¡\000Ş8*Ã,—R¥\$–9hêw\n‰p¦²Hè@‰ VB*øHq£^„£˜«Ó¢¥NHjPÙ¥¡Ù^F•õÁk:F’Øëš#R¬·¢(³¹ƒ,iK%ËeÇ²*»k\"Õ2J(	ƒÈ9Ì›6ø¯Ãï[\npR—\nx¦*£\"x0Ü—›–¢¨õ}b5«÷“`4JËJ4¤Y?_@`Š\r‚œjÛT3Ö©â®—	0lÏ(·í~‘¥@H¬&iã(ÛŸ¼’Ä®3Ù®(Ë):«h@²\rS¸8v\\e³í0{¥¥u²9°7fÔg¸»Ö›ßÉÄº†úlw¤O­\000¤ÃªMf¬¦j#.¦:%Â ê1.bıw1Ö@ï‹¶¾z2¡Y6æêNğöÈJI*a•ãhá /°]Æìœó_„v—i§IèštŒ#Kz-“S\nı7Áôñø Œ×:Xà\nH¶ŒÚ/O:4Ø\"ãr4y£XE_&É_KÏŒ/²J¤ğ#Põ|®b„(ãVXèïğ›1Ü#\rÀ˜JO;i–2JÍƒ\n+FİS62:Tñ7!Ô“†Æí@PEÌ9#£p]ôSˆÉµË™S0—\000Ÿê2&Ü¦>X";break;case"es":$i="E9jÌÊg:œãğQ8Ş 2œÄyÌÒb6D“lPät0œ„ Òv7‹EC	´ÂÃXÃÍ°3ÄrdI\$Òˆ„HJs!Jˆ'),n‡™f°,¨Üi7Økª@(Şr4™êd6“K:MÂ	`Âs•D“!¤ß.NrQB® 3e#¬@u7D²Ï<XMÑcyº\" ŸĞ¨“¸yçJ4Ó%ECLR%83T\r&H|z l¿œÎ²t6¦m2Â`¢1–K‚<ˆ\rs(†aœ`AD*İ`Ş\n)L€¢9–Şe:˜jİé33 Ù‘m§J½ÇU¬ãñ½9–aÕ7ÖÜÍYÈÉ!üg//u2Ï95¨*â6ˆã8 oSzŒ\000Ä<¬ LAˆˆ<ÂJ¨H…á g†-ó¶ŒcI†Y½m ÜÂ Íè÷,K£¬6#  ŒqFõ‰¨«È9B*\\4«¢ ËµCs¹Œã’º# ÔÀ;ÈÜ;\r+¤2ÇíBÅ*8	LË€‰Kr«H´CvúB@	¢ht)Š`PÈ2ãhÚ‹cü0‹ P˜ôã¬d+3-XØ4Oƒå#,M\000G‚›c*4‘à¨7k@!ŠbŒÊhÒÁ\000¬ü\rƒ³ËÊrªD6\"¬Ã(°c+P3*ãhêÃ8ÉP¦®4lºk(Œ)T„1SÈŠ@‘\rÅ F.Ã\"H3ÇM²-±€Òú=áb&»¯+İI\$¢(ÓTø°Ã²4Â\rÏÂP•-‹ĞŒcBÆÔƒµMb¥Hst0·*Sm¡ª‚À×,+…,VÛ(	‚\n7£ÉŞ‰	øR H\"Ú9¢Šz0¦®¢x¦*VÉr—\"ÒèA\$Œ1:š9# ê=_­:È–¥éˆ@‡Œ#«aHbLÆÛ@5v#G´(CéDŒ„ĞıºèSN+uCƒë©Ş¶ß’êU®?£zR ÈşÔG;@Ó~Ç˜30¦,rSøè¢©Pö½ñçğ¡sGÀ7«àåZ±;Ã½Ü~àØÙú?ÑqƒAîšÂ6¤c6¡µKèßFÇŒ=0Çp Pˆ7åahÇEŒxØÅ%hUuh‘	.í¤5¢UïÛ*6ªı€]Ôù;j\$c²ìÑ½\"Lò.Œ µÓmóújÊÃCnÎ4í1âp9ŒkÛ}HnK\rğBB¬Ü#UÒ 7~wš4ù›³x\"o\$¥ˆ£Ušµ_¡µi» JØ\n*h\000›\000§ÙkĞƒ\000Ù¨3€Ã”o8\000ó;ÃŞH\000RJ5H›\":FR8CV}‡‡ªKÌnHğ!Ø	Õª|eœ•­'ÈÛ â=x„ˆî&p";break;case"de":$i="S4›Œ‚”@s4˜ÍS€~\n\$áFÃ	Ênñ‚!„èe4ˆÆSA°Îe9ÄÌ2sp¸M0\r&Ó	°AŠLQñv>i3œ˜kc™Îi9S™\n]>MæT“L2”n„š’ãa–\n'œ¨¨(— 7AŠ†”Ù]–‚„\000¢™Àäa…AD(¹Ôèz:›Œ÷³IÒyh‹ˆ\"ĞÚ†òpÄÓÓuøõ§Çª&Z™Òªr¥JM¹uó+†bÆh~xTÇÅÁE£—e>:›DüX€µ :lä“q¬Ë†Ù ,5!ÈNãğÃX(e7›xö+Ñ2‘7ˆ¦L)¿¦ËWÊ)ßÍÁ&ÌğW¯Ûïƒä+0Ï@ê†'¬ĞÜ9£ÃĞ&:)à¦à/A*!(ø‚>9CÊP\rÃxÁpHDAŠè:¸€RÚ6*£€°C\"Òğ¯Š\n.À0@P‚5³ÈØ¨#º€Ä£OŠ¦ƒHØ\nÑòø:C(Ì3\"\0003eâY\rÃC˜Á/BÄÑ!.3Ã\n²@Ã%bO2qà]	 sL’6shÅ7¡S*¶\rPJ \$Bhš\nb˜­¡p¶5RP»NĞØ‹<2Ú:c»˜Û<#d º!ƒ²¾!ŠbŒ\nƒ|Ì0#<³Q(t*Â§\"#<ÃhêŠF0n9-+ôõ8LÉtÅK•†3\ré4¢¬¥ÈÿX±#l²¢±#x4Ír´Z¬,p3c Âÿ¡³rİu¤cpXÉ×3ø2ØÃİf3\000PªÁVlòN7ÚÜ‹¢HİhI¤{¥Ë:ƒ£“¦Â¡–Â0€©)¬X«,ÌC\0000(øä¤Ë+ûÀ\n@ â¸¾MB˜„ú2ó\rÕ0—\nx¦*1HğÂ0‚7¨µ°¤2Ù£Ó>Ä ¬Rªêˆ£7míL9(*¹b š½0\nê²—< 9%£m`Î:®ø{2ğ@‹ş”·lHTÿ o#Ö÷/±{üÀ²CD¬:¤òÄµ?˜d\"şd8œğZ¯Òób.œÒ²0(e\000-£ä¶ã\nêáóèÇB\rÎb¤±<Pİ+Ë2ØŠ7‰ˆÙB‚@4¸É²Û(\ròú\"\rãƒ 6\rqdã¤70¨ËÓuZ-<í-P—Bœœ£ƒŞ×Næ5\000ïºléŸÍáªÖU8;¶©³zµÅjêDI	1(%ImÂ9BØíM<Š0ó’_MAj­œïW¨nš…jda]g¸Uú¤c\000(®²¤@ßN\\‹‡7ØeĞ8o\"¤ÁŸ*iæ Ë¨:¬JmdÄœ1„0Ãa6A<?3<C\rI|¯(:¤PBÙÉ…¸¸\000¨¶[ËÓ€…é†0\n±\000";break;case"fr":$i="ÃE§1iØŞu9ˆfS‘ĞÂi7à¢I´ào9œÍ&#a”@dšbÆøl0A&3A¦.\"q¤Ù(6˜O# É”Êå°ÈLé	Nd)2=*–KB\n0‚ t9AÎÆá–`v4ÏÁRCI!=N¦3©º=®Ì“	¸Îu2‚Š§I±¤çŒ§Y´tô :ß\r—é1°OmOè§ˆº4oË)TÚ}\n¥TœàS¡äá@ÄßNfÔä\n'Í¦#”DÖGŒ´sFj\n!š,5u¸æ\n!YÍ;^9I†©¿˜N ¢??eÏ¬K¦7è†‰2uºûŞ«s®Môyø€àaŒŞmGMéºùPÖsœO×î•¿,ÃÜ†'+sì¼¶#¨ì269ãhÊû6è`Ü4˜eCj÷#:òŒ\000Ş1 C DQ#vã-°Ü7A j„œhBÊ–!‘ã^7\$)KeÈ*J“¶6¼O”Hı\rÀP§Gc£€ƒRL\nÊC¨Ôİ¢Œ³Úµâ„0T!hHÔ7ªí°Š7 Ñk_BHÌ:&nÃªNxòç…Ñ<C:µpòÌ(óÑS>N.xæ˜'3hÜºÊÂ@	¢ht)Š`PÔ5ãhÚ‹c\rL0‹­»1³rvıˆ#2 Şªhê2U®{l6+’½ Ş5Âa\000†)ŠB2­8'«\n¼0L\"n2°ã•u>ÎI:’\r£¨Ø‡¶©‚Ô6¨3–,ÂÚ\000Ã'Áuª€¿£2…_^°Ê<]tØÃ ÈEÜşÂoúLa”_®•Å„>ÃKğ¾@UXĞƒ×I€ŠÊBlº\"««0R¸¿‹bÜ¤2l®D„Š@ c¨à‹¡µÒ)ANª¯æ‹Âë‹o\\•*\000 'Šb¢h¬\000Î9.¬\\9ÅHÈÂ/ì=¾š!öXé\nƒŒğ”¯&jÚ:×)Õnº¡:ıX7%K¾©Œ\"/nb()¡<á7tT“Şk›É#m\000˜ğEL TíJ<óÄOchŞğ¥\\x™Èò|ª•ÃQVXç1ñïW9%-YUÉG[Èpè˜\nn”3Œ#’~×ö¸‡qİ\$ÍÚD\"ÅkÈ¼;ä¥Û½ÿvª(è‡NTÌ–ÓÜ¬¥ˆ|¢\"ÖW{p|§Ëñ4_5ÕĞĞá4;íÃü¡Ï‹C‚`\" êèZ1±cŠğaÙ©S2›ãÜ–	93~d¨—€¤PbÃ;+|‰ì‘3‡ÊWŸT8È‰÷ºX*I º÷\"¤]z•ÖâôÈêOU¦4™—QÒPdUed¿´(–û|8ç”Åµ×¬bÖ(\"†0@váÊ™„\n6ğäL‚wNí¡“Ë)nƒ1dÛÀŞO	v&1}A’C\"k\nZÇAØšÄø_\000C\r†`À1ø,`! 0é#â>İÑ	…ÆØ*2rò\"áÇXF%ù9·èC\000";break;case"it":$i="S4˜Î§#xüC0œ &i”Üt7ˆ†S`€Ìi6Dãy¸A\n:œÌf˜€¸L0Ä0ÓqÌÓL'9tÊ%‹F#L5@€Js!I‰1X¼f7eÇ3¡–Lv:›â\000£|(Îi7c ¢tDèa1E#2i12°g:˜AESªÙ):ÖfæÊ5*›-—›3ã\n‰:¤Òé¢\n»\rA&*N¸œ^ôtÆV‚s­Ş›\\:Ãa@¢!†¿IUmE3¤(Üg4AD*Ä\$Ò\n)räs)¾¥4Ú¬ÔÍQÉ\$ªÚòÚ¢„Ìæwª™D¬; c0¯:¢a¾¯8NS#w;TN¨¢1C,²¦U6d&Ç^Ô%2Gšh'áòúRGŸÔp¡xHÀAŠí:\n¢ 7#«T'Mú²“¥i#T ºI€)¼Ì&\"…©’0Î-BxÎ3¶J˜’–»CJD×ˆ+ Ê3³Í|V;7 Sî2Ä#\n0+Ã<0…Ï³ãDH¬‚Ü©©0Â‰¦ƒx\$	Ğš&‡B˜¦ƒ ^6¡x¶<ÌƒÈº±x+EËHØ4CÒR2F SÒ9CnĞìíB Ş5¡Á\000†)ŠB2ÊĞÒ2\ráp@ØÉiHØ”¡CĞ4®Ò\"×³ã(Ì3E+K>1©˜ê1ŒjPçF¤èĞçU/,`Êñ#Œ\r^9#K0’3Êtòš:aE'²£X.j…IrT¼5`‡\\\"cs¥EPá7¢i4Ò»¥Èêö;Å_e«•Rã9¬HÒì‡\\+Ğ@(	…„:‚ª¯°aB~¥Cô½IÓ‚_,‹!m77˜)Š”p¥E uÄ€‰F­\rÌ¹ÈJ5I¥UÀèÈQ6}H7\"ë@äèØ)ı¼Œ¼ÏŞ6µ©,Ñ˜9È‹Ú«ªªÎl\"çxŞŸÈb›	£{~‹Á\"uÔ¹*ÔĞ¦­Q0Ş¨”£Y; 7-:°Ù’£JÅo\$aãdNò–\nÂj?6½,ò#“°[\n=è)(·!U6âˆ¤\\Á«	ô¼)0\"C~¹Íã×{ìÔB´ª£NÈä\rºPÓ¦!#eXûê2\000Û}Wä‰#míFÃÓßuêM#0ò4‰®‰J¾°÷6ÊAN-\\î–…Ë›\"j²í'5ë|€ŠÍãw'ásèXAÍsœ÷A‹A«²#mó	3Š÷C«Ò•½ï£Ö*ÍJN7Éë?ß'û8´è¯JÂš‚mûõø”‚¢Cì	Ø€ ’ìIjh ”ÔdÚíO¥€±¦&ë€SIxgBR ";break;case"et":$i="K0œÄóa”È 5šMÆC)°~\n#M&ÃH†¼‚œÍ†	Òm…D\$ˆìÃZÇÌ1CX¸M0šÎr©YºDf‰EgS©ÈëœÈRèŒN*eŠÁM'C©’\\t‹š\r £yÈÒg…G\r€¢¡„Å\r¤Aé\nU2œ\n‰fXmªu:AE	YÔİ·ÜbËÃAÒÉ2ÂççC)ÎıA¢ND£©ˆÂ 2Ì8keXÅ.€Nî&£\rAy1L€¢qÔÚb«N Ö©áÁ†¤2±xó\\66a2™ë™6ˆB¬˜N@¢´ äk\n&ÇC½TÖ)Ì¦óm°éV¹2gMñJ\r1:UmÙ£pİ©İFø (˜o¬&g3™”J×Ş¤±V†=Ì›h4CSì+\r)Rl²£C\"‹ĞJƒ±ÊX	„«¸,(7\ràPHÁ i† P:&`Pì0ÁËòH‚BšªÂª²çK¨Ü¶)ûYB(Z’0ËSl†‹˜Ê•¡1Ğ¦É°«Š^0ÉûV)£ƒ\"å.#£*Ì„@Œ`tBipÜ‹¢í\$Bhš\nb˜§\r¡p¶<ÏƒÈº÷>ªNR\rŒãˆ/RÀÈê·Ãc¯Ç#´síÚÎ¡\000†)ŠB0X‘®«¼î.#:Lª¡y*)s‹B3ƒeı¤I@Ü›0Éú\\)°©›Øó ã„Ÿ é-.²1´ÂÏ^>ƒM~®íÀÎ»)´øáP¬”\rMUµcäÉ¾©pŠÇ\rj¨äÈÅˆ0AE:«8Š¤©64°##HT’¬FuªøÂ>/Åe€(/÷£Ê0ÎJ‚¥Â€)ŠmÙ1\$Tºûh,JV¿'iè]‚Û…Œ6Ş.Ñ	:Rù'—>Qm¨)Ğ8¯¬Â:3à0Öˆ±k[ÊµĞ*Û¹Fƒ[W\n`æÌL£.j7®è0ê5ãøèçe%Âjy/F·#E]C†¾:Ø•ÚWI0Òş×*±ìãüëêx:\$L¸6m‹Öän-xä3Öes+	©C¸ÌrŒÑLóKˆ×ğZv3»ï-à@ğØTpZ5¥ˆ«ê6 £b\\\$© ä;“B«KÉrº¯¢™jVôAc+¦h£˜6ëë–°4K\r?H\rï«GWò²Öì¸s)’ğòyûÃ&Š\rÈJ\\&A°z0İĞM.›PÇ`ìèêİ=èëúª¤Rô¬*5÷¢X¦ócªàyKUdÕ)2uDx:ˆTÑY3!ÁL±s@NÙ\\+Å´) êKŞ	%¤„€";break;case"hu":$i="B4†ó˜€Äe7Œ£ğQ8Êm¦C|@Ìe6khÌ Ò 0ˆÌ5	ª2.DÓ	àÒm’\r0Y”Ù0TœŒ§A\000–\nB”J¦²a* laªN†SÑ¤×(a¯'G0Q–tdša¦“qP˜†@‚yŒDƒ	Ìôn˜Úí¶ù‰ªBa…3Ø)¬ÓK9Œ¶èÒ¤æt È¤”JE*™N”£‹ÁCHYÇãJÓÖ¨S=I\r ¢\$’%¤ÁM&F*D Œ¦pT,r™Úæ,5™èÂtÌ±YŞàÂ\n&LÎœ}X×ƒkAY#fRİ–Ì‰Q‹vók¤œ5 ¢)·Ï=„-)†š5Di4³`(«6÷‚y°È0¾¡(Èƒ1c @‰,\rP(´*ƒpŞ°\\¸b	j³ñÁ¥ä4?­xŞ9I\nt7+\r\rq:P¸iŠX¶Cbw\r#²b¹¬\n Š¥ƒKêê##¼*\$ƒÎ<»îét9Bæß¿©B7JZ¢ÿ<p@Ë\"20@Œ\rrøÈÙĞ<1È£dÎ6M%ãı6MÓ<É3MTØ\r¨#€Ş7Ğà8CkF-4hò.…Ãh\\2GŒkÅŠƒäåˆ¨ŒÊhäÙJ†Q©2ãè„¦)É\000ô7ÂOÑZapA/NÃ\$a—CPä»½Q¸ä±{×©Ğòû#<-K6£pÖ0¨Bv2hPÖ›95¢ö„ã,”T‹@ôÙxÙ9GHHÒ2¥m«kÛ(Ry\rRhèê:=RXÈ÷TññSU#d“,)êÚ»g°ñ‰Êâ½3Éóš“§mkäPĞ#<°:'‚€(^+ú­ MMÀŸ/w\$I…Ôä9öúB(	â˜¨?ã CV¿E°ÖçÃ çŒ/V.'	Ó„°Ã’®´s¬/ˆ0Ê˜©ºHÃ±:ú0ùÏb9?¥[”ä37l:OéóäÇNH<¥QáõÂcY²3àÈA‡[I#3ªéÄ¹|¡*¨&ó¹Öt·9Î‡<‘?£Ë— ¸ı«Ñ0Øe‚ßí\\>€Øó½a‰Ê¸¥ælŞdıúvÄO>'}ªøé@–ßúúùôƒ•eŞÓjHÖ\$«Åç,7*=%F‰ë%öO²Ëì^ó„LN°\rŸlóø~__ë‡¡È‚\$E~GÆ] ÜGÉ	`,F˜=÷LŠñjd é#À(Ci;Å°ë“Ñ˜û±\rôß£B(L:gJ±“˜U¾L™oí¼’\"GÈéÿ>¡Ôü¡fŸ2'~ñ\n ¥@˜ÒI\\6‘\$’´NAM8äm¿B²\n‡ƒ#šuD®öŞqÂY˜BAèò‡ÔpHmŒæî!ÅœÎ I\$b„5¢ÜíË	cA<·)Ğà{„´U0oz‡'Àçƒ(";break;case"pl":$i="C=D£)Ìèeb¦Ä)ÜÒe7ÁEs9ÈÂn‡ÂÍ†“YÔ@b<±PFñ`Êm7±W‘³¹”\\\n&˜Mg3É´Âl7Dã)°×)M±ñ¨äxé\$œÈRò„l×%Œš`Òh\$¼àuƒAF#)è@z6šbà¢Zt0×\r’ñ\000(”ÄLÀMq3ÉŠr=Š#yÌõpeGšÊd7LòJõğõ~2Ş!AĞ‚“L§@ğKÁHéT—Š‡“„6y:OÎñƒY„N:›r'“ë\n\"mÑÔÂsÑftymÓ99mÊpú(e7ì‡+(™<‚ˆ¦MA¼ä\n*àõ&ı\\pHßÈà¢ÔÜŞg:š„3MÃØa8l7GÈæ‚O°œò C“„ï€Pƒ7HÂtƒ/‰ÈŒˆøÂ5€L)CÌ5\nŒP¸èa–c¸´.i0ÁpHEÁˆ)C«Z5C8È=!éøØ.b›¼:>.°Ò°€R\000<Ãr€æ{Z•;Ajl4xÂ2#¸Æ×\n‰;tÜ\ròäpö¤F!\nÚµƒJè„£qÀ®<i.¤B£,¬0Ëp9Î¤îËO3Ü°—Oó¤í'Põ+£iz‹/\"@	¢ht)Š`PÈ\r¡p¶9Tƒºº\r|Š(JC\nTK¸ØéÆlŠZï‰Èxà‹!Ã#Ô; J8Öˆ¦)Áp@)×q Äø§tUÂŒÎğÚ:ƒ\nğ…òsÊĞÎuK;ĞrˆÚ“iÂ—Îi°Î‹§H\"\rã:İïœ\0004§a\000 \$\n	x§\000'Vß@Œ!b¾÷>óêLÛ–òL—×#-w.5òF–Ö¸Ê\\O\".±%ë*d1Ìƒ%F)w-±*şP7±ãÓ#›¤%ı€0)BT–,PÖÚ\räÓ5æÉ3ç‡æQ\nşBã£vˆ\nHR¨c÷éX/£¢à81*c%„QƒÒA­ŒŒÚIXè–P´6ª‹õè1@\$Ê„°»`Ç¢ƒ¨Ä¯¡Ë‚f¯,|›5	øÜ3\r/‚,1#PİÄ2àP¥P¨õ®ÕÄ9¨Ãø<¥üºÌ«üâE…r\"n4ów&¥Òó\"“ÔÁXÉ2¢ı#´îH‘ÆL§Àİ8Éé{Ú8*\\\"ÃŞ¾şfå~qC¤˜:Ú;iºú>kyİÌÉ+¯;²*ôËØ°¢M»<e¬ı·ğßu\rø°GHşŸoŞ£_Ë™y¼%”â0|’ˆdè‘É•È›¹Aì(´&„£\"(D½ü;WpZXzOµ(ÁDìĞûñxÄ	Í»‘!%8Œy?A×Œò û1Å!ÂvÚkÈÈuK‡©¥˜¢ˆ³yw­í™‚Ô›ÓÁDØ6V„Ï[—[!Œ‚|ˆØn#°aí¯È*Wßc¢(o­¨#Ñ™Ó[¦¹Îôİ\rD)€'r=;Wuƒz[8á@%°@J3-\000)`fnNËòt5\$<ÜPàS’(E&pÈ˜HË¡~FÈ\\±ğï\$H0k\r12'ĞÂŞÍi•ÉÚ¢T‚#ûıg ë\000";break;case"ca":$i="E9j˜€æe3NCğQ\$Úp7œÎf“°Ê 0™\rGSqĞÂrM‚1¤èx2œ…À¢a„@m4™%ÆØàÒm—%&Ó)Î\\d‘I\$Ò‰\rS §2¬‹#’Éå\"q¾C6€™M'‰Yˆë&ÎF“9¤Üa6‰ÕcA¤@h—Ì'xêl0ÊÅÓ!¤ß8N†“d˜ôaíÇX)Âğu¸<)Ó’³ˆ)1h)”ğt2›¢fı(çN¨Pêf©vxÓY­ÊÊ†“†356	ñ‡Xù¦Õ1§ ¢!†< ·,X‚gCÃ!Y· ¢Ä|ñˆ#™oæS¥LÂÖN`¢-ôébß›s[£òÆ\n!é;¦9¸óˆ\$›&3Lºğƒ'¨™†Y±0Ó„	Ğäœ\rÍèß©\n,#®\">áIÊğ³A(ÈCË@ÃÑDá.ª¨^qxbø%+—-àØƒÃzF6\rƒxÆ	ã’	†Z˜AâÆş@p*-'¯Ğãâ98PŠD2Œné†Y?Rˆ2B\n\$:¡íÑ%*Ğñ2£HãøÒ<b(Ü;?¬HN¸\$3»ú:)PøÆ±K0”¹/LØ\\ŠsØÂ7O³Ã@„°2¶ÒÜº9KóOÃ P\$Bhš\nb˜2xÚ6…âØÃYŒ\"ëˆĞct.±59³)’€ñì\n9O#Ğ*\rã[Bb˜¤#9ºÂŒpAfLË[?#ğ’H±\r«»z•Ìcs¦ĞE,áW‰[š‘Ç(ºzÁ¡+tš+rÛ)(:%*ÓélÁã<8\r0ÈèÈ¼öê\\—,ÏÛú9°k0¼¾ş-*Ì;Zé>æ®Œó@Ñ@ğ\"Ö·¹+ŠæÛ„â¯•´m( \$\n0ŞˆaÎr\n)aK4×¢Ò*2¥bbzÍhA\000 'Šb¢\rÒ	Â\$—ğËEm\nC(È:ÍÙ®Ÿaiê²Ì1¸P£ÿ¯·ƒ;'è½r’¡0Ì Y´É]>=£„“f¡<··oÔr1.ÇL5&Üğğw>,È8äP„')jsÌÄeëjß™.Ê€¸WBzÄ]8¤\000„ì»MGÁık‘jòİŠFƒŒæy1#¯›ÍÓÔø6ëêJ¹P/\"Ñ{ı—ù#O—IùÜÚ;OˆÚz8Í\rú]*ÂŒhÃ0n’\nAzSö…²'Š!ë1JtÍ{»¦Q”u MÚ÷D¯åÔÒVCˆƒ|D)¬ÂË±xNÈ*µphR:l%á`3as…4)\0000Œ1Nzİ“{A%Mä>âäH\nõ / ´\"VÙˆ&J]PÀ2ş\$Cğı0˜ÈÉfä²\$!÷pš„<áĞÎ£°@pjÅ8ÇŒ!¤8CÄ?ÕËœÄjOÚŠÏfĞDá…@Â¹€PF0‡ò»0Zr‹¨o€";break;case"pt":$i="E9jÌÊg:œãğQ9†£7ˆj‘ÀŞs9°Õ§c)°@e7&‚#\$8M'cx¸T0›L&ãDDÛ<M±\$œå)•Äbb)Ì…. ÏåRÁº2Î`&YqØÂz4›ÁFó‘¤Îi7MÚ|~¤t2›DC	Š:a9Ë„\000¢I’³2Nr@QB¸ 3e’S¬@u™—5 İZ™NtKˆ*“@¦ vcMN\\T4Å²fC)šÀiÅc±)Ö]­C—FÓ,(æ\n\"m‘ñÔäaÌ:K(…`×ÖAE#.G2›ö‡Jï\000™¶mÈ·c¥ròs×(v\000¢œ€ÑÀ\"›º—ÂŠ­%òÍ8ã}3™_€ÂL4Ñ°è(ª¯¸¡(ÈCÊĞÀĞDÉCÌ 7+A j„œ0¯¨PÆ„¯‰JÄ”¶¡\000Ø7Œk'N\"øë£JĞËe:ò#£(Æ¬¬#\"…©Ò±ˆƒ+,Œ¯R´\$±í¨Ó#r¢‹Çé\nGA«HÃ!£ò³†–Á<µ!²iE/²£Î®8@	¢ht)Š`PÈ2ãhÚ‹cü0‹¯\$·<£du\$ŒTĞ?Ô#j‘'±ğ¨7i\000@!ŠbŒ,²65	h@ôÌé*\"3+ƒhê6\$ŠÊšú¦)Ğ—=­D·-O\000ÆæÖÉtŠ-L’Ø’¼ã‡8lcƒ#\"Ê¼¶j ³}’\"«ûÁË® Ê‚°†ó£ŒU¿\n%‰rëY\r-4S¬´í?^¬–˜ĞÍª,pç!¯3\000±s(ñ}YÌ@(	…À‹Kf\n(R ,Úì9¢ÃrV¥Â€)Š”SvÒ&WÜ¾íøÜÒÁ˜2£Ôˆ­‰’hˆã¨@0±•¿€Iã+ş«\\Á\000Æ7Í2ßŞšŠ—>îÂÔŠÂê>¤›\rëµİ/ë/Ã¨7¨´äš®ë\000P›®İ£LS!Öš¢ì-!\000å­?(½h÷=›âKoèïRÁpïîâfĞCcŞŞ,2»S»,8MKän£Í¡l\r9}g|Ş½85HÅ\\,š8=`Ã˜Ş1né0@«Dé/(ß£ü0[¥Ğnï±jiÖÑ…Ü÷­²~¹Ñ²»Š„Š4WÚ8 Ô4w¤Q0\n`·U€Rw¯mËãH1îãvõHÎeYxYëËÿPu•@7\ra¿¶íèªI\000¬KC~˜ê,\000a‹£üNŠÓ¾o\rã@³l‚`o8e€3Á\$ÉÛ±1e°>UVèÚ1Ò\nîºW°‚(xxeğ\$†ØV‚…&,™2ÂdŞÙo6ğåîµòvƒš\$1+ÈPª°";break;case"sl":$i="S:D‘–ib#L&ãHüNMğSh€Üa6Ø«ãIĞÒ 2N†ø	¬Ê.‡˜MGc,\$ÔaK\r†“Y¼ætH¤†Y0€ÕœÈR‚\$êK07@æ)¼¨Ã(‚OFãx*&i3šbæÈ||èa1M’\000(”e=MES„NÀiScI´X :ÛNVø€ËI3Ì\ræIE5;(4J4óL¯ËåËqŠÅPšëÆ“…ÁŠ €&Ã*Št:ÅkBI„ç]´‚ˆU£	Ê\n&Ác{r9”Şm2P¹NÑ6Ü\n°YùÚ15ÚïV¾dŞ º™A[Óœfâr4ËôBŸh©{5Eà~”œoÄÁ¦NĞZ0™\rÒÿ'\n¬ Ä•€L@cR¿@P ÓA#à#+^ªA l¤8BK0„®Z~9&©˜)¢hóĞ	‹ª:Òˆƒ*^ı»BHô°¼\000PŠ£F	ã#îüŒ®p+)­¾Î\rãrL¸£EØ5.‚lÒ\rÉò€Â²„±2Óº…¦\nk0LMŸ2ËhZ>9ºğ<Ã ´cH]8Lè`Ñ/MkôÚŒÉ@ô@P\$Bhš\nb˜2Ãh\\-TÈä.Èƒ#Å9Ç1ØÊğ l0é)Vá­ÚÔˆ&Oş\$i4º!ŠbŒÓ1+£¨Ì‰£«H9Â¿kØè”.OÂç/˜áV”(½ Áºa\000õ4ÆÈŠİ#¨û~7Œãz¿©ñ\\l˜'õ*JÒW‹’è‰.ëj¨;*\"ƒÓè\nQX,O’õÚcHÆ“¶H(ôÂ¤5<&÷¬2ëRŒˆ\"=?Œ•3o&€(B‚¢ÈûÔ;\rò¸ßh ©’hë­¸?o×¢x¦*W‚Ô‚ı³\"Ì4-i>0­©c[ H¼›`±9Ãï¾o­\0004Ço\000æ…æËƒ@-³¦:1JëşÂú8*\r\000;I»HÜÉ £\"à'#ã°ä›áI@¦4/n/9;ê.Êã¨Õo/bŸ±_†p©§Z'‰¼C®,Âà)¾Nq.Ş0;å¶YàO@Š/éûÕ5tÛ«ë7õc/E×Ns«	Ó¾³×UĞõ«øÓ?ô½ßdà¾\n&Xô£ãZf5¢É†ôùª‰¾AÆİñÃ'–#weï[àÇ7Š¾á}á?©‡Á½£Ã}ò£_>:P?Ú“?‡»?{ì'ìßHzâ\"‡a®’\"¼XÚ­Ô¸òJ—P;AH±Üƒ™š:FU`½„n¼ZihZd	œ-b(V ù/¯Lıb<ßğnHçè— üûPaBı÷C¸pÂáóâF¼ü• ÏÏÈ \"Dœ•ğÂÃ` /aécóìÈÉEèé–àlQ¡]l`Ã¯ó®WË	¤\r\000(*@ƒH’áú+xP\000";break;case"lt":$i="T4šÎFHüN2œ'cÉ¬Ş b+ÍfSaĞÒ 3A\r†ñp(ša5œÍ&Ó	°êsŒF¡æCÉÓ(ˆ§2t0Ê\rÆS)œõ/:Mæ£v‚ÅP±¦“(Şr4™Í&é,æÄKÀÄÃ)¸é4±VqÑ\000(—%1SIÆ©ßƒÛ-Æ³M|@v4×XˆQ…B 8+cu…g29Í§‰ìüçA¡ÑAEc	Èéo¡Ø„hQ¤S5Á)TÌñÂt0ßNU¸&„æ\n*d:yìe5u9~Â¦k6UˆæSy·uP¢gïp:DR2™\$z„Ÿ'•ËåèšòŸá¨b¯òíyB¡\"5MÆ{Bs—;IğsO§×#«ZÎ½¸‚¿˜PªÏpæ5¬\"^À\$îózŒÒº§ L ƒ:		A°xè±CÈÊ×Ãx!hHÄÁ¨\$ŒªB¸/˜ê99èÒ¡.bG5â°Ê€i#^ Š€Ü5®(Ø0\nÚ ê «Ïøè¬F!\\ÿ/j è¹Â›Ç³ÂJ‘,Lzr™A®\nü×ÀLÌPÍœÉ65“z	8Îs¬Õ<MÑrÄºKLh\$	Ğš&‡B˜¦cÍ\$<‹¡hÚ6…£ É)CÔö3Ò\$\$\"ã\"„ã0­z+\nc(äÛ¼è;u¤O\\Ö!ŠbŒÍèš¨Ä„Â7%‹¢í?\"ÈÂ6éELâ«°;¤Õ´,²ö‰F)V”4ôóÖÁŒ¡\000Ü¡	2ÙŒK?¾¬Ò7\rcÌ„ÍÆh¸ÅmY(‹ìö'(íZôY¡,6\r*ğ”Aã:°‘I2^ú½V5Â¿\\K`ÔVJşû¾x}ö‘¥u:º<İBr°­0,Ó‚ªêËR¢ëÂº‡â—{Zâ³B€(0/3ABf£¢…\\:C¨Î\nx¦*iİA„˜ê’<-úëpÙõC4º6Hˆ@Ê­2j\\—HúØ@‡\rÃ2£m cë€ÜsPéy/lB;-?óZı\"ªm¦÷-ÉĞP…\"jû,ğhæ™Ü£¬Ëqnƒ¤3ÇöM—?¯ıÌë`Î·Ì½•Ò5LÙˆLÎã”Á/j÷ĞNP4µhŒ¹dØİ˜©#=©hÚO×~/w;Â~3š4Î>W‡5ù¯÷Ïˆƒ®Öì>C˜à½ˆ¢±‰0¤»pÄ#’°é\r¨¿]Ëó(ï«¾¥Š&Š¨°Ç;ã¢ÿ²(E“‹ózæÿ?‚:B‰\$D\$‘±¸²Já^|B\\×¾ğÂæ \nkø¬¦@fÃ±•4'<<”ƒHAÊ{ë/´Ah0²]q)ÈL±RÚ¯[T.!p}q”óÆµÀPPA!„8Ò€Ğ)¼5ğ	Ç?§œ€LNzÅ!ÀŞ[@gQZ,˜ëšA§)¨Å5ºàô_ÂP	dn¤’B\nzP	!¶89C^‹s¨k¥tÍA¾Ïƒ˜e‹ev?¥†øÿ3Ã\"æp½€";break;case"tr":$i="E6šMÂ	Î?\rç3É„@ga­ÆC)ÈÒl2ÀO&ó¸B4œ„H\\4@ia©àRsÔ¬í‹™`rHd8æÄX›§)À€Js!G¡SX!”ìc:\$fV\"~/1Ø©ğTpÒjM€¢¡„Äl7ˆ#f¸ğ‚Î¦Ãa„Ü\nŸˆ§«qÒqmNL–áŠC4ˆ\rv»lêsB’Ã´jAÒ=j¶[§9éÑ†¼9F\"À¢™„ów0œ«šI A/]\r¶ìäDôcËšó@¦\"À×4‚ˆ4ĞQÊoÅ3dÃIÌèeÙ‘2ç©”`òi1îr\\œàPĞ›í»ÛıNÓZê¬aıÚ¡feˆÓL¹Ã|ç3nKîxè	ı\rfÜˆÄûCÈÊ9CpŞ°\\XbİCV\r¨Ğ·ì\nü‘@M¦«O’nœ§`PŠ<£k82¥10Z8!c£ä#¢(š*™-/hë6OX‹´Q¢\$Š4OÈ@2ÅñŠ2F²\".2\r!sğı?\$¸Èr!!¦d *cHÛ(B@	¢ht)Š`PÈ\r¡p¶9Nƒºd:p5§ğ¬˜œXSCc„Î£pê¤7´*ƒA\000†9!c˜Zƒ8á\000ä2#¬¥ÈàÎŠ!\000P!ŠbŒ„PÊ:GAp@##ƒ¨Ú:„8×ÃÒÚC\n¦Ğ§B”Ïk¸Èœ#Âxè:U²–ã)Št:6è´Õ‰Å–X£ UhZC›/M É´2¡`@62ã Ì™W#-w+C(²¦±#‚p7#ÍòSG4‹n6ƒJÈ\n« Ü»<KOŞÈÀİz\n@ ¹aØ‚ñ¯hPŸÕƒBPSÃl£©*Zš§Ï8Ş5¯¬¸òØ„€)Š:`ƒ]Éz,ç„\néC_÷âF‡3Ò¶n‰\"µ70#¨ò3Ñ!´ĞŒ9¢,-¾¼àÁ,õP-Â'(ìÛB ^\rÃ‘‹Kûi>ä\"²<{µ¨N\\qÜrÆÇ³È èï<6|‘ïÃtR2ÀJXí	ZüGÔol#lïHÃ8´HÏNïk¶û¤£)°RªEÑ½\"c¾boR,ïİŸZ”#2•ˆ6Lö’Ô\"™z¦:/û,Â)8é’<¡/tò3öşĞ1•æyÒ~Ø®«ë\rÜqó\$˜^9‹~­í®©ô¨¯c»¢Ùrá¤,^i“¥ËÇ¾ªk\nÄ†0FÉs8|í>oUÀ‚—PôÒ³È>A07ŸÂÀT?„:ÒöŒ€Q–µ@£¤ZË>FÔ4!Zm^YZ4ot¼¶|üZá{…€Î\"ğ©‚oáÌ•ÅÎüƒKô@";break;case"ro":$i="Ed&N†‘Àäe1šNcğQ8ê 0›`§S¤P@ÃWŒlDÈÆa0I”äu6AL¢œ˜í&ˆÒ4Ì–O)6˜O˜‘„Èm…¢)ÌŸ1 Àd)\$˜@n‡™gg3¤rbg7›Fó‘¤Îi7kL4q¸@b0¤IYÂt•Ô%‡SqĞ@t0˜Œ¦Ã,ÄX\n&O-\000¢\rğÎe™VMç9n	tµØS‘¶8t7˜`÷ÁJànÆA(³6n ¶¤(UU1*NH%³'6mYŠì4ë–‚ˆ–ù’ï<ÙÖ™	ƒLQ+œŒ&;„±8Yì QHÊÈM™L ¢9”Şm2+¸Œ\rSE2w›ïG?niÜîë€¢†j²ñ‰+¨ä0xÎÍ%c‚LœÃ*ë,\000Æõ¹ÃpŞ:À‚¨Ø§((Â¯Ğ J2{¨ô1K¼H<Œ£˜A jœpB8ŠA\nÚºº-€P¦®/³ Œ Ç®Œ@¦½¡‚Ó\nz¼3«ã¨9\rãpÒnV6<b„õ T– ò¼ÊÒ¦©2Vâ)Kƒ®®ÉŒ@‚±k³Ô!Hâ‰pšÌ áp ¡ã5»ÏˆRWQ*èæ®\r)‹¦ßB@	¢ht)Š`PÈ2ÃhÚcÍd<‹ R\000šºÒœ½+P\$69HÉrMŠbŒ»ã\\9XÒ1?p@ïPsí\000ÊŒ*DZÎ¤‹°Æ‡c¨Æ1Æ)Œ¦Æ.ÂVõ£ê’¥”2E«“àØ9	BY7JÕƒš·…À3Ş\$ï3ÀÃ@Ê=6¬”,:¦(sĞÎ6È£ğİ-êâX0¡ãƒı43¯p@3 öê¬ßd«ƒ:<3ìc‡e³¸ì4¯/Å\r1!1._˜Şá\$-ô0P¢…)ˆ›Œ#Uô(	â˜©š ³ˆ@œÑ¡\000©J®Úr‚6qlÔ-éXçjèâ»mäN“Ñ6%#Â‘ì ÃŒ¸Šê\r){D9¦0Š¯ª“œ¥ÒrÛÄ9y_2ğTˆP\n¢.ŒÂÏ—²ğmoñ(¼¥%Ë,†Š×ÖÏyf—\nëËÂP¥;#,I|åÚ\rµ{…8Û’ê°CPËÕA§Ú¼]Ø@ãköcA;vî[ªÃ°œªì6ïŠDµÔ?aL¦ËíHÒ~Çµ1ì¾ò1Ø¦İ˜ˆ:ŒCb1·#Ö•gÃ²ÅFA3ZNå{W{!¥í­Šƒ“ëD‹49€è£ D\n6‹06´8ÙX©\"\$LŠ—bZ®Ë[é>%˜¼¢´ğÏ’A-Še¦Cæw“B-EÁYı¹6†úI|ïqC-ò Óâú]Æ`¨?\"0…[æ€‰Œ!vLOê <d¡4TúßvE(’,(¢L‹‚a™„a“ès‹qxF`»põy(G¡±0¼”X\nHMĞU\$ @†Èëë.åå*yXË,Y7§ÀùGf\000";break;case"id":$i="A7\"É„Öi7Š†˜¬A8N‚i”Üg:ÅÌæ@€Äe9Ì'1p(„e9˜NQéˆç0Åáæ“Iê\"70#dp@%—˜'C–O!‘ˆÈ4Ìèe6gSY¼æo‹‚ç#IÎa6B3¸>l’Ñ£’3(ƒLAD‰Q„à Œ®3™Lö;):DSYÎn¯Oä’im\$æuGl’RTZº 8EŒ÷›l\000Ï\"…Lsv|Ä@wƒ`AE3¥r²B„HD©T\"7	#™Mñ]i¤D0™¨‡ QÉC­‚Š¬æ®cÇdu.N™9f1n)»{•nvjsO9A ”É¡ÛO2€Q¸Ş\nE¢AŸìjm¨ã¢‰Š8# Pª9ª\"&\r#j†± +Û”4ƒHĞÕ£Ê°¸\nä81\rL#V®#‚p	(àö.B[ÙOp@ÇÃÃbX9\r	0™ êàÚ1´qÇqê½8òhûë˜	¢ht)Š`P¶<ËƒÈº£hZ2€P—©T/£¨ˆ\rkVÍ¨7h°@!ŠbŒ!²À†Áe!ªz™ÊÚ£J2A%GóÈÙ4Ò-ú¤Œ¶ñºP4„ì—µ#HÌ’ŠtıB0¨C˜YÃÜ\nÇ¡ÉèÎ4¤¢\n”PuŒ‰(ŠÂ°ìJ–†©I\000æ2¸ëm†Ã\"ÌH \$\n	‚dãŒ”Úd(J”¦!ÏE—f¤®ˆ\nx¦*Y#’{K¥‰M#CC­A7 hÂÁ;ıäÌ3Kª:ªÃ0ÒŒ=,Ja;Êä“IÒì:±b.P#ñæ ™ß¯\rpî·ª%¦jò½&6:,K#À®1bœ\"ˆ¡9Ûš4¯:AŠ\"ŒÕ™	æÙÂ¾EBr‚¦IêñÁœj÷¢ÎûĞÌ¢ïĞ’‰pÊÛ Q¼ÒÀ„ucP#,\nŠ¢ã¨Ä\rÈ*Kmy†G¸ùš¶’ˆã\n7\"°”Ø¥UøŸå›D;ŠPü|·.	Ç´Ü%ï*YîÓµ£»•^ãë¢zóOCÔöiùz»\réÛmÔ'h¢¶2´³}SKÁˆí(°ï0¬WgH“›¹0|4¼ÿ\000³´>@„ÚéÂ¯0D»æ";break;case"ru":$i="ĞI4QbŠ\r ²h-Z(KA{‚š	ØL´h,¶‚ù¢h£\r¼e ³…ÁdÃE!‚!\$Ë˜Ü{‚ a0¸<í\000.‰'\$Ë¨ü± ¼“.ä0èAs†F–óÈR\"7‡¢éÕ	4–‘\n@Lfq¹À´@%9¨\r;'Ø£SHâÂmÁZ(™Ü•BVµıêı‰Kd[|b³N‰\$¤kìU¡V M-ß¿Æ²‘Éj€ ‰+ä”ÕÖFš±,%Ò’bŠ¿·Ò‘š¸2æ]–_eá×2ŞßËs»ÍZ[Zğ×»E­Ic]ÅškÄ{¾ïÖXu®ÛÓÂÀÚêWÁ„l¯ıçEsSË(±ÅôI(Œ·ë²X‘¼n‚h‘è‘BÙ¡	t–?Éë‚–êb´§¹/\\¥äb\$I¡®\n¿?PI P½oÒu—‘@†³‚ˆ¿£Äk‘éØ©i+á\000>qäLOÀly {|¿Å¦<¼´)ëä¯1ÊœÅMû¢¯¢H¤~ÙJÉ*4Ü1M¡¡\"#ÉÓêá!ä|œÄŒËôC# PJ22iš\\ÎóÊç\000Ï“Á ÊOñ¢#(æ\rÃx¡pHÒAŠ%4EQ’\$Y\$jQA­åâG°å¬7¹)ä¾ÙÉÚŒ¤%¤\"ûJ	ë§S \r{™¢EjÈèÆuTRğ\n%'ÖF5P ­s!ŒÌO§š‰7[4­«’tº:ıÈ1\"¦¿‰<¿°ªŠ{m.3ìS2·jA|&…Î­]7ØØİê½ãAL‹ÍêŒßÕĞâ]o^\000„^òÏ‚S2Ú€¢Ö«d@¿N\n9E\n\$Œr£…ÂÚàYåâë]¹9]¶ƒ`è9Ckz°K±‚ß0öŒµ#ÂÊØ†)ŠB3@·Áî‰z\$vFwhÏšÅÀäF…&‰\"®*KZ°ÑJªáâVd£!è3I,L²	x‚­qB'N™p‘£k·2lÜ;môñ£\nêHóa\\‡ZèÑÎ0¼ï©ê†—Abl•;‰¾\$¢ôR—àÉp®¢órŞñ º7jMhé-»WÍûsİJZ:•+:{œRÙHÍÒÖŠ3îb@ç*“ ‰²Ü •7ï¿±»báÑª.kõ&éo€’G^Ê1Ÿ;›â†îä[8@S¼¬‰j­ÄSËÛ**İEÔÍÄSì@'…0¨Nr+&qª&uÆU\"ZTe]şb[Í„KnJ³:Q›™*!Ğı,Q\000Dd¼°¶ó‚CÉ‘Ó%}î§C§ŞÔ#=Î!“Æ@Î©ä™‚’DJ‘Šğ®!¦4²H ÃÚb\n%Ä(‰ËC…_„àÀ,öÔ˜B.hDi½òŞ|Uc°%Ä1/60SŸ¡¬ğÆ”N¸ãšî®Õ;#‚àK#éU…pè£ËûÎW¢9GCõÁã‹Íd˜²ù\"ÒÑTËì² #¦W˜`.ËÊ6ÄRBÂdãÂ“ì®08Ø€ ¥*™¡…¶ÙVWÎ`bR’+˜¦†ZÖY¤mï…ÉÈJĞì‡Ù8Ã¤4Dsqfüà›ÔtY„¶%râ=ÊtnRa)I‹	õ“yFšFAñ-|‰†W8D©HÓ•§XÔ	c	ÓqÏÇ<É3ÖO³¥¨<rğEÊJãˆÏ•ıô*´¢‚1[fZO´óDıFˆ† @)æÈiå×*H™Dªk%)#£ôAd£\$Ùİ(#8óReÎgÀ•¼8.„¸‘úÊÈóa„â98¶‹\000ÂgVLô:0…ÛéÈÒ§U†¹\$)LMÈ&—ç FTö«ââ°ĞD‚`o!4†àÏZ+Rx\r¡¼9P@t*lğÄtTÛ’T4\$¸‰LßhSI\nø¢©áa„ûªóùq!2Šä]ZQ4iÍ\000R\$[h¼N‚Á\"JÎ4}YŒ”}UÇÉ\$Ø€";break;case"uk":$i="ĞI4‚É ¿h-`­ì&ÑKÁMì9xĞ_4ÍÜ\n¾‚-Ú\\‘zÑAHãP)D@ÑBJ—1ÁtM9*]4P1è¼‘vÑFC#E¤bÑAÎ¥«†„^˜¹— (Ò%äA¢€—Ìd“9ú@%9´3V‚’e‚CV²ô´êIJY!ê½7' ¯¢w6ŠG-]Q ÔøœV=—Êd‹ä±\r@šˆ&Ø)M<ĞXİV¸šFĞZP ‘ÜÜï°A0m\rÒ¤¸¥Jc+,úæ[k£QmRM¢ˆ–T¡WŠùÎÉf­Ú*Ó¹=ÂÈ¢B zÈÅ×`”gàÙ´<BSË'zHšRÿŠ¶KïÚXš‚UEÀ®<°^ôÏ[ôKdÖ·XTm`‰’hr2‹¿d®«è™Bƒ¼N£äh=ÈRŠ’'-’®‰“N«^Ø»Kù‰“ëú¤Œ§äb&Q¿ƒl”Áñ\nH^æ‰–³qb^¿nÂÚG0¬¢¥N’tË6)R“‘ñºZ×;ÈkN£\"Æ+i@(Êi”i+ÊLÄµÎühÖ\"i;ò¡pHÍAŒ@ê‘ùt‰³\$@ ­CNÌìí³†ƒ.Æ@‰[†‡Á&)\"h\n˜ÌªQª¡hÚ0#eïˆ™.•j2:Ù¨Óš\"¤Œó#0›I¢{–ÆÒP{=;TkMd¶¼r2‡,A8£\"èí\$ÀJÄÏ×*HĞ×•¢„XœR¢ÀlmY6]p¡ÙÓ½¢ÒZjü»k6“\r°¦ÛHy²\$Lİ\"hğ I‡FK}_0YB‰¨¥ ]vp·@»F£Ñ]aG3Ò–¢HÈ€6ƒ”øıªH69ÂOªÜ†Çâ¦)ÌMJ‡¡rŠÙê³€Ÿ­°1¬ÃJj—‘(Kz’ë%ÕOIõÀÕ¶Ùš]zFïov\$ªÄº	t#Ò:!)©œôŒ¤H4I–\"’¥-²MèœI«ê<Ò)DcSˆÎÍoZ-Í;Rí>·³»–Zk¯§ªªöÖ†ØDÈÃ(÷›W¡ä¶(“ko¡\nÜ©Z,‘·»~àì‘1¡0Õªp[„€(«¯<à6Ü\000S½ç©u;-~t¤‘Ûú”GîmŞ¿NÈBÔ²Sé5dÙhˆR:¦>1RŒ–1‹Ì^u\"x¦*O0š„Ø¹q¡OĞ©<ãš´J7²hûh#p\$LÌÃ·ê¶m«ÄITïX£±!ÈT3ŠA¹'&%0YµÕ\"4Lymï1 &¸·İÑ«|KiÁBH„1®èª\$ÖXF ò:å‚,ÓhvQƒ ²!Š4 j<êÁÆ„#ÓÑ9L\"Ê\nÆ8C j,SÉz#¨’Kœ¨¿uÍ|…‘³`ä7‡\$”¡\$ˆ—¢ÌO nV¦5Tœ9‚)0¦A²Y–ô#HU0–¥Ê°Œ*'Ku[Ç&×4wK±æ(ø³£:°jH8*àâd<Ë¤¾¹SÍ¢foêèX\$w!:fgº9Âh®ÒÉ™T\"øš¥ˆÔ-(gx‹—Æl¢ä4K…ED–c”´X(\\¸;.åyğ;ÎºLÃ-SìÅWÒ±.Â2FŞ™hŠ=‰Eˆbcœ(ò,¾(¶ #si¤!g«âN9F1\000‘Øu\rsN˜¦ÔÛ¿ÂèNÊbäkI\$h»“1)d\\§ŒbŸF™@¶Ä{RIhE¤ó«'r2J	JdªYÂbğ T~^Ì¨†‚`o!4†àÏJ)RR\r¡¼9P@t\$M7zB…ºÌ(Ğ”!ˆF[É*¦°·KjŠ4(dĞIˆ+R&*”;:oŠQVTüç	Fb‰\nÀc¨Ò¤µ2“Ï\000É™K à";break;case"sr":$i="ĞJ4‚í ¸4P-Ak	@ÁÚ6Š\r¢€h/`ãğSAC4SPè\"ÒC\r_C!ÍÔ’3h¦\$‘XSA+ƒ/…ÑÔì†d²‡4Sp)+A|Ğ[´(”Ì®5¥N&x•>Š°•Ja«YdÎeœÈS¸*®Kj¨|ÚÏ”L`öEü^H—¯£²˜Ââ'U»®ã©ZŞ\rX45%„ìYDabK¨ìù0¸Aã©Ê4‚ü¼‚KrëˆT«I[„×ÚlJö	GZA)ú\\EGjXlÅÆ·]¨P´(\$ŞS™”Ì—LµÛIi*’ØFšİG .0wnLwyŠ´4x\"Êí\\^C£ª)ZëiƒÀV#«ÓA9çh- QÔœ®ô¸dœ¹ê†ç­éFóš\$’\$ +;*³¯©«¢hºj2Ï½F‚†£©+ò4µ#¤ü™10ƒÖ»+	’¬›Dë¼Th'®ÂˆÚFNJ·¤\náh‘Fë„X—À¡(È‚1qjÈÒB|•dÅIéClµˆêØ¨\\røb²DÈÄ!–oÜ¨¿'(\$Ò“±Û.áÁÑkù!Âä4ÔH%†ŒôÒEêd¤±,[†¾£¤ª\n8«9(#¤óV\$(Šr¥AO‚†º1+œDÑ OÑÉ\nšíI®º.ğ·	ÅUQíBä¶¸ÉªŞ At¥F¯•b\\®u}kX¦hY^VË1k]U5©_*…G-\rJ]ZÒË2t&¬Ih	@t&‰¡Ğ¦)C È\r£h\\-7ˆò.¬””Jæ…»ĞÎuxÕ¬Élâ6ƒ’:ĞêJ+ƒò Àá\000†)ŠB3BÎ–•|Ë Ñò`Ô:ëÊ¢_!\$\$(ñ\"«\$ˆ¦î#¶#l²3Œ½p¶¿ìê(‹@í5ÿÙì‹İc¯já¢4²N¦‹#£\":BaZËlß¥µ¸XâÆ1N?bÚìëé‘¬‰î»¿N†¶¤Õ\n—¬Œ\"¸Ã`\r‚ÌÛÍIî•5­{WŸ®ÏÓZ˜¡\000 \$\n\n.í\\o^¦—m­£Â›µ³#ğá3Êê(	â˜©Ÿîée_šÅ–®¨SJÂFÓì<\\ –Clõşá(Rª\\óLØèÚbê9zhäËöwÒÏû ˜w/r¿8MÈæ²=z€ÜV}Š’XÀhÆàş“ªúÔÓ†‘«Š¡ï-KÁºôò‚É}À	{´hnJBÜí¹ï L_ÚÄù\r›%*÷©LÈ4 ¾H† -€§…\000£¢Dë\000mHu}½„*dUBGG\ryêõşšIJ|ªå]Â2¢Àˆ„åõ—LÌ\$<UÂˆ\nÖÙ\000rnÈ®bü. 1Á?™İ—¡ñwâ¤Ø–ø \\m\$efB'ğa”Yağ¬ÆÂØ¾š4&ŒQlú6R\\zJ;;*ï…B”rhz† ¤T—â“•Gr´LFÖ¤]Ò<~g5\n™’ÂŠD2h±D§I\$l[]Á+‰…¼Ó>tFÙ[e’4‹¤Ôf“D\nU1èĞ‚Ã_kÆ\$^K¨ë%™âZÄ¤D:“ñş~æğ‹´ CôCˆÎ”L(\"ğÛÅº™š\nzÉöĞy	¬%PÂ0›Xô­İIë_†0Š	W+Æ‚‹çUå“`";break;case"zh":$i="ä^¨ês•\\šr¤îõâ|ä\\#]5ìAä^(Éd;‘v¶q @§2q\000åRB¨B¹pçM!#qØü¡NåX#â¡\000”æB’G#Ëh‚5Ê­L9SŠ‰Î©]œ¨äû•N‹’,”2TK¡CL‘…€§B½ZèT !ëÕû(¨²+Öğm½Ğ¿L¹I·2%RåX¥b\nÙ‚ €ˆ*¡‰©õ6ƒ4[9Vë*=&—·*È…»b»r§«dªÂ—’%Ô²Tû™.¶t¥Ö•%j]Î¬SDPõÒ2î›r¢À§:õ\"ç]§*Hu*åM¯œ«ÕI—¯\\ëÄ³¡|‘r¦{VüÚŞ©+ĞÎuˆ™Ğ/R°õúuÌŒ@¹ş?œoL]—GIB\\¤„áW PJ2\r9ĞE\$cÈÊ9CpŞˆ\\pØj’áÎZ:¨ñvs‰ÑzF¸¥rHGG)tGGI2H ÄÒ¤E”tIÌE•.!(Z¨äÒAÊHN”§AU!åÁvt”DÂHGÆ\$)K“,2>©äŒ€÷Api`@ÉrjjÉœ³,ÎÌÍ2–	@t&‰¡Ğ¦)BØóA\"è\\6¡pÈ2\$…™Pt’‹T!H!`s±pØ:P*ŒE/\nà×#D©b˜¤#ñHs‘\$bštäkı8ÌÄX¯œ¤i*ÇÔu @3qÁO±ÈÁ4²“§)~BÀEÙĞQhI^ÌÙ%å–WÙ¬šîCµˆc|¹V•±,X?O~°Ô!råm0WX\nÒ¸¾¯ì\n²­“’(W¾ïÊb\n@ _GÚëzD'ÈaÇ%RlÂà‚x¦*a\r-æ¦ŞzpHÒ×›6î)ÊQÇ)P'£˜@t±az‚’(©vRb“PFÅ\$\\œäİè°²E‘ÌM–ö‡¢èé’sK‡,½§èÌjÂí»®ıö®+Õ’Âr>¬«éf©)r[9;Â;ñ#³²»QmªK¥* E°ìK­ %\$1:Â\nG’îL^–')&FâŠYÊ@ˆ´âF^Û<]ì…qÌJ(1ÇM;’r•åæ¬RÙ(Š&^ÒrR²Ê*û‰¸ëÑ²ªD)ft\$¦È­%zÖº•æät’eñÌG5r‡;Ï—=§&^1ĞAÒNº©*NHÜA°B`Ş0ŒƒHÜ3ü¿<6ãÊƒè0¤„M‰~¹™Ì'SVc¤McÒê„9Qu©/\"–vLæD(ŒQ2U2Y³aRÎİ®\n£Ä¨";break;case"zh-tw":$i="ä^¨ê%Ó•\\šr¥ÑÎõâ|çB(\\Ë4«‘pŠr –neRQÌ¡D8Ğ S•\nt*.tÒ9E‘N”ÊAÊ¤S¹V÷:	t%9Røú\",r«STâ¢©‚ ’Tr}Ê§EĞÖI'2qèY¡ÜÉdË¡B¨‘I€§B©=)@ ÷:RœèU¢îwUDYåD%äËh²¶,€r b)àèe7Í&óp‚i¡Çh®UºÊ“K¦æ/wgB\néP§œ©êË™*¸¤¥èiu-u>æL )dœ•Z—s«Ñe•ÉtŒt 3È…´=l²t-ÕòUÊú\000•’àlÔç:İPè^+Ü©šs•p³t&aÎUzSs¦Wre-\r`¸r.P¿šê±–)v]%\n¡“ŒA|F0ğ)£ @1,xP9… Pò2`PÜ7A bœH¨d8+'!v]œÄ!€§9zW(dq\$r—Dxš&È:JE¢¥é9%ÁÌIñù6ù•¤ÒA–±sšrÄ1ĞC•K‘p]µb†GÇoô~L’²L—LÎOŒÚ@,´\$2œª]–ÌÁÎG—Êbœ\$	Ğš&‡B˜¦cÍ<‹¡pÚ6…Ã É5¾d9u\$IRbÀ±,€PØ:K‘x]+ªCÈ‡¢-q–\000†)ŠB0@:\rã[ ´¯YÒC‘°å7;g),WOÏ‘ËMÄBlEìÀ§2L @r—í9@DVr’¤úùiZŒ›+8\$	Û!„e{_Ø\$±`ş>“õZJÕéiÌC'AZD³2¶®‘!–Z\$Ä)ÌT'9jB+Jâ½n¹ÌJç1ZV€(`øN†áèa !˜F\nx¦*úÆL¦åRnS­'1pM§WêÃ™Ù¤³JBœ¥TE°æV	IZƒ!\n“0t%”\nı“etánÛäATš‰+:se¤«œúË18cS)K´k,¾Vî»ï#‚,ÄfÖB3ÊRä_“¬ú,SåÉxs¸û£Àéœ»ç\\Ûkè¿0ìJ²ÀkäÎÃòÛ†´G°DD^–'I>_³I6LÉdT]·¹[ÉÈ_•Ø¹rÌB;Ìà×®çV¢—M:Cê†~²;h{½ÅÌêA\r.\$¹8t.›FTqO’QáÄ„°Cv}©)ÛåptA…Áów%Ä&\rãÈ4Ã8ø~A\000Ú7C(@t%Dˆ÷G0Hã R<AF/I(Œ<Jj\$Ì ™‘dG‚¬s\"¤X[9e,å±÷ápò›¬	LT\000";break;case"ja":$i="åW'İ\nc—ƒ/ É˜2-Ş¼O‚œh4«¡‹)\"j¸²J,¢‰ âp„¶&¼‰¢`Êx26MÅ’`§2q\000åRK\"‘hÂ\n4ƒ –±˜²è@%9¢S¸½W¹U©‡*qQ„ aHŠ\nfçT®NT*–†“ÄÒÑ¸4‚‹\"¥õÉ“\000‚N…BĞªOœ‹Õû(¨‰ PdÔZÜ‹ƒ+œÈµ•xµs*`H5ìw¿ƒ(àÊh2> ƒEqTs.+MŸ[(Ç2^@UÔª•jÅÍ3KÒ å%´\000šs¯•.Tò.h•XT’óDº•Ì™¼9’È~“•Ó‰¤)×\$ª—.AÈhˆš¾Ò‚¨óbH%ÄYUŒzâj®g;ö‹(™ùªä‹4D~à=å±ÊHªY#\000=«ID©i1X)ÅšhX9läL[p‰ÃPãbAÃÇI@BœäÙ\\È°dáÌD	¢lr—ËtfA±®,\\A(È<*t<Œ­hÜ7A bœ¨¦…!8s–…]—g1G¾lì„õ¬dAm.‹JÆ QÒ@—1À¿±V±–åqÊC—G!t±(\$œÄa~²©¡n]œ…Ù0‰µéê=\$rå‹#Ï3:‚IS4İ:Ş«UB\"s‘åòª«,“ªë».ÀtïÁÑÎS’@P¶<ØÈº\r£h\\2Ê-\$ƒ¢p<…C`è9>jÏœ…Ás­Ub˜¤#@O{İ.ÄÊCµ-8Œ íJÓµ(4ÛYhú-g¾eÚB‹èštY£©©r‘POz-!Ó-AÕ_dôà˜2'„V)©>t“\$ƒ½H*ï~Cpê±–•F%ŠbØÃo\\î’ß±\\<É²¬»2Í³­š¸K•Rº+ÀP \$\n€Ë3ÑĞÎ!äB‡¥Z65¿DAjË^·bQ2¶®¦b€)Š–‹ŞĞ6iÂX@¥Ä\n@‘ÍõÛ¹Zm„¢EÒ:r–£UŠ!„ @‘m`@¾®?œ¥·¾!™ß½õ9EñŒfAG)EdˆÖ ­«(Œ]FXI6Z;PçWUH£Ÿ_Ña4UTuˆ5V[•I6C/h\"Û£®+ØÁäëuèzJe15ê7HytåîP,}?SOÉ!ÍÙö¾p‰RØø?øçéÍœş'äHÜŸ”épƒ¨Xö;v DH™hLå¬§ºDæS¹+s--ç¿—ŠñÓ™^\"ä‘,(”áx~¬!ú:H,şÈY?É\000÷¤Bj 8µ/ôˆÀxa¤7xoR8m\ráÈ2‚\000ÈC a,bTC 9„ğœ>k¬“&t<EŠ¼%@0\n2~Â\"âgZ¹°”´—\r»…p(”8á¨æ:%½°áM	Ş8";break;case"ta":$i="àW* øiÀ¯FÁ\\Hd_†«•Ğô+ÁQh:.\000ªƒÂUÒz A\000‰«Ğğ”V®XÈ`„¢B NÃy„È)“« Êô4:d®‡Ã(2õ|²j®ZÀå”yl”]W%c±ú<]W*fğ,IR¬ÓÕTôı5²@túŠ½ œÈUxâ¾=#®Áîğ	}VEUD_*z,Ã6’Î¦ÓĞò)¬YhTü6fm„gî”õM„©èUØŠ¸²±)E@:Â&?O¦ß£•úÂ“qtÁPhxİÌŠÏv ¤ £_åÚ9öFó’<¦ã™¤Şn @6Ò=Ån³h­j¢ğÎv>%!ÅzoòI“®ñ¬è÷?b»@±K[ú¤¢+\\Š•Ïâ\"æ!\n	j§½\$B,§¿HB°G \r+Õ\n\$-ê\\³ j	\\§¦-TJ@²j‚%NZ”‘ªÂŞş–zn\nc ä4Ã;0®\$¨R§¹â1­Dº¶%t‘=1‹œ¶:N ¤3‘¸2ãhË2êÄˆÉLúÑ52“üƒÉ¯LPÀ5JôıIĞëo©ğ4ç\"Fâ¨æ2QúÒş“îì‚­ÓdÒ¬E“{f’Ñ‹DjşÅ4‰@ğš•#½Ô|%,?«¬ßLOrÏ+ÀŠÇMï¤ï26”Õa ¨Q\r^¾Ê´,ŒŠ\nIOÉ@My_4Ó3TĞMïZ#\nÆ#ÈÊ9CpŞ¨^v¸cE¥u‘ Ê­S*BĞêÔs³ıK¿±…‰+È¥ú±Æ•ÓêÁFLb,ÂÑ»'½®E¢(×ëß+º©†ş“Ëuù53WD{Ğë£ƒ\$’mX¹]O²û7¸î5ğÔĞÕ?WNL9ƒb/vPûVm„(øZ#†µQš\"Ã(9n+—­R¥§¿áu…^æn¦j§ç	u4ÖXä¸âÙúºµjô\"B¿¹³—åôQ]GäÀ\$Bhš\nb˜2xÚ6…âØó»\"íç}A3<>Ç.Íì Ñ¿¬B‚ã¥øV¸%Í\r‘Õæ§–Š}ÄõD1Å\000;PÀ†)ŠB2‚Ğ/ò£ªÅXÃ*w.‹_J’½èˆä7óN÷•ä3­½×v©‰N­\rt¡RêÆÄ©c+ÙQuÚŠ`½OÆÎ‹r—ù~·¡sJşJfÁ1N\000[Ï+\\Æ·×­Bæ•Êd!qëŠØ¸qi|4‘YOÃ¾|šïÌ¹A-\\®Í*‡¶¹ú-	•o4GÀˆˆ;ºd®ñŠ»â§V* \"*‰ı#\$ù—+6I]1¼â\"åÕÉıY…-¨³Lñ”‘Ò8  2“¶Ù!Êu…öÂ×‚€H\nô.È6û™ÑvG¹æ·Ô\nÌ<0¥RšóĞıÒ§,4‰Â0xS\nÁª£!ı‰°>÷Õ£¦Pq\n¾c4ë\r\\9])µ§d®™92  1ğÌC8uA„:àÜ iA”1È×9\"ê{ÄÁáÁÓÄÅÕi[ÊÚ»•péÚZhgõ¢›Y@ÄÕ¼£+ëŠŸù``cğ?²¥Y¿ˆô€%rujÏÊ?@PNĞm‡…\rÄ®9tDeâÆ—Ò±ğ-ÄÚÈÊ„,\rÛÅ3TkÊİ‹«É’ùÆ¿”²›—€šF§Øqæ¼ÃxSR7&±^“Zâ“®á5LÆ“:3ñzEy¥51\\fŸÌö.ĞÓKE’©Š9ÿR2˜ó¹‡ÌÄ¯x2Ä¶Ë6g&Š<í\"(U)õ+Z+GUTjhË(¶ÊŞ”™)´*MDSÉ1T’†BIEA]½2p)ĞıA‰L?ğ²a<DŞ‰]¹CŸ2g°ˆŠ@D\ráÔ1ÀÊl\r!Œ5‚’¯F#bñ`st™¾ú,¨àt³˜æP7‡ é2ÛáÅ_rí¬ËÓE=*¨,´MÇO\nÙ%\"”ôV¸MJäk¥v¯:½A©o	eÇHTèÏY™§Í\$7.İÄ1t–û\$J¤È&ú:õ’±`\"k1ò°ö´Î¬V.=¶m0lS‹eP©… Ê\$dj—Òu×:©ä,\r…šOZ…&é,pí‰7YwØı ÍÔ¨¬ò 3Í,\\kw§Á1VèSH×TM4\n|ƒÊÑ6«]‚›(ÒÂÁ˜š³\000PL'²Eàmu«á’F¬Å[!Så6/]İkê²ŒŒ¬íÌ„2xƒ*‚ôÎ8XÚ{9!ìœÕ¼”Wd…u®î\n58L9=hC[ÆÎíZaKdù­-™6vO›C“¿‰^ÃG6¤Äv³Û	Şº\r<ø";break;case"bn":$i="àS)\nt]\000_ˆ 	XD)L¨„@Ğ4l5€ÁP\\}\000CÀPä4U\"¢à\nt1L°C—h¤[\000VC—1iª™7CÃ¢\nhú•ISLåóÕdz\000§Œ%aÈXB	4SÊ”ÊhÂ’¢H\$S*ršB¦N§2º‘`Ù¥\n{:Â[)ªÔà5<V]¦P¨*5!-eYB){ì`¦†)Ğp\n<.ñ‡'ğjjj™cªÙd8Qe\"oaS-ãÔŠn5L¯œ@'z……##ZTC‘ùe6j‰ºËk©Y«¦…MÌZáÚÛöÃ9²²İ·“\nËƒÑh)zøó7?âõîJdL9ÑÍô·½•2ª‘JA@0úîrú‘ÚFÜz™²È;¸Szzâ/Ì{>ÿ5b†¸ÁJB¬³·Äš\000ç;ÏË\\J©;è²ÀP[ğ_¾ìB¢Õ¯jÂü“µ\nã ¤,ï*Ğô8©{ÔÌZÊ¥BÅ;}'¥\nÄ”ÄºÄ‡ÀÍqJ§GÈ\000‡H’3ÆTBL¢‚³\r‹<€5Rkú¾/È¤\"q©n‡E‹‹ğû£#–öàLÛ7µ¤S\000 o‰L\\CÈÊ9CpŞ°\\”8bÃ2òÁ8¤6¢îêË*J{%µœÔ<ôÊS\$	¢ˆÛ'°T.îÅz0ê/Ìêâ‹É\000EÖJÑ«:ÎY)\\jÈğl¶Ô dı7=R*Õ;*NöD®àÌ,RL²”)&Nr:×a\000P€HÊ¹M\"áLÑj,ª±Tğ#¾Á¨Ó”İm3ví¿\"Ù÷sZmE«O+7dïF¯FÊ”ÍÙLÃÉ@	¢ht)Š`Pè\r¡p¶5cƒP»!ÜJò 4¬SWÎloÕ’Õ^¼ºtøØ:TÜ€×4ğ‚ª9å9§„¦)ÌË/`4*2¾Ç'¥rI—1×=ık:ØD£‘ ‘?\000[q[B×7.„›‚ŞBø³¹\r-<)rVaµ²0J1.îÙ}§¿³+šË<[:%t½(u¶³Ã)L‡L«<Îè`wzèov¢”_êêKƒÄ›ÜIú¸Ç–,h¿:­IJmXVã;¸‹:†ä.;TtíÀ@(	†¹¦mÖ¼€uIë†ÍõëÈPµßn©/n÷j?FëF\\IÌµÒÀ¸)Šˆw°¸Çú¯¼²ÇğõÕØ–0òéJõ”eËPçº¨k)fûFŞ¡å‰ê¸E²o2Dÿ—â gŸiYXH-.›ã:˜±pKåƒ4´j‘j{tMğ°ƒ;_'©ˆ@·„XéQ«[f&ı±:Ò\000Á2Z„	zÂ5òR–Úz/™S©E–ûadle7ÔTçà!Æ>ÇÛ't\"Q„lÄ=÷Ğj…0£Xí0ÈØ°(àJëx	hÿ§v»\nÜJ!ÊÀ¸®EÚÁ\nÎ ]fÅÈ®ÛÄ›R1æu–—ñN“ã©Ü‡ÅT¤-´±NÄSëdõÅûàr)5Ğ‘sšãÎa‘”]‘”jÛĞ±81Åå´!²•%Æ=1JF+_ısÑt×Fã!]4Œ7Ä&'EÂ½áÂy6O\$³ #V£ì*‹­ÚMÂâ|ÙW“F‘Å*'ËøÍ0“ÜÄTSŞé•*ÉŒ-qÏM’™¸>vŸäİj™X6©Á¥#<èMÆyJ\\QrtíÉ¶¹,ç©=E‘õF2ÍÔÌz#¢IµòêC–Y=îì×&˜’ª¢¶\$ô©>Mš—ˆÆ5ˆk—üKmqôÎ¸”¸¶›kš³F^Êj)€PL\rá„2ÜéÍ;MÁ´7‡ Ê a†€ÑY±cØ_F °+Å \\ÍÁHx'	i©I’Œ&Ù—«ó•Îuô¤’<Ñ„¤LêÍU©”¾SdºYÌœ‹cS1+ ";break;case"ar":$i="ÙC¶P‚Â²†l*„\r”,&\nÙA¶í„ø*‚.›(¦ÂÆ§EĞ±Äu²l.còN.6­…d2W.–ÉæğôajÙDÂà(\000”æB˜6\$‰\n3Âäh‰£f¨¯˜IéQÖÂêcK‚Ï¤(¨²•UU¦‘(\"²%J«@¦Êü†Ìºl*n³†ÂÎ¹‹¡\"Ò44.P¶ àŠ[íÿ‹™D¨µ,2SÛó*¡ÕçI¥àgQz¤Ö¯YCZ¥WåùTØWd³§5½Ã³+‚ºDÖ\\gª©ŠÎ[ã`›\n¸=mMP½6…DBó€Â\"wëÓejÌóö|lÍc½åµÒœY,¼ÍòÛÊ¢Æc¯¿MQP)ÜM\\¸¹OÂªı k{şD?»Ä˜°Aj¨­ez W·)úP™•)ÚüÌº©êôŒˆ!P¸# ò2`PÜ7A j„œ`¦1fU¢Ä\n6•‘J“¬Ïº¸´£…Bb™ÂŒ‹xˆº,cc\"+o³Xê\$Èá^Ê1(sèƒ£lôªfÃª)‹*„:lÉC/%ÉC6©\$ÑÔ<¤±<6>é±±:±ªZ‹«“ºÌT´9E/‰@t&‰¡Ğ¦)CPÔ£h^-Œ4ÈÂ.ÈOÊ7¬\r‹èšAŠálº¨ä€­¸ƒè67-‹3	6b¦)Á\000¨7c(Ü‚VFÁnlÁt|Â«LB\\Å,%ÊÙ=Ğ-c(Æ­(kv¼«(kV°9+‚BA‹ ´+L…¡Å¼¦«46„ÎjÒC¡7cîeÃLLJÚÙÒºO\\ò›ı\000+)Ahş\$ñŞÔ>—Š×³z4#Í\"ª«ÌÌ¶0­ã(Pà4’‰°E¾§ã‘óJµ\"w,À%ÙuX\nx¦*!hR®C0Š•c;ÓÔF´»ér8Z ‰šjBåOfrËMèz‰¤ê’¡d¨Vo’ıåê3\r‡?õR¹¬ÏÂ€()6®¢l	Ô§§Èîã=5ø\r?¬ÄXïzë‰¼ìÉXğ[Ô…¿@‹*Î„­Kt¯y9É¢’V«EÄÌ™s­û~­§ü¾²\\Šª”öæÍ&ÁBµí\nÈõ&U*'p.k3Áê»õ¡*Óú’ƒ5)î;äísdÉ4¼pÉìl´3Ó¶Ğ”€hıÕ°6«õ†<–¢Ôóæ¾\"‰[).74)F÷°¶„Ÿ°~?-\000qıLğåA™kí9p–b@OLÛŸ=f\000–“·•¸ Eıÿ@DBË3¨{L1z7Q|ûd[Å¢ø\rP<è}@>„z`o!4†àÎ¡Œ3´7‡ Ê a„‹„ [¹\$´ëœÒü+’{G¡hèTÉ©‘m¥7,\\¡1q…)ÂçÆÿ`Û¦Yd";break;case"fa":$i="ÙB¶ğÂ™²†6Pí…›aTÛF6í„ø)²‚l)âM…ˆ°¨…G•˜ãj&°’,[(¨J3+l¡!(i\\25W‚„S™\n<­©Û(6Â®9¡!¨-…”…³.¡\"¦1j„ÂdÙD6•ˆ”Î–±‰›\néz!b-f6zÔJ±kFBk5ºÊ¾½X'\"Ê?/CZ&Êª|‘_\n‹! XU8‚ ÚTÄ)ÈJúo¥aáj|•2!GFixuH¨™Á#JlıÚy|ÆD&0”-ré]’CUVˆ=r4¹d%7õ	sKœéo9õuÊ=M€ÒlV¤İ	ÍØ°÷ZÄBÙÕTd1­\$Mgã³DwP¨ÌYŸ°g\"+I4r-J¡!a4KÏV‹iŠ\000›:@¬¸ªâTºKDÏ°ÒÚWµ«Ô—°!DÓ8¡(È‘#0€D’#(æ\rÃx!hHÆAªÄV0jÒ°‹!e‹…è²°Hû‚T´,;‚(Ú%,EÌô¤Û\000Ò¬ˆÑP‹2ÍÓFB8R,ƒ±åJ¨Ğ½lËÆÚ«%²¸\\»M	Y.6JÌ¼öH.¡€TI‘ˆd™OK*<ê•ñ?@PT\rşÏm™±D-hD àP\$Bhš\nb˜-5(ò.…£hÚŒƒ\"Ä²AjÓx¥H²ÌŒä1è6,Hmc¿#\"¤hër‡Èôœ‘¯0\"\\²T³Z\nƒxÖ2Á\000†)ŠB2Åf6‹y‹¦¥R=[,e·K	²Ë:¬%Ûf7©bHY+Î¬¼¿ª,V–À´3ê½]ÊUô‡2©}Ú¤¡8[\nÂ!kŠbÅªR¹f#Šr²ş®Ôšßv¹-ûKŒXÏ:”­¥#ó€ØµŞËÓÊ½•Øn\"u—¼ùŠ»w³¥9´„g‹Š7c<Í*ÀY¦lü¼'J=\"¸ëÂÂl(\nÜ%©3L²ßî\"˜“2mÕ“ªGZ»§?ai‹éÃœš±°1©#­{BÆèlª`¢,	Õ{(Irı~íkvÛĞt €'æÁ`§İnLˆÂ1c|M;JnÜšo³]<‹ÜøPz#Œ“l®.Ï+†ä¥sàÄqËfë«šñ÷z\"ø³å¢ÅØöîv†­DŠØ qäıEóÜª	\"£J5DQH÷£Æzi'­Ñc=õÃ¹¥8²³’Hëƒ!ôÖ›•í4ŠåÒDÛ]¤ˆ§3ú[¨íô’ä^É6„uÿ§DEÌ1 \$]+«SNG‘ÁÛ6iõä*w]û¥xF¦©ƒÒtÍ9‹we{“ÒAß\\nïË(ç_©H6M\000Ú¾BòØI¹PpÏ±\n„.Õ¢Vı:c\000_Ùö	¼0†@Òƒ8\n‰q4ĞŞƒ( „:xï\nóÔ3éÌ‡!V|ºC„‘9ÀRºp‹Ò™-±¨ºÖ°šÆ‚%½>¡8øéàxtpÂÒ².@";break;}$ke=array();foreach(explode("\n",lzw_decompress($i))as$X)$ke[]=(strpos($X,"\t")?explode("\t",$X):$X);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$c;$jd=array_search("",$c->operators);if($jd!==false)unset($c->operators[$jd]);}function
dsn($gb,$V,$G,$xb='auth_error'){set_exception_handler($xb);parent::__construct($gb,$V,$G);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($I,$qe=false){$J=parent::query($I);$this->error="";if(!$J){$tb=$this->errorInfo();$this->error=$tb[2];return
false;}$this->store_result($J);return$J;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result($J=null){if(!$J)$J=$this->_result;if($J->columnCount()){$J->num_rows=$J->rowCount();return$J;}$this->affected_rows=$J->rowCount();return
true;}function
next_result(){$this->_result->_offset=0;return@$this->_result->nextRowset();}function
result($I,$p=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch();return$L[$p];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$L=(object)$this->getColumnMeta($this->_offset++);$L->orgtable=$L->table;$L->orgname=$L->name;$L->charsetnr=(in_array("blob",(array)$L->flags)?63:0);return$L;}}}$eb=array();$eb["sqlite"]="SQLite 3";$eb["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$kd=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Eb){$this->_link=new
SQLite3($Eb);$Be=$this->_link->version();$this->server_info=$Be["versionString"];}function
query($I){$J=@$this->_link->query($I);$this->error="";if(!$J){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($J->numColumns())return
new
Min_Result($J);$this->affected_rows=$this->_link->changes();return
true;}function
quote($Q){return(is_utf8($Q)?"'".$this->_link->escapeString($Q)."'":"x'".reset(unpack('H*',$Q))."'");}function
store_result(){return$this->_result;}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetchArray();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$g=$this->_offset++;$U=$this->_result->columnType($g);return(object)array("name"=>$this->_result->columnName($g),"type"=>$U,"charsetnr"=>($U==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($Eb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($Eb);}function
query($I,$qe=false){$Jc=($qe?"unbufferedQuery":"query");$J=@$this->_link->$Jc($I,SQLITE_BOTH,$o);$this->error="";if(!$J){$this->error=$o;return
false;}elseif($J===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($J);}function
quote($Q){return"'".sqlite_escape_string($Q)."'";}function
store_result(){return$this->_result;}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->_result->fetch();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;if(method_exists($J,'numRows'))$this->num_rows=$J->numRows();}function
fetch_assoc(){$L=$this->_result->fetch(SQLITE_ASSOC);if(!$L)return
false;$K=array();foreach($L
as$y=>$X)$K[($y[0]=='"'?idf_unescape($y):$y)]=$X;return$K;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$C=$this->_result->fieldName($this->_offset++);$H='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($H\\.)?$H\$~",$C,$A)){$R=($A[3]!=""?$A[3]:idf_unescape($A[2]));$C=($A[5]!=""?$A[5]:idf_unescape($A[4]));}return(object)array("name"=>$C,"orgname"=>$C,"orgtable"=>$R,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($Eb){$this->dsn(DRIVER.":$Eb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($Eb){if(is_readable($Eb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$Eb)?$Eb:dirname($_SERVER["SCRIPT_FILENAME"])."/$Eb")." AS a")){$this->Min_SQLite($Eb);return
true;}return
false;}function
multi_query($I){return$this->_result=$this->query($I);}function
next_result(){return
false;}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($I,$Z,$z,$E=0,$Hd=" "){return" $I$Z".($z!==null?$Hd."LIMIT $z".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){global$j;return($j->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($I,$Z,1):" $I$Z");}function
db_collation($n,$Ka){global$j;return$j->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($m){return
array();}function
table_status($C=""){global$j;$K=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($C!=""?" AND name = ".q($C):""))as$L){$L["Oid"]="t";$L["Auto_increment"]="";$L["Rows"]=$j->result("SELECT COUNT(*) FROM ".idf_escape($L["Name"]));$K[$L["Name"]]=$L;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$L)$K[$L["name"]]["Auto_increment"]=$L["seq"];return($C!=""?$K[$C]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){global$j;return!$j->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($R){$K=array();foreach(get_rows("PRAGMA table_info(".table($R).")")as$L){$U=strtolower($L["type"]);$Wa=$L["dflt_value"];$K[$L["name"]]=array("field"=>$L["name"],"type"=>(eregi("int",$U)?"integer":(eregi("char|clob|text",$U)?"text":(eregi("blob",$U)?"blob":(eregi("real|floa|doub",$U)?"real":"numeric")))),"full_type"=>$U,"default"=>(ereg("'(.*)'",$Wa,$A)?str_replace("''","'",$A[1]):($Wa=="NULL"?null:$Wa)),"null"=>!$L["notnull"],"auto_increment"=>eregi('^integer$',$U)&&$L["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$L["pk"],);}return$K;}function
indexes($R,$k=null){$K=array();$ld=array();foreach(fields($R)as$p){if($p["primary"])$ld[]=$p["field"];}if($ld)$K[""]=array("type"=>"PRIMARY","columns"=>$ld,"lengths"=>array());foreach(get_rows("PRAGMA index_list(".table($R).")")as$L){if(!ereg("^sqlite_",$L["name"])){$K[$L["name"]]["type"]=($L["unique"]?"UNIQUE":"INDEX");$K[$L["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($L["name"]).")")as$Ad)$K[$L["name"]]["columns"][]=$Ad["name"];}}return$K;}function
foreign_keys($R){$K=array();foreach(get_rows("PRAGMA foreign_key_list(".table($R).")")as$L){$r=&$K[$L["id"]];if(!$r)$r=$L;$r["source"][]=$L["from"];$r["target"][]=$L["to"];}return$K;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
check_sqlite_name($C){global$j;$Ab="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ab)\$~",$C)){$j->error=lang(10,str_replace("|",", ",$Ab));return
false;}return
true;}function
create_database($n,$f){global$j;if(file_exists($n)){$j->error=lang(11);return
false;}if(!check_sqlite_name($n))return
false;$_=new
Min_SQLite($n);$_->query('PRAGMA encoding = "UTF-8"');$_->query('CREATE TABLE adminer (i)');$_->query('DROP TABLE adminer');return
true;}function
drop_databases($m){global$j;$j->Min_SQLite(":memory:");foreach($m
as$n){if(!@unlink($n)){$j->error=lang(11);return
false;}}return
true;}function
rename_database($C,$f){global$j;if(!check_sqlite_name($C))return
false;$j->Min_SQLite(":memory:");$j->error=lang(11);return@rename(DB,$C);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($R,$C,$q,$Jb,$Na,$pb,$f,$ta,$gd){$ze=($R==""||$Jb);foreach($q
as$p){if($p[0]!=""||!$p[1]||$p[2]){$ze=true;break;}}$d=array();$bd=array();$md=false;foreach($q
as$p){if($p[1]){if($p[1][6])$md=true;$d[]=($ze?"  ":"ADD ").implode($p[1]);if($p[0]!="")$bd[$p[0]]=$p[1][0];}}if($ze){if($R!=""){queries("BEGIN");foreach(foreign_keys($R)as$r){$h=array();foreach($r["source"]as$g){if(!$bd[$g])continue
2;$h[]=$bd[$g];}$Jb[]="  FOREIGN KEY (".implode(", ",$h).") REFERENCES ".table($r["table"])." (".implode(", ",array_map('idf_escape',$r["target"])).") ON DELETE $r[on_delete] ON UPDATE $r[on_update]";}$x=array();foreach(indexes($R)as$pc=>$w){$h=array();foreach($w["columns"]as$g){if(!$bd[$g])continue
2;$h[]=$bd[$g];}$h="(".implode(", ",$h).")";if($w["type"]!="PRIMARY")$x[]=array($w["type"],$pc,$h);elseif(!$md)$Jb[]="  PRIMARY KEY $h";}}$d=array_merge($d,$Jb);if(!queries("CREATE TABLE ".table($R!=""?"adminer_$C":$C)." (\n".implode(",\n",$d)."\n)"))return
false;if($R!=""){if($bd&&!queries("INSERT INTO ".table("adminer_$C")." (".implode(", ",$bd).") SELECT ".implode(", ",array_map('idf_escape',array_keys($bd)))." FROM ".table($R)))return
false;$ne=array();foreach(triggers($R)as$me=>$ce){$le=trigger($me);$ne[]="CREATE TRIGGER ".idf_escape($me)." ".implode(" ",$ce)." ON ".table($C)."\n$le[Statement]";}if(!queries("DROP TABLE ".table($R)))return
false;queries("ALTER TABLE ".table("adminer_$C")." RENAME TO ".table($C));if(!alter_indexes($C,$x))return
false;foreach($ne
as$le){if(!queries($le))return
false;}queries("COMMIT");}}else{foreach($d
as$X){if(!queries("ALTER TABLE ".table($R)." $X"))return
false;}if($R!=$C&&!queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)))return
false;}if($ta)queries("UPDATE sqlite_sequence SET seq = $ta WHERE name = ".q($C));return
true;}function
alter_indexes($R,$d){foreach($d
as$X){if(!queries($X[2]=="DROP"?"DROP INDEX ".idf_escape($X[1]):"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." $X[2]"))return
false;}return
true;}function
truncate_tables($T){return
apply_queries("DELETE FROM",$T);}function
drop_views($De){return
apply_queries("DROP VIEW",$De);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
move_tables($T,$De,$Yd){return
false;}function
trigger($C){global$j;if($C=="")return
array("Statement"=>"BEGIN\n\t;\nEND");preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$j->result("SELECT sql FROM sqlite_master WHERE name = ".q($C)),$A);return
array("Timing"=>strtoupper($A[1]),"Event"=>strtoupper($A[2]),"Trigger"=>$C,"Statement"=>$A[3]);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R))as$L){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$L["sql"],$A);$K[$L["name"]]=array($A[1],$A[2]);}return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":"DEFAULT VALUES"));}function
insert_update($R,$P,$ld){return
queries("REPLACE INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ROWID()");}function
explain($j,$I){return$j->query("EXPLAIN $I");}function
found_rows($S,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Dd){return
true;}function
create_sql($R,$ta){global$j;return$j->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($R));}function
truncate_sql($R){return"DELETE FROM ".table($R);}function
use_sql($l){}function
trigger_sql($R,$Qd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($R)));}function
show_variables(){global$j;$K=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$y)$K[$y]=$j->result("PRAGMA $y");return$K;}function
show_status(){$K=array();foreach(get_vals("PRAGMA compile_options")as$Wc){list($y,$X)=explode("=",$Wc,2);$K[$y]=$X;}return$K;}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Cb){return
ereg('^(view|trigger|variables|status|dump|move_col|drop_col)$',$Cb);}$nc="sqlite";$pe=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Pd=array_keys($pe);$we=array();$Vc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Sb=array("hex","length","lower","round","unixepoch","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$eb["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$kd=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($O,$V,$G){global$c;$n=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' user='".addcslashes($V,"'\\")."' password='".addcslashes($G,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$n!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Be=pg_version($this->_link);$this->server_info=$Be["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($Q){return"'".pg_escape_string($this->_link,$Q)."'";}function
select_db($l){global$c;if($l==$c->database())return$this->_database;$K=@pg_connect("$this->_string dbname='".addcslashes($l,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($K)$this->_link=$K;return$K;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($I,$qe=false){$J=@pg_query($this->_link,$I);$this->error="";if(!$J){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($J)){$this->affected_rows=pg_affected_rows($J);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
pg_fetch_result($J->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=pg_num_rows($J);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$g=$this->_offset++;$K=new
stdClass;if(function_exists('pg_field_table'))$K->orgtable=pg_field_table($this->_result,$g);$K->name=pg_field_name($this->_result,$g);$K->orgname=$K->name;$K->type=pg_field_type($this->_result,$g);$K->charsetnr=($K->type=="bytea"?63:0);return$K;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($O,$V,$G){global$c;$n=$c->database();$Q="pgsql:host='".str_replace(":","' port='",addcslashes($O,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$Q dbname='".($n!=""?addcslashes($n,"'\\"):"postgres")."'",$V,$G);return
true;}function
select_db($l){global$c;return($c->database()==$l);}function
close(){}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2])){if($j->server_info>=9)$j->query("SET application_name = 'Adminer'");return$j;}return$j->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($I,$Z,$z,$E=0,$Hd=" "){return" $I$Z".($z!==null?$Hd."LIMIT $z".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return" $I$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($m){return
array();}function
table_status($C=""){$K=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN 'table' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\", reltuples as \"Rows\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($C!=""?" AND relname = ".q($C):""))as$L)$K[$L["Name"]]=$L;return($C!=""?$K[$C]:$K);}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($R)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$L){ereg('(.*)(\\((.*)\\))?',$L["full_type"],$A);list(,$L["type"],,$L["length"])=$A;$L["full_type"]=$L["type"].($L["length"]?"($L[length])":"");$L["null"]=($L["attnotnull"]=="f");$L["auto_increment"]=eregi("^nextval\\(",$L["default"]);$L["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$L["default"],$A))$L["default"]=($A[1][0]=="'"?idf_unescape($A[1]):$A[1]);$K[$L["field"]]=$L;}return$K;}function
indexes($R,$k=null){global$j;if(!is_object($k))$k=$j;$K=array();$Xd=$k->result("SELECT oid FROM pg_class WHERE relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema()) AND relname = ".q($R));$h=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Xd AND attnum > 0",$k);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Xd AND ci.oid = i.indexrelid",$k)as$L){$K[$L["relname"]]["type"]=($L["indisprimary"]=="t"?"PRIMARY":($L["indisunique"]=="t"?"UNIQUE":"INDEX"));$K[$L["relname"]]["columns"]=array();foreach(explode(" ",$L["indkey"])as$gc)$K[$L["relname"]]["columns"][]=$h[$gc];$K[$L["relname"]]["lengths"]=array();}return$K;}function
foreign_keys($R){global$Qc;$K=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($R)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$L){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$L['definition'],$A)){$L['source']=array_map('trim',explode(',',$A[1]));$L['table']=$A[2];if(preg_match('~(.+)\.(.+)~',$A[2],$Bc)){$L['ns']=$Bc[1];$L['table']=$Bc[2];}$L['target']=array_map('trim',explode(',',$A[3]));$L['on_delete']=(preg_match("~ON DELETE ($Qc)~",$A[4],$Bc)?$Bc[1]:'NO ACTION');$L['on_update']=(preg_match("~ON UPDATE ($Qc)~",$A[4],$Bc)?$Bc[1]:'NO ACTION');$K[$L['conname']]=$L;}}return$K;}function
view($C){global$j;return
array("select"=>$j->result("SELECT pg_get_viewdef(".q($C).")"));}function
collations(){return
array();}function
information_schema($n){return($n=="information_schema");}function
error(){global$j;$K=h($j->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$K,$A))$K=$A[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($A[3]).'})(.*)~','\\1<b>\\2</b>',$A[2]).$A[4];return
nl_br($K);}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).($f?" ENCODING ".idf_escape($f):""));}function
drop_databases($m){global$j;$j->close();return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($C));}function
auto_increment(){return"";}function
alter_table($R,$C,$q,$Jb,$Na,$pb,$f,$ta,$gd){$d=array();$rd=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d[]="DROP $g";else{$Ae=$X[5];unset($X[5]);if(isset($X[6])&&$p[0]=="")$X[1]=($X[1]=="bigint"?" big":" ")."serial";if($p[0]=="")$d[]=($R!=""?"ADD ":"  ").implode($X);else{if($g!=$X[0])$rd[]="ALTER TABLE ".table($R)." RENAME $g TO $X[0]";$d[]="ALTER $g TYPE$X[1]";if(!$X[6]){$d[]="ALTER $g ".($X[3]?"SET$X[3]":"DROP DEFAULT");$d[]="ALTER $g ".($X[2]==" NULL"?"DROP NOT":"SET").$X[2];}}if($p[0]!=""||$Ae!="")$rd[]="COMMENT ON COLUMN ".table($R).".$X[0] IS ".($Ae!=""?substr($Ae,9):"''");}}$d=array_merge($d,$Jb);if($R=="")array_unshift($rd,"CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");elseif($d)array_unshift($rd,"ALTER TABLE ".table($R)."\n".implode(",\n",$d));if($R!=""&&$R!=$C)$rd[]="ALTER TABLE ".table($R)." RENAME TO ".table($C);if($R!=""||$Na!="")$rd[]="COMMENT ON TABLE ".table($C)." IS ".q($Na);if($ta!=""){}foreach($rd
as$I){if(!queries($I))return
false;}return
true;}function
alter_indexes($R,$d){$Ra=array();$fb=array();foreach($d
as$X){if($X[0]!="INDEX")$Ra[]=($X[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").$X[2]);elseif($X[2]=="DROP")$fb[]=idf_escape($X[1]);elseif(!queries("CREATE INDEX ".idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R)." $X[2]"))return
false;}return((!$Ra||queries("ALTER TABLE ".table($R).implode(",",$Ra)))&&(!$fb||queries("DROP INDEX ".implode(", ",$fb))));}function
truncate_tables($T){return
queries("TRUNCATE ".implode(", ",array_map('table',$T)));return
true;}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$De,$Yd){foreach($T
as$R){if(!queries("ALTER TABLE ".table($R)." SET SCHEMA ".idf_escape($Yd)))return
false;}foreach($De
as$R){if(!queries("ALTER VIEW ".table($R)." SET SCHEMA ".idf_escape($Yd)))return
false;}return
true;}function
trigger($C){if($C=="")return
array("Statement"=>"EXECUTE PROCEDURE ()");$M=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($C));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($R))as$L)$K[$L["trigger_name"]]=array($L["condition_timing"],$L["event_manipulation"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":"DEFAULT VALUES"));}function
insert_update($R,$P,$ld){global$j;$xe=array();$Z=array();foreach($P
as$y=>$X){$xe[]="$y = $X";if(isset($ld[idf_unescape($y)]))$Z[]="$y = $X";}return($Z&&queries("UPDATE ".table($R)." SET ".implode(", ",$xe)." WHERE ".implode(" AND ",$Z))&&$j->affected_rows)||queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).")");}function
last_id(){return
0;}function
explain($j,$I){return$j->query("EXPLAIN $I");}function
found_rows($S,$Z){global$j;if(ereg(" rows=([0-9]+)",$j->result("EXPLAIN SELECT * FROM ".idf_escape($S["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$ud))return$ud[1];return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$j;return$j->result("SELECT current_schema()");}function
set_schema($Cd){global$j,$pe,$Pd;$K=$j->query("SET search_path TO ".idf_escape($Cd));foreach(types()as$U){if(!isset($pe[$U])){$pe[$U]=0;$Pd[lang(12)][]=$U;}}return$K;}function
use_sql($l){return"\connect ".idf_escape($l);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Cb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$Cb);}$nc="pgsql";$pe=array();$Pd=array();foreach(array(lang(13)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(14)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(15)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(16)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(17)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(18)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$y=>$X){$pe+=$X;$Pd[$y]=array_keys($X);}$we=array();$Vc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$eb["oracle"]="Oracle";if(isset($_GET["oracle"])){$kd=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($sb,$o){if(ini_bool("html_errors"))$o=html_entity_decode(strip_tags($o));$o=ereg_replace('^[^:]*: ','',$o);$this->error=$o;}function
connect($O,$V,$G){$this->_link=@oci_new_connect($V,$G,$O,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$o=oci_error();$this->error=$o["message"];return
false;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($l){return
true;}function
query($I,$qe=false){$J=oci_parse($this->_link,$I);$this->error="";if(!$J){$o=oci_error($this->_link);$this->error=$o["message"];return
false;}set_error_handler(array($this,'_error'));$K=@oci_execute($J);restore_error_handler();if($K){if(oci_num_fields($J))return
new
Min_Result($J);$this->affected_rows=oci_num_rows($J);}return$K;}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=1){$J=$this->query($I);if(!is_object($J)||!oci_fetch($J->_result))return
false;return
oci_result($J->_result,$p);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'OCI-Lob'))$L[$y]=$X->load();}return$L;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$g=$this->_offset++;$K=new
stdClass;$K->name=oci_field_name($this->_result,$g);$K->orgname=$K->name;$K->type=oci_field_type($this->_result,$g);$K->charsetnr=(ereg("raw|blob|bfile",$K->type)?63:0);return$K;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($O,$V,$G){$this->dsn("oci:dbname=//$O;charset=AL32UTF8",$V,$G);return
true;}function
select_db($l){return
true;}}}function
idf_escape($v){return'"'.str_replace('"','""',$v).'"';}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($I,$Z,$z,$E=0,$Hd=" "){return($E?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $I$Z) t WHERE rownum <= ".($z+$E).") WHERE rnum > $E":($z!==null?" * FROM (SELECT $I$Z) WHERE rownum <= ".($z+$E):" $I$Z"));}function
limit1($I,$Z){return" $I$Z";}function
db_collation($n,$Ka){global$j;return$j->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($m){return
array();}function
table_status($C=""){$K=array();$Ed=q($C);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine", avg_row_len * num_rows "Data_length", num_rows "Rows" FROM all_tables WHERE tablespace_name = '.q(DB).($C!=""?" AND table_name = $Ed":"")."
UNION SELECT view_name, 'view', 0, 0 FROM user_views".($C!=""?" WHERE view_name = $Ed":""))as$L){if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="view";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($R)." ORDER BY column_id")as$L){$U=$L["DATA_TYPE"];$xc="$L[DATA_PRECISION],$L[DATA_SCALE]";if($xc==",")$xc=$L["DATA_LENGTH"];$K[$L["COLUMN_NAME"]]=array("field"=>$L["COLUMN_NAME"],"full_type"=>$U.($xc?"($xc)":""),"type"=>strtolower($U),"length"=>$xc,"default"=>$L["DATA_DEFAULT"],"null"=>($L["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$K;}function
indexes($R,$k=null){$K=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($R)."
ORDER BY uc.constraint_type, uic.column_position",$k)as$L){$K[$L["INDEX_NAME"]]["type"]=($L["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($L["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$K[$L["INDEX_NAME"]]["columns"][]=$L["COLUMN_NAME"];$K[$L["INDEX_NAME"]]["lengths"][]=($L["CHAR_LENGTH"]&&$L["CHAR_LENGTH"]!=$L["COLUMN_LENGTH"]?$L["CHAR_LENGTH"]:null);}return$K;}function
view($C){$M=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($C));return
reset($M);}function
collations(){return
array();}function
information_schema($n){return
false;}function
error(){global$j;return
h($j->error);}function
exact_value($X){return
q($X);}function
explain($j,$I){$j->query("EXPLAIN PLAN FOR $I");return$j->query("SELECT * FROM plan_table");}function
found_rows($S,$Z){}function
alter_table($R,$C,$q,$Jb,$Na,$pb,$f,$ta,$gd){$d=$fb=array();foreach($q
as$p){$X=$p[1];if($X&&$p[0]!=""&&idf_escape($p[0])!=$X[0])queries("ALTER TABLE ".table($R)." RENAME COLUMN ".idf_escape($p[0])." TO $X[0]");if($X)$d[]=($R!=""?($p[0]!=""?"MODIFY (":"ADD ("):"  ").implode($X).($R!=""?")":"");else$fb[]=idf_escape($p[0]);}if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n)");return(!$d||queries("ALTER TABLE ".table($R)."\n".implode("\n",$d)))&&(!$fb||queries("ALTER TABLE ".table($R)." DROP (".implode(", ",$fb).")"))&&($R==$C||queries("ALTER TABLE ".table($R)." RENAME TO ".table($C)));}function
foreign_keys($R){return
array();}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($De){return
apply_queries("DROP VIEW",$De);}function
drop_tables($T){return
apply_queries("DROP TABLE",$T);}function
begin(){return
true;}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")");}function
last_id(){return
0;}function
schemas(){return
get_vals("SELECT DISTINCT owner FROM dba_segments WHERE owner IN (SELECT username FROM dba_users WHERE default_tablespace NOT IN ('SYSTEM','SYSAUX'))");}function
get_schema(){global$j;return$j->result("SELECT sys_context('USERENV', 'SESSION_USER') FROM dual");}function
set_schema($Dd){global$j;return$j->query("ALTER SESSION SET CURRENT_SCHEMA = ".idf_escape($Dd));}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
process_list(){return
get_rows('SELECT sess.process AS "process", sess.username AS "user", sess.schemaname AS "schema", sess.status AS "status", sess.wait_class AS "wait_class", sess.seconds_in_wait AS "seconds_in_wait", sql.sql_text AS "sql_text", sess.machine AS "machine", sess.port AS "port"
FROM v$session sess LEFT OUTER JOIN v$sql sql
ON sql.sql_id = sess.sql_id
WHERE sess.type = \'USER\'
ORDER BY PROCESS
');}function
show_status(){$M=get_rows('SELECT * FROM v$instance');return
reset($M);}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Cb){return
ereg("view|scheme|processlist|drop_col|variables|status",$Cb);}$nc="oracle";$pe=array();$Pd=array();foreach(array(lang(13)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(14)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(15)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(16)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$y=>$X){$pe+=$X;$Pd[$y]=array_keys($X);}$we=array();$Vc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("length","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$eb["mssql"]="MS SQL";if(isset($_GET["mssql"])){$kd=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$o)$this->error.="$o[message]\n";$this->error=rtrim($this->error);}function
connect($O,$V,$G){$this->_link=@sqlsrv_connect($O,array("UID"=>$V,"PWD"=>$G,"CharacterSet"=>"UTF-8"));if($this->_link){$hc=sqlsrv_server_info($this->_link);$this->server_info=$hc['SQLServerVersion'];}else$this->_get_error();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($l){return$this->query("USE $l");}function
query($I,$qe=false){$J=sqlsrv_query($this->_link,$I);$this->error="";if(!$J){$this->_get_error();return
false;}return$this->store_result($J);}function
multi_query($I){$this->_result=sqlsrv_query($this->_link,$I);$this->error="";if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($J=null){if(!$J)$J=$this->_result;if(sqlsrv_field_metadata($J))return
new
Min_Result($J);$this->affected_rows=sqlsrv_rows_affected($J);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;$L=$J->fetch_row();return$L[$p];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;}function
_convert($L){foreach((array)$L
as$y=>$X){if(is_a($X,'DateTime'))$L[$y]=$X->format("Y-m-d H:i:s");}return$L;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields)$this->_fields=sqlsrv_field_metadata($this->_result);$p=$this->_fields[$this->_offset++];$K=new
stdClass;$K->name=$p["Name"];$K->orgname=$p["Name"];$K->type=($p["Type"]==1?254:0);return$K;}function
seek($E){for($t=0;$t<$E;$t++)sqlsrv_fetch($this->_result);}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($O,$V,$G){$this->_link=@mssql_connect($O,$V,$G);if($this->_link){$J=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$L=$J->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$L[0]] $L[1]";}else$this->error=mssql_get_last_message();return(bool)$this->_link;}function
quote($Q){return"'".str_replace("'","''",$Q)."'";}function
select_db($l){return
mssql_select_db($l);}function
query($I,$qe=false){$J=mssql_query($I,$this->_link);$this->error="";if(!$J){$this->error=mssql_get_last_message();return
false;}if($J===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($I,$p=0){$J=$this->query($I);if(!is_object($J))return
false;return
mssql_result($J->_result,0,$p);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($J){$this->_result=$J;$this->num_rows=mssql_num_rows($J);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$K=mssql_fetch_field($this->_result);$K->orgtable=$K->table;$K->orgname=$K->name;return$K;}function
seek($E){mssql_data_seek($this->_result,$E);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($v){return"[".str_replace("]","]]",$v)."]";}function
table($v){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2]))return$j;return$j->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($I,$Z,$z,$E=0,$Hd=" "){return($z!==null?" TOP (".($z+$E).")":"")." $I$Z";}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($n,$Ka){global$j;return$j->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($n));}function
engines(){return
array();}function
logged_user(){global$j;return$j->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($m){global$j;$K=array();foreach($m
as$n){$j->select_db($n);$K[$n]=$j->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$K;}function
table_status($C=""){$K=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($C!=""?" AND name = ".q($C):""))as$L){if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return$S["Engine"]=="VIEW";}function
fk_support($S){return
true;}function
fields($R){$K=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($R))as$L){$U=$L["type"];$xc=(ereg("char|binary",$U)?$L["max_length"]:($U=="decimal"?"$L[precision],$L[scale]":""));$K[$L["name"]]=array("field"=>$L["name"],"full_type"=>$U.($xc?"($xc)":""),"type"=>$U,"length"=>$xc,"default"=>$L["default"],"null"=>$L["is_nullable"],"auto_increment"=>$L["is_identity"],"collation"=>$L["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$L["is_identity"],);}return$K;}function
indexes($R,$k=null){$K=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($R),$k)as$L){$K[$L["name"]]["type"]=($L["is_primary_key"]?"PRIMARY":($L["is_unique"]?"UNIQUE":"INDEX"));$K[$L["name"]]["lengths"]=array();$K[$L["name"]]["columns"][$L["key_ordinal"]]=$L["column_name"];}return$K;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$j->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($C))));}function
collations(){$K=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$f)$K[ereg_replace("_.*","",$f)][]=$f;return$K;}function
information_schema($n){return
false;}function
error(){global$j;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$j->error)));}function
exact_value($X){return
q($X);}function
create_database($n,$f){return
queries("CREATE DATABASE ".idf_escape($n).(eregi('^[a-z0-9_]+$',$f)?" COLLATE $f":""));}function
drop_databases($m){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$m)));}function
rename_database($C,$f){if(eregi('^[a-z0-9_]+$',$f))queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $f");queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($C));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($R,$C,$q,$Jb,$Na,$pb,$f,$ta,$gd){$d=array();foreach($q
as$p){$g=idf_escape($p[0]);$X=$p[1];if(!$X)$d["DROP"][]=" COLUMN $g";else{$X[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$X[1]);if($p[0]=="")$d["ADD"][]="\n  ".implode("",$X).($R==""?substr($Jb[$X[0]],16+strlen($X[0])):"");else{unset($X[6]);if($g!=$X[0])queries("EXEC sp_rename ".q(table($R).".$g").", ".q(idf_unescape($X[0])).", 'COLUMN'");$d["ALTER COLUMN ".implode("",$X)][]="";}}}if($R=="")return
queries("CREATE TABLE ".table($C)." (".implode(",",(array)$d["ADD"])."\n)");if($R!=$C)queries("EXEC sp_rename ".q(table($R)).", ".q($C));if($Jb)$d[""]=$Jb;foreach($d
as$y=>$X){if(!queries("ALTER TABLE ".idf_escape($C)." $y".implode(",",$X)))return
false;}return
true;}function
alter_indexes($R,$d){$w=array();$fb=array();foreach($d
as$X){if($X[2]=="DROP"){if($X[0]=="PRIMARY")$fb[]=idf_escape($X[1]);else$w[]=idf_escape($X[1])." ON ".table($R);}elseif(!queries(($X[0]!="PRIMARY"?"CREATE $X[0] ".($X[0]!="INDEX"?"INDEX ":"").idf_escape($X[1]!=""?$X[1]:uniqid($R."_"))." ON ".table($R):"ALTER TABLE ".table($R)." ADD PRIMARY KEY")." $X[2]"))return
false;}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$fb||queries("ALTER TABLE ".table($R)." DROP ".implode(", ",$fb)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R).($P?" (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")":"DEFAULT VALUES"));}function
insert_update($R,$P,$ld){$xe=array();$Z=array();foreach($P
as$y=>$X){$xe[]="$y = $X";if(isset($ld[idf_unescape($y)]))$Z[]="$y = $X";}return
queries("MERGE ".table($R)." USING (VALUES(".implode(", ",$P).")) AS source (c".implode(", c",range(1,count($P))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$xe)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($P)).") VALUES (".implode(", ",$P).");");}function
last_id(){global$j;return$j->result("SELECT SCOPE_IDENTITY()");}function
explain($j,$I){$j->query("SET SHOWPLAN_ALL ON");$K=$j->query($I);$j->query("SET SHOWPLAN_ALL OFF");return$K;}function
found_rows($S,$Z){}function
foreign_keys($R){$K=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($R))as$L){$r=&$K[$L["FK_NAME"]];$r["table"]=$L["PKTABLE_NAME"];$r["source"][]=$L["FKCOLUMN_NAME"];$r["target"][]=$L["PKCOLUMN_NAME"];}return$K;}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$De,$Yd){return
apply_queries("ALTER SCHEMA ".idf_escape($Yd)." TRANSFER",array_merge($T,$De));}function
trigger($C){if($C=="")return
array();$M=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($C));$K=reset($M);if($K)$K["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$K["text"]);return$K;}function
triggers($R){$K=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($R))as$L)$K[$L["name"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$j;if($_GET["ns"]!="")return$_GET["ns"];return$j->result("SELECT SCHEMA_NAME()");}function
set_schema($Cd){return
true;}function
use_sql($l){return"USE ".idf_escape($l);}function
show_variables(){return
array();}function
show_status(){return
array();}function
convert_field($p){}function
unconvert_field($p,$K){return$K;}function
support($Cb){return
ereg('^(scheme|trigger|view|drop_col)$',$Cb);}$nc="mssql";$pe=array();$Pd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(14)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(15)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(16)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$y=>$X){$pe+=$X;$Pd[$y]=array_keys($X);}$we=array();$Vc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Sb=array("len","lower","round","upper");$Vb=array("avg","count","count distinct","max","min","sum");$ib=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$eb=array("server"=>"MySQL")+$eb;if(!defined("DRIVER")){$kd=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($O,$V,$G){mysqli_report(MYSQLI_REPORT_OFF);list($ac,$id)=explode(":",$O,2);$K=@$this->real_connect(($O!=""?$ac:ini_get("mysqli.default_host")),($O.$V!=""?$V:ini_get("mysqli.default_user")),($O.$V.$G!=""?$G:ini_get("mysqli.default_pw")),null,(is_numeric($id)?$id:ini_get("mysqli.default_port")),(!is_numeric($id)?$id:null));if($K){if(method_exists($this,'set_charset'))$this->set_charset("utf8");else$this->query("SET NAMES utf8");}return$K;}function
result($I,$p=0){$J=$this->query($I);if(!$J)return
false;$L=$J->fetch_array();return$L[$p];}function
quote($Q){return"'".$this->escape_string($Q)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($O,$V,$G){$this->_link=@mysql_connect(($O!=""?$O:ini_get("mysql.default_host")),("$O$V"!=""?$V:ini_get("mysql.default_user")),("$O$V$G"!=""?$G:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset'))mysql_set_charset("utf8",$this->_link);else$this->query("SET NAMES utf8");}else$this->error=mysql_error();return(bool)$this->_link;}function
quote($Q){return"'".mysql_real_escape_string($Q,$this->_link)."'";}function
select_db($l){return
mysql_select_db($l,$this->_link);}function
query($I,$qe=false){$J=@($qe?mysql_unbuffered_query($I,$this->_link):mysql_query($I,$this->_link));$this->error="";if(!$J){$this->error=mysql_error($this->_link);return
false;}if($J===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($J);}function
multi_query($I){return$this->_result=$this->query($I);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($I,$p=0){$J=$this->query($I);if(!$J||!$J->num_rows)return
false;return
mysql_result($J->_result,0,$p);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($J){$this->_result=$J;$this->num_rows=mysql_num_rows($J);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$K=mysql_fetch_field($this->_result,$this->_offset++);$K->orgtable=$K->table;$K->orgname=$K->name;$K->charsetnr=($K->blob?63:0);return$K;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($O,$V,$G){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$O)),$V,$G);$this->query("SET NAMES utf8");return
true;}function
select_db($l){return$this->query("USE ".idf_escape($l));}function
query($I,$qe=false){$this->setAttribute(1000,!$qe);return
parent::query($I,$qe);}}}function
idf_escape($v){return"`".str_replace("`","``",$v)."`";}function
table($v){return
idf_escape($v);}function
connect(){global$c;$j=new
Min_DB;$Ta=$c->credentials();if($j->connect($Ta[0],$Ta[1],$Ta[2])){$j->query("SET sql_quote_show_create = 1, autocommit = 1");return$j;}$K=$j->error;if(function_exists('iconv')&&!is_utf8($K)&&strlen($Bd=iconv("windows-1250","utf-8",$K))>strlen($K))$K=$Bd;return$K;}function
get_databases($Ib){global$j;$K=get_session("dbs");if($K===null){$I=($j->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");$K=($Ib?slow_query($I):get_vals($I));restart_session();set_session("dbs",$K);stop_session();}return$K;}function
limit($I,$Z,$z,$E=0,$Hd=" "){return" $I$Z".($z!==null?$Hd."LIMIT $z".($E?" OFFSET $E":""):"");}function
limit1($I,$Z){return
limit($I,$Z,1);}function
db_collation($n,$Ka){global$j;$K=null;$Ra=$j->result("SHOW CREATE DATABASE ".idf_escape($n),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ra,$A))$K=$A[1];elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ra,$A))$K=$Ka[$A[1]][-1];return$K;}function
engines(){$K=array();foreach(get_rows("SHOW ENGINES")as$L){if(ereg("YES|DEFAULT",$L["Support"]))$K[]=$L["Engine"];}return$K;}function
logged_user(){global$j;return$j->result("SELECT USER()");}function
tables_list(){global$j;return
get_key_vals("SHOW".($j->server_info>=5?" FULL":"")." TABLES");}function
count_tables($m){$K=array();foreach($m
as$n)$K[$n]=count(get_vals("SHOW TABLES IN ".idf_escape($n)));return$K;}function
table_status($C=""){$K=array();foreach(get_rows("SHOW TABLE STATUS".($C!=""?" LIKE ".q(addcslashes($C,"%_")):""))as$L){if($L["Engine"]=="InnoDB")$L["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$L["Comment"]);if(!isset($L["Rows"]))$L["Comment"]="";if($C!="")return$L;$K[$L["Name"]]=$L;}return$K;}function
is_view($S){return!isset($S["Rows"]);}function
fk_support($S){return
eregi("InnoDB|IBMDB2I",$S["Engine"]);}function
fields($R){$K=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($R))as$L){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$L["Type"],$A);$K[$L["Field"]]=array("field"=>$L["Field"],"full_type"=>$L["Type"],"type"=>$A[1],"length"=>$A[2],"unsigned"=>ltrim($A[3].$A[4]),"default"=>($L["Default"]!=""||ereg("char",$A[1])?$L["Default"]:null),"null"=>($L["Null"]=="YES"),"auto_increment"=>($L["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$L["Extra"],$A)?$A[1]:""),"collation"=>$L["Collation"],"privileges"=>array_flip(explode(",",$L["Privileges"])),"comment"=>$L["Comment"],"primary"=>($L["Key"]=="PRI"),);}return$K;}function
indexes($R,$k=null){$K=array();foreach(get_rows("SHOW INDEX FROM ".table($R),$k)as$L){$K[$L["Key_name"]]["type"]=($L["Key_name"]=="PRIMARY"?"PRIMARY":($L["Index_type"]=="FULLTEXT"?"FULLTEXT":($L["Non_unique"]?"INDEX":"UNIQUE")));$K[$L["Key_name"]]["columns"][]=$L["Column_name"];$K[$L["Key_name"]]["lengths"][]=$L["Sub_part"];}return$K;}function
foreign_keys($R){global$j,$Qc;static$H='`(?:[^`]|``)+`';$K=array();$Sa=$j->result("SHOW CREATE TABLE ".table($R),1);if($Sa){preg_match_all("~CONSTRAINT ($H) FOREIGN KEY \\(((?:$H,? ?)+)\\) REFERENCES ($H)(?:\\.($H))? \\(((?:$H,? ?)+)\\)(?: ON DELETE ($Qc))?(?: ON UPDATE ($Qc))?~",$Sa,$Cc,PREG_SET_ORDER);foreach($Cc
as$A){preg_match_all("~$H~",$A[2],$Kd);preg_match_all("~$H~",$A[5],$Yd);$K[idf_unescape($A[1])]=array("db"=>idf_unescape($A[4]!=""?$A[3]:$A[4]),"table"=>idf_unescape($A[4]!=""?$A[4]:$A[3]),"source"=>array_map('idf_unescape',$Kd[0]),"target"=>array_map('idf_unescape',$Yd[0]),"on_delete"=>($A[6]?$A[6]:"RESTRICT"),"on_update"=>($A[7]?$A[7]:"RESTRICT"),);}}return$K;}function
view($C){global$j;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$j->result("SHOW CREATE VIEW ".table($C),1)));}function
collations(){$K=array();foreach(get_rows("SHOW COLLATION")as$L){if($L["Default"])$K[$L["Charset"]][-1]=$L["Collation"];else$K[$L["Charset"]][]=$L["Collation"];}ksort($K);foreach($K
as$y=>$X)asort($K[$y]);return$K;}function
information_schema($n){global$j;return($j->server_info>=5&&$n=="information_schema")||($j->server_info>=5.5&&$n=="performance_schema");}function
error(){global$j;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$j->error));}function
error_line(){global$j;if(ereg(' at line ([0-9]+)$',$j->error,$ud))return$ud[1]-1;}function
exact_value($X){return
q($X)." COLLATE utf8_bin";}function
create_database($n,$f){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($n).($f?" COLLATE ".q($f):""));}function
drop_databases($m){set_session("dbs",null);return
apply_queries("DROP DATABASE",$m,'idf_escape');}function
rename_database($C,$f){if(create_database($C,$f)){$vd=array();foreach(tables_list()as$R=>$U)$vd[]=table($R)." TO ".idf_escape($C).".".table($R);if(!$vd||queries("RENAME TABLE ".implode(", ",$vd))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ua=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$ua="";break;}if($w["type"]=="PRIMARY")$ua=" UNIQUE";}}return" AUTO_INCREMENT$ua";}function
alter_table($R,$C,$q,$Jb,$Na,$pb,$f,$ta,$gd){$d=array();foreach($q
as$p)$d[]=($p[1]?($R!=""?($p[0]!=""?"CHANGE ".idf_escape($p[0]):"ADD"):" ")." ".implode($p[1]).($R!=""?$p[2]:""):"DROP ".idf_escape($p[0]));$d=array_merge($d,$Jb);$Nd="COMMENT=".q($Na).($pb?" ENGINE=".q($pb):"").($f?" COLLATE ".q($f):"").($ta!=""?" AUTO_INCREMENT=$ta":"").$gd;if($R=="")return
queries("CREATE TABLE ".table($C)." (\n".implode(",\n",$d)."\n) $Nd");if($R!=$C)$d[]="RENAME TO ".table($C);$d[]=$Nd;return
queries("ALTER TABLE ".table($R)."\n".implode(",\n",$d));}function
alter_indexes($R,$d){foreach($d
as$y=>$X)$d[$y]=($X[2]=="DROP"?"\nDROP INDEX ".idf_escape($X[1]):"\nADD $X[0] ".($X[0]=="PRIMARY"?"KEY ":"").($X[1]!=""?idf_escape($X[1])." ":"").$X[2]);return
queries("ALTER TABLE ".table($R).implode(",",$d));}function
truncate_tables($T){return
apply_queries("TRUNCATE TABLE",$T);}function
drop_views($De){return
queries("DROP VIEW ".implode(", ",array_map('table',$De)));}function
drop_tables($T){return
queries("DROP TABLE ".implode(", ",array_map('table',$T)));}function
move_tables($T,$De,$Yd){$vd=array();foreach(array_merge($T,$De)as$R)$vd[]=table($R)." TO ".idf_escape($Yd).".".table($R);return
queries("RENAME TABLE ".implode(", ",$vd));}function
copy_tables($T,$De,$Yd){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($T
as$R){$C=($Yd==DB?table("copy_$R"):idf_escape($Yd).".".table($R));if(!queries("DROP TABLE IF EXISTS $C")||!queries("CREATE TABLE $C LIKE ".table($R))||!queries("INSERT INTO $C SELECT * FROM ".table($R)))return
false;}foreach($De
as$R){$C=($Yd==DB?table("copy_$R"):idf_escape($Yd).".".table($R));$Ce=view($R);if(!queries("DROP VIEW IF EXISTS $C")||!queries("CREATE VIEW $C AS $Ce[select]"))return
false;}return
true;}function
trigger($C){if($C=="")return
array();$M=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($C));return
reset($M);}function
triggers($R){$K=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")))as$L)$K[$L["Trigger"]]=array($L["Timing"],$L["Event"]);return$K;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($C,$U){global$j,$qb,$jc,$pe;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$oe="((".implode("|",array_merge(array_keys($pe),$na)).")\\b(?:\\s*\\(((?:[^'\")]*|$qb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$H="\\s*(".($U=="FUNCTION"?"":$jc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$oe";$Ra=$j->result("SHOW CREATE $U ".idf_escape($C),2);preg_match("~\\(((?:$H\\s*,?)*)\\)\\s*".($U=="FUNCTION"?"RETURNS\\s+$oe\\s+":"")."(.*)~is",$Ra,$A);$q=array();preg_match_all("~$H\\s*,?~is",$A[1],$Cc,PREG_SET_ORDER);foreach($Cc
as$ed){$C=str_replace("``","`",$ed[2]).$ed[3];$q[]=array("field"=>$C,"type"=>strtolower($ed[5]),"length"=>preg_replace_callback("~$qb~s",'normalize_enum',$ed[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$ed[8] $ed[7]"))),"full_type"=>$ed[4],"inout"=>strtoupper($ed[1]),"collation"=>strtolower($ed[9]),);}if($U!="FUNCTION")return
array("fields"=>$q,"definition"=>$A[11]);return
array("fields"=>$q,"returns"=>array("type"=>$A[12],"length"=>$A[13],"unsigned"=>$A[15],"collation"=>$A[16]),"definition"=>$A[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($R,$P){return
queries("INSERT INTO ".table($R)." (".implode(", ",array_keys($P)).")\nVALUES (".implode(", ",$P).")");}function
insert_update($R,$P,$ld){foreach($P
as$y=>$X)$P[$y]="$y = $X";$xe=implode(", ",$P);return
queries("INSERT INTO ".table($R)." SET $xe ON DUPLICATE KEY UPDATE $xe");}function
last_id(){global$j;return$j->result("SELECT LAST_INSERT_ID()");}function
explain($j,$I){return$j->query("EXPLAIN $I");}function
found_rows($S,$Z){return($Z||$S["Engine"]!="InnoDB"?null:$S["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Cd){return
true;}function
create_sql($R,$ta){global$j;$K=$j->result("SHOW CREATE TABLE ".table($R),1);if(!$ta)$K=preg_replace('~ AUTO_INCREMENT=\\d+~','',$K);return$K;}function
truncate_sql($R){return"TRUNCATE ".table($R);}function
use_sql($l){return"USE ".idf_escape($l);}function
trigger_sql($R,$Qd){$K="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($R,"%_")),null,"-- ")as$L)$K.="\n".($Qd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($L["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($L["Trigger"])." $L[Timing] $L[Event] ON ".table($L["Table"])." FOR EACH ROW\n$L[Statement];;\n";return$K;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
convert_field($p){if(ereg("binary",$p["type"]))return"HEX(".idf_escape($p["field"]).")";if(ereg("geometry|point|linestring|polygon",$p["type"]))return"AsWKT(".idf_escape($p["field"]).")";}function
unconvert_field($p,$K){if(ereg("binary",$p["type"]))$K="unhex($K)";if(ereg("geometry|point|linestring|polygon",$p["type"]))$K="GeomFromText($K)";return$K;}function
support($Cb){global$j;return!ereg("scheme|sequence|type".($j->server_info<5.1?"|event|partitioning".($j->server_info<5?"|view|routine|trigger":""):""),$Cb);}$nc="sql";$pe=array();$Pd=array();foreach(array(lang(13)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(14)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(15)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(19)=>array("enum"=>65535,"set"=>64),lang(16)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("geometry"=>0,"point"=>0,"linestring"=>0,"polygon"=>0,"multipoint"=>0,"multilinestring"=>0,"multipolygon"=>0,"geometrycollection"=>0),)as$y=>$X){$pe+=$X;$Pd[$y]=array_keys($X);}$we=array("unsigned","zerofill","unsigned zerofill");$Vc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Sb=array("char_length","date","from_unixtime","lower","round","sec_to_time","time_to_sec","upper");$Vb=array("avg","count","count distinct","group_concat","max","min","sum");$ib=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1","date|time"=>"now",),array("(^|[^o])int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.6.1";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(20)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$j;$m=$this->databases(false);return(!$m?$j->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$m[(information_schema($m[0])?1:0)]);}function
databases($Ib=true){return
get_databases($Ib);}function
queryTimeout(){return
5;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(21),'<td><input type="hidden" name="auth[driver]" value="server"><input id="username" name="auth[username]" value="',h($_GET["username"]),'">
<tr><th>',lang(22),'<td><input type="password" name="auth[password]">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(23)."'>\n",checkbox("auth[permanent]",1,$_COOKIE["adminer_permanent"],lang(24))."\n";}function
login($_c,$G){global$j;$j->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Vd){return
h($Vd["Comment"]!=""?$Vd["Comment"]:$Vd["Name"]);}function
fieldName($p,$Zc=0){return
h($p["comment"]!=""?$p["comment"]:$p["field"]);}function
selectLinks($Vd,$P=""){$b=$Vd["Name"];if($P!==null)echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$P).'">'.lang(25)."</a>\n";echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(26)."'>&gt;&gt;</a>\n";}function
foreignKeys($R){return
foreign_keys($R);}function
backwardKeys($R,$Ud){$K=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($R)."
ORDER BY ORDINAL_POSITION",null,"")as$L)$K[$L["TABLE_NAME"]]["keys"][$L["CONSTRAINT_NAME"]][$L["COLUMN_NAME"]]=$L["REFERENCED_COLUMN_NAME"];foreach($K
as$y=>$X){$C=$this->tableName(table_status($y));if($C!=""){$Ed=preg_quote($Ud);$Hd="(:|\\s*-)?\\s+";$K[$y]["name"]=(preg_match("(^$Ed$Hd(.+)|^(.+?)$Hd$Ed\$)iu",$C,$A)?$A[2].$A[3]:$C);}else
unset($K[$y]);}return$K;}function
backwardKeysPrint($xa,$L){foreach($xa
as$R=>$wa){foreach($wa["keys"]as$La){$_=ME.'select='.urlencode($R);$t=0;foreach($La
as$g=>$X)$_.=where_link($t++,$g,$L[$X]);echo"<a href='".h($_)."'>".h($wa["name"])."</a>";$_=ME.'edit='.urlencode($R);foreach($La
as$g=>$X)$_.="&set".urlencode("[".bracket_escape($g)."]")."=".urlencode($L[$X]);echo"<a href='".h($_)."' title='".lang(25)."'>+</a> ";}}}function
selectQuery($I){return"<!--\n".str_replace("--","--><!-- ",$I)."\n-->\n";}function
rowDescription($R){foreach(fields($R)as$p){if(ereg("varchar|character varying",$p["type"]))return
idf_escape($p["field"]);}return"";}function
rowDescriptions($M,$Lb){$K=$M;foreach($M[0]as$y=>$X){if(list($R,$u,$C)=$this->_foreignColumn($Lb,$y)){$dc=array();foreach($M
as$L)$dc[$L[$y]]=exact_value($L[$y]);$Ya=$this->_values[$R];if(!$Ya)$Ya=get_key_vals("SELECT $u, $C FROM ".table($R)." WHERE $u IN (".implode(", ",$dc).")");foreach($M
as$B=>$L){if(isset($L[$y]))$K[$B][$y]=(string)$Ya[$L[$y]];}}}return$K;}function
selectVal($X,$_,$p){$K=($X===null?"&nbsp;":$X);if(ereg('blob|bytea',$p["type"])&&!is_utf8($X)){$K=lang(27,strlen($X));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$X))$K="<img src='$_' alt='$K'>";}if(like_bool($p)&&$K!="&nbsp;")$K=($X?lang(28):lang(29));if($_)$K="<a href='$_'>$K</a>";if(!$_&&!like_bool($p)&&ereg('int|float|double|decimal',$p["type"]))$K="<div class='number'>$K</div>";elseif(ereg('date',$p["type"]))$K="<div class='datetime'>$K</div>";return$K;}function
editVal($X,$p){if(ereg('date|timestamp',$p["type"])&&$X!==null)return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(30),$X);return$X;}function
selectColumnsPrint($N,$h){}function
selectSearchPrint($Z,$h,$x){$Z=(array)$_GET["where"];echo'<fieldset id="fieldset-search"><legend>'.lang(31)."</legend><div>\n";$qc=array();foreach($Z
as$y=>$X)$qc[$X["col"]]=$y;$t=0;$q=fields($_GET["select"]);foreach($h
as$C=>$Xa){$p=$q[$C];if(ereg("enum",$p["type"])||like_bool($p)){$y=$qc[$C];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($C)."'>:",(like_bool($p)?" <select name='where[$t][val]'>".optionlist(array(""=>"",lang(29),lang(28)),$Z[$y]["val"],true)."</select>":enum_input("checkbox"," name='where[$t][val][]'",$p,(array)$Z[$y]["val"],($p["null"]?0:null))),"</div>\n";unset($h[$C]);}elseif(is_array($Xc=$this->_foreignKeyOptions($_GET["select"],$C))){if($q[$C]["null"])$Xc[0]='('.lang(4).')';$y=$qc[$C];$t--;echo"<div>".h($Xa)."<input type='hidden' name='where[$t][col]' value='".h($C)."'><input type='hidden' name='where[$t][op]' value='='>: <select name='where[$t][val]'>".optionlist($Xc,$Z[$y]["val"],true)."</select></div>\n";unset($h[$C]);}}$t=0;foreach($Z
as$X){if(($X["col"]==""||$h[$X["col"]])&&"$X[col]$X[val]"!=""){echo"<div><select name='where[$t][col]'><option value=''>(".lang(32).")".optionlist($h,$X["col"],true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators,$X["op"]),"<input name='where[$t][val]' value='".h($X["val"])."'></div>\n";$t++;}}echo"<div><select name='where[$t][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(32).")".optionlist($h,null,true)."</select>",html_select("where[$t][op]",array(-1=>"")+$this->operators),"<input name='where[$t][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Zc,$h,$x){$ad=array();foreach($x
as$y=>$w){$Zc=array();foreach($w["columns"]as$X)$Zc[]=$h[$X];if(count(array_filter($Zc,'strlen'))>1&&$y!="PRIMARY")$ad[$y]=implode(", ",$Zc);}if($ad){echo'<fieldset><legend>'.lang(33)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$ad,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"])echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}function
selectLimitPrint($z){echo"<fieldset><legend>".lang(34)."</legend><div>";echo
html_select("limit",array("","30","100"),$z),"</div></fieldset>\n";}function
selectLengthPrint($ae){}function
selectActionPrint($x){echo"<fieldset><legend>".lang(35)."</legend><div>","<input type='submit' value='".lang(36)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($mb,$h){if($mb){print_fieldset("email",lang(37),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(38).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(39).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n","<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$h,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(40)."'>\n";echo"<p>".lang(41).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($mb)==1?'<input type="hidden" name="email_field" value="'.h(key($mb)).'">':html_select("email_field",$mb)),"<input type='submit' name='email' value='".lang(42)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($h,$x){return
array(array(),array());}function
selectSearchProcess($q,$x){$K=array();foreach((array)$_GET["where"]as$y=>$Z){$Ja=$Z["col"];$Tc=$Z["op"];$X=$Z["val"];if(($y<0?"":$Ja).$X!=""){$Oa=array();foreach(($Ja!=""?array($Ja=>$q[$Ja]):$q)as$C=>$p){if($Ja!=""||is_numeric($X)||!ereg('int|float|double|decimal',$p["type"])){$C=idf_escape($C);if($Ja!=""&&$p["type"]=="enum")$Oa[]=(in_array(0,$X)?"$C IS NULL OR ":"")."$C IN (".implode(", ",array_map('intval',$X)).")";else{$be=ereg('char|text|enum|set',$p["type"]);$Y=$this->processInput($p,(!$Tc&&$be&&ereg('^[^%]+$',$X)?"%$X%":$X));$Oa[]=$C.($Y=="NULL"?" IS".($Tc==">="?" NOT":"")." $Y":(in_array($Tc,$this->operators)||$Tc=="="?" $Tc $Y":($be?" LIKE $Y":" IN (".str_replace(",","', '",$Y).")")));if($y<0&&$X=="0")$Oa[]="$C IS NULL";}}}$K[]=($Oa?"(".implode(" OR ",$Oa).")":"0");}}return$K;}function
selectOrderProcess($q,$x){$fc=$_GET["index_order"];if($fc!="")unset($_GET["order"][1]);if($_GET["order"])return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));foreach(($fc!=""?array($x[$fc]):$x)as$w){if($fc!=""||$w["type"]=="INDEX"){$Xa=false;foreach($w["columns"]as$X){if(ereg('date|timestamp',$q[$X]["type"])){$Xa=true;break;}}$K=array();foreach($w["columns"]as$X)$K[]=idf_escape($X).($Xa?" DESC":"");return$K;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Lb){if($_POST["email_append"])return
true;if($_POST["email"]){$Gd=0;if($_POST["all"]||$_POST["check"]){$p=idf_escape($_POST["email_field"]);$Rd=$_POST["email_subject"];$Hc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Rd.$Hc",$Cc);$M=get_rows("SELECT DISTINCT $p".($Cc[1]?", ".implode(", ",array_map('idf_escape',array_unique($Cc[1]))):"")." FROM ".table($_GET["select"])." WHERE $p IS NOT NULL AND $p != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$q=fields($_GET["select"]);foreach($this->rowDescriptions($M,$Lb)as$L){$wd=array('{\\'=>'{');foreach($Cc[1]as$X)$wd['{$'."$X}"]=$this->editVal($L[$X],$q[$X]);$lb=$L[$_POST["email_field"]];if(is_mail($lb)&&send_mail($lb,strtr($Rd,$wd),strtr($Hc,$wd),$_POST["email_from"],$_FILES["email_files"]))$Gd++;}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(43,$Gd));}return
false;}function
selectQueryBuild($N,$Z,$Tb,$Zc,$z,$F){return"";}function
messageQuery($I){return" <span class='time'>".@date("H:i:s")."</span><!--\n".str_replace("--","--><!-- ",$I)."\n-->";}function
editFunctions($p){$K=array();if($p["null"]&&ereg('blob',$p["type"]))$K["NULL"]=lang(4);$K[""]=($p["null"]||$p["auto_increment"]||like_bool($p)?"":"*");if(ereg('date|time',$p["type"]))$K["now"]=lang(44);if(eregi('_(md5|sha1)$',$p["field"],$A))$K[]=strtolower($A[1]);return$K;}function
editInput($R,$p,$sa,$Y){if($p["type"]=="enum")return(isset($_GET["select"])?"<label><input type='radio'$sa value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$sa,$p,($Y||isset($_GET["select"])?$Y:0),($p["null"]?"":null));$Xc=$this->_foreignKeyOptions($R,$p["field"],$Y);if($Xc!==null)return(is_array($Xc)?"<select$sa>".optionlist($Xc,$Y,true)."</select>":"<input value='".h($Y)."'$sa class='hidden'><input value='".h($Xc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($R)."&field=".urlencode($p["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");if(like_bool($p))return'<input type="checkbox" value="'.h($Y?$Y:1).'"'.($Y?' checked':'')."$sa>";$Zb="";if(ereg('time',$p["type"]))$Zb=lang(45);if(ereg('date|timestamp',$p["type"]))$Zb=lang(46).($Zb?" [$Zb]":"");if($Zb)return"<input value='".h($Y)."'$sa> ($Zb)";if(eregi('_(md5|sha1)$',$p["field"]))return"<input type='password' value='".h($Y)."'$sa>";return'';}function
processInput($p,$Y,$s=""){if($s=="now")return"$s()";$K=$Y;if(ereg('date|timestamp',$p["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(30)))).'(.*))',$Y,$A))$K=($A["p1"]!=""?$A["p1"]:($A["p2"]!=""?($A["p2"]<70?20:19).$A["p2"]:gmdate("Y")))."-$A[p3]$A[p4]-$A[p5]$A[p6]".end($A);$K=($p["type"]=="bit"&&ereg('^[0-9]+$',$Y)?$K:q($K));if($Y==""&&like_bool($p))$K="0";elseif($Y==""&&($p["null"]||!ereg('char|text',$p["type"])))$K="NULL";elseif(ereg('^(md5|sha1)$',$s))$K="$s($K)";return
unconvert_field($p,$K);}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($R,$Qd,$I){global$j;$J=$j->query($I,1);if($J){while($L=$J->fetch_assoc()){if($Qd=="table"){dump_csv(array_keys($L));$Qd="INSERT";}dump_csv($L);}}}function
dumpFilename($cc){return
friendly_url($cc);}function
dumpHeaders($cc,$Lc=false){$zb="csv";header("Content-Type: text/csv; charset=utf-8");return$zb;}function
homepage(){return
true;}function
navigation($Kc){global$ba,$he;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Kc=="auth"){$Hb=true;foreach((array)$_SESSION["pwds"]["server"][""]as$V=>$G){if($G!==null){if($Hb){echo"<p id='logins' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";$Hb=false;}echo"<a href='".h(auth_url("server","",$V))."'>".($V!=""?h($V):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(47),'" id="logout">
<input type="hidden" name="token" value="',$he,'">
</p>
</form>
';$this->databasesPrint($Kc);if($Kc!="db"&&$Kc!="ns"){$S=table_status();if(!$S)echo"<p class='message'>".lang(6)."\n";else$this->tablesPrint($S);}}}function
databasesPrint($Kc){}function
tablesPrint($T){echo"<p id='tables' onmouseover='menuOver(this, event);' onmouseout='menuOut(this);'>\n";foreach($T
as$L){$C=$this->tableName($L);if(isset($L["Engine"])&&$C!="")echo"<a href='".h(ME).'select='.urlencode($L["Name"])."'".bold($_GET["select"]==$L["Name"])." title='".lang(48)."'>$C</a><br>\n";}}function
_foreignColumn($Lb,$g){foreach((array)$Lb[$g]as$Kb){if(count($Kb["source"])==1){$C=$this->rowDescription($Kb["table"]);if($C!=""){$u=idf_escape($Kb["target"][0]);return
array($Kb["table"],$u,$C);}}}}function
_foreignKeyOptions($R,$g,$Y=null){global$j;if(list($Yd,$u,$C)=$this->_foreignColumn(column_foreign_keys($R),$g)){$K=&$this->_values[$Yd];if($K===null){$S=table_status($Yd);$K=($S["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $u, $C FROM ".table($Yd)." ORDER BY 2"));}if(!$K&&$Y!==null)return$j->result("SELECT $C FROM ".table($Yd)." WHERE $u = ".q($Y));return$K;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($de,$o="",$Da=array(),$ee=""){global$a,$c,$j,$eb;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$fe=$de.($ee!=""?": ".h($ee):"");$ge=strip_tags($fe.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$a,'" dir="',lang(49),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ge,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.6.1",'">
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.6.1",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.6.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(49),' nojs" onkeydown="bodyKeydown(event);" onclick="bodyClick(event);" onload="bodyLoad(\'',(is_object($j)?substr($j->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="content">
';if($Da!==null){$_=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($_?$_:".").'">'.$eb[DRIVER].'</a> &raquo; ';$_=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$O=(SERVER!=""?h(SERVER):lang(50));if($Da===false)echo"$O\n";else{echo"<a href='".($_?h($_):".")."' accesskey='1' title='Alt+Shift+1'>$O</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Da)))echo'<a href="'.h($_."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';if(is_array($Da)){if($_GET["ns"]!="")echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';foreach($Da
as$y=>$X){$Xa=(is_array($X)?$X[1]:$X);if($Xa!="")echo'<a href="'.h(ME."$y=").urlencode(is_array($X)?$X[0]:$X).'">'.h($Xa).'</a> &raquo; ';}}echo"$de\n";}}echo"<h2>$fe</h2>\n";restart_session();$ye=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Ic=$_SESSION["messages"][$ye];if($Ic){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Ic)."</div>\n";unset($_SESSION["messages"][$ye]);}$m=&get_session("dbs");if(DB!=""&&$m&&!in_array(DB,$m,true))$m=null;stop_session();if($o)echo"<div class='error'>$o</div>\n";define("PAGE_HEADER",1);}function
page_footer($Kc=""){global$c;echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Kc);echo'</div>
';}function
int32($B){while($B>=2147483648)$B-=4294967296;while($B<=-2147483649)$B+=4294967296;return(int)$B;}function
long2str($W,$Fe){$Bd='';foreach($W
as$X)$Bd.=pack('V',$X);if($Fe)return
substr($Bd,0,end($W));return$Bd;}function
str2long($Bd,$Fe){$W=array_values(unpack('V*',str_pad($Bd,4*ceil(strlen($Bd)/4),"\0")));if($Fe)$W[]=strlen($Bd);return$W;}function
xxtea_mx($Ke,$Je,$Td,$oc){return
int32((($Ke>>5&0x7FFFFFF)^$Je<<2)+(($Je>>3&0x1FFFFFFF)^$Ke<<4))^int32(($Td^$Je)+($oc^$Ke));}function
encrypt_string($Od,$y){if($Od=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Od,true);$B=count($W)-1;$Ke=$W[$B];$Je=$W[0];$qd=floor(6+52/($B+1));$Td=0;while($qd-->0){$Td=int32($Td+0x9E3779B9);$hb=$Td>>2&3;for($dd=0;$dd<$B;$dd++){$Je=$W[$dd+1];$Mc=xxtea_mx($Ke,$Je,$Td,$y[$dd&3^$hb]);$Ke=int32($W[$dd]+$Mc);$W[$dd]=$Ke;}$Je=$W[0];$Mc=xxtea_mx($Ke,$Je,$Td,$y[$dd&3^$hb]);$Ke=int32($W[$B]+$Mc);$W[$B]=$Ke;}return
long2str($W,false);}function
decrypt_string($Od,$y){if($Od=="")return"";$y=array_values(unpack("V*",pack("H*",md5($y))));$W=str2long($Od,false);$B=count($W)-1;$Ke=$W[$B];$Je=$W[0];$qd=floor(6+52/($B+1));$Td=int32($qd*0x9E3779B9);while($Td){$hb=$Td>>2&3;for($dd=$B;$dd>0;$dd--){$Ke=$W[$dd-1];$Mc=xxtea_mx($Ke,$Je,$Td,$y[$dd&3^$hb]);$Je=int32($W[$dd]-$Mc);$W[$dd]=$Je;}$Ke=$W[$B];$Mc=xxtea_mx($Ke,$Je,$Td,$y[$dd&3^$hb]);$Je=int32($W[0]-$Mc);$W[0]=$Je;$Td=int32($Td-0x9E3779B9);}return
long2str($W,true);}$j='';$he=$_SESSION["token"];if(!$_SESSION["token"])$_SESSION["token"]=rand(1,1e6);$hd=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$X){list($y)=explode(":",$X);$hd[$y]=$X;}}$e=$_POST["auth"];if($e){session_regenerate_id();$_SESSION["pwds"][$e["driver"]][$e["server"]][$e["username"]]=$e["password"];$_SESSION["db"][$e["driver"]][$e["server"]][$e["username"]][$e["db"]]=true;if($e["permanent"]){$y=base64_encode($e["driver"])."-".base64_encode($e["server"])."-".base64_encode($e["username"])."-".base64_encode($e["db"]);$nd=$c->permanentLogin();$hd[$y]="$y:".base64_encode($nd?encrypt_string($e["password"],$nd):"");cookie("adminer_permanent",implode(" ",$hd));}if(count($_POST)==1||DRIVER!=$e["driver"]||SERVER!=$e["server"]||$_GET["username"]!==$e["username"]||DB!=$e["db"])redirect(auth_url($e["driver"],$e["server"],$e["username"],$e["db"]));}elseif($_POST["logout"]){if($he&&$_POST["token"]!=$he){page_header(lang(47),lang(51));page_footer("db");exit;}else{foreach(array("pwds","db","dbs","queries")as$y)set_session($y,null);unset_permanent();redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(52));}}elseif($hd&&!$_SESSION["pwds"]){session_regenerate_id();$nd=$c->permanentLogin();foreach($hd
as$y=>$X){list(,$Ga)=explode(":",$X);list($db,$O,$V,$n)=array_map('base64_decode',explode("-",$y));$_SESSION["pwds"][$db][$O][$V]=decrypt_string(base64_decode($Ga),$nd);$_SESSION["db"][$db][$O][$V][$n]=true;}}function
unset_permanent(){global$hd;foreach($hd
as$y=>$X){list($db,$O,$V)=array_map('base64_decode',explode("-",$y));if($db==DRIVER&&$O==SERVER&&$n==$_GET["username"])unset($hd[$y]);}cookie("adminer_permanent",implode(" ",$hd));}function
auth_error($wb=null){global$j,$c,$he;$Jd=session_name();$o="";if(!$_COOKIE[$Jd]&&$_GET[$Jd]&&ini_bool("session.use_only_cookies"))$o=lang(53);elseif(isset($_GET["username"])){if(($_COOKIE[$Jd]||$_GET[$Jd])&&!$he)$o=lang(54);else{$G=&get_session("pwds");if($G!==null){$o=h($wb?$wb->getMessage():(is_string($j)?$j:lang(55)));$G=null;}unset_permanent();}}page_header(lang(23),$o,null);echo"<form action='' method='post'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("auth"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);unset_permanent();page_header(lang(56),lang(57,implode(", ",$kd)),false);page_footer("auth");exit;}$j=connect();}if(is_string($j)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$he=$_SESSION["token"];if($e&&$_POST["token"])$_POST["token"]=$he;$o=($_POST?($_POST["token"]==$he?"":lang(51)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(58,'"post_max_size"')));if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_cache_limiter("");session_write_close();}$j->select_db($c->database());function
email_header($Xb){return"=?UTF-8?B?".base64_encode($Xb)."?=";}function
send_mail($lb,$Rd,$Hc,$Rb="",$Fb=array()){$rb=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$Hc=str_replace("\n",$rb,wordwrap(str_replace("\r","","$Hc\n")));$Ca=uniqid("boundary");$ra="";foreach((array)$Fb["error"]as$y=>$X){if(!$X)$ra.="--$Ca$rb"."Content-Type: ".str_replace("\n","",$Fb["type"][$y]).$rb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$Fb["name"][$y])."\"$rb"."Content-Transfer-Encoding: base64$rb$rb".chunk_split(base64_encode(file_get_contents($Fb["tmp_name"][$y])),76,$rb).$rb;}$za="";$Yb="Content-Type: text/plain; charset=utf-8$rb"."Content-Transfer-Encoding: 8bit";if($ra){$ra.="--$Ca--$rb";$za="--$Ca$rb$Yb$rb$rb";$Yb="Content-Type: multipart/mixed; boundary=\"$Ca\"";}$Yb.=$rb."MIME-Version: 1.0$rb"."X-Mailer: Adminer Editor".($Rb?$rb."From: ".str_replace("\n","",$Rb):"");return
mail($lb,email_header($Rd),$za.$Hc.$ra,$Yb);}function
like_bool($p){return
ereg("bool|(tinyint|bit)\\(1\\)",$p["full_type"]);}$Qc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$eb[DRIVER]=lang(23);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"])$_GET["edit"]=$_GET["select"];if(isset($_GET["download"])){$b=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$j->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$xe=(isset($_GET["select"])?$_POST["edit"]:$Z);$q=fields($b);foreach($q
as$C=>$p){if(!isset($p["privileges"][$xe?"update":"insert"])||$c->fieldName($p)=="")unset($q[$C]);}if($_POST&&!$o&&!isset($_GET["select"])){$zc=$_POST["referer"];if($_POST["insert"])$zc=($xe?null:$_SERVER["REQUEST_URI"]);elseif(!ereg('^.+&select=.+$',$zc))$zc=ME."select=".urlencode($b);if(isset($_POST["delete"]))query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$zc,lang(59));else{$P=array();foreach($q
as$C=>$p){$X=process_input($p);if($X!==false&&$X!==null)$P[idf_escape($C)]=($xe?"\n".idf_escape($C)." = $X":$X);}if($xe){if(!$P)redirect($zc);query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$P),"\nWHERE $Z"),$zc,lang(60));}else{$J=insert_into($b,$P);$vc=($J?last_id():0);queries_redirect($zc,lang(61,($vc?" $vc":"")),$J);}}}$Wd=$c->tableName(table_status($b));page_header(($xe?lang(62):lang(40)),$o,array("select"=>array($b,$Wd)),$Wd);$L=null;if($_POST["save"])$L=(array)$_POST["fields"];elseif($Z){$N=array();foreach($q
as$C=>$p){if(isset($p["privileges"]["select"])){$pa=convert_field($p);if($_POST["clone"]&&$p["auto_increment"])$pa="''";if($nc=="sql"&&ereg("enum|set",$p["type"]))$pa="1*".idf_escape($C);$N[]=($pa?"$pa AS ":"").idf_escape($C);}}$L=array();if($N){$M=get_rows("SELECT".limit(implode(", ",$N)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$L=(isset($_GET["select"])&&count($M)!=1?null:reset($M));}}if($L===false)echo"<p class='error'>".lang(63)."\n";echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($q){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($q
as$C=>$p){echo"<tr><th>".$c->fieldName($p);$Wa=$_GET["set"][bracket_escape($C)];$Y=($L!==null?($L[$C]!=""&&$nc=="sql"&&ereg("enum|set",$p["type"])?(is_array($L[$C])?array_sum($L[$C]):+$L[$C]):$L[$C]):(!$xe&&$p["auto_increment"]?"":(isset($_GET["select"])?false:($Wa!==null?$Wa:$p["default"]))));if(!$_POST["save"]&&is_string($Y))$Y=$c->editVal($Y,$p);$s=($_POST["save"]?(string)$_POST["function"][$C]:($xe&&$p["on_update"]=="CURRENT_TIMESTAMP"?"now":($Y===false?null:($Y!==null?'':'NULL'))));if($p["type"]=="timestamp"&&$Y=="CURRENT_TIMESTAMP"){$Y="";$s="now";}input($p,$Y,$s);echo"\n";}echo"</table>\n";}echo'<p>
';if($q){echo"<input type='submit' value='".lang(64)."'>\n";if(!isset($_GET["select"]))echo"<input type='submit' name='insert' value='".($xe?lang(65):lang(66))."' title='Ctrl+Shift+Enter'>\n";}echo($xe?"<input type='submit' name='delete' value='".lang(67)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$q?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"]))hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$he,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$S=table_status($b);$x=indexes($b);$q=fields($b);$Mb=column_foreign_keys($b);$Pc="";if($S["Oid"]=="t"){$Pc=($nc=="sqlite"?"rowid":"oid");$x[]=array("type"=>"PRIMARY","columns"=>array($Pc));}parse_str($_COOKIE["adminer_import"],$ka);$_d=array();$h=array();$ae=null;foreach($q
as$y=>$p){$C=$c->fieldName($p);if(isset($p["privileges"]["select"])&&$C!=""){$h[$y]=html_entity_decode(strip_tags($C));if(ereg('text|lob|geometry|point|linestring|polygon',$p["type"]))$ae=$c->selectLengthProcess();}$_d+=$p["privileges"];}list($N,$Tb)=$c->selectColumnsProcess($h,$x);$lc=count($Tb)<count($N);$Z=$c->selectSearchProcess($q,$x);$Zc=$c->selectOrderProcess($q,$x);$z=$c->selectLimitProcess();$Rb=($N?implode(", ",$N):"*".($Pc?", $Pc":""));if($nc=="sql"){foreach($h
as$y=>$X){$pa=convert_field($q[$y]);if($pa)$Rb.=", $pa AS ".idf_escape($y);}}$Rb.="\nFROM ".table($b);$Ub=($Tb&&$lc?"\nGROUP BY ".implode(", ",$Tb):"").($Zc?"\nORDER BY ".implode(", ",$Zc):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$te=>$L){$pa=convert_field($q[key($L)]);echo$j->result("SELECT".limit(($pa?$pa:idf_escape(key($L)))." FROM ".table($b)," WHERE ".where_check($te).($Z?" AND ".implode(" AND ",$Z):"").($Zc?" ORDER BY ".implode(", ",$Zc):""),1));}exit;}if($_POST&&!$o){$He="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$ld=$ve=null;foreach($x
as$w){if($w["type"]=="PRIMARY"){$ld=array_flip($w["columns"]);$ve=($N?$ld:array());break;}}foreach((array)$ve
as$y=>$X){if(in_array(idf_escape($y),$N))unset($ve[$y]);}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$ve===array()){$Ge=$Z;if(is_array($_POST["check"]))$Ge[]="($He)";$I="SELECT $Rb".($Ge?"\nWHERE ".implode(" AND ",$Ge):"").$Ub;}else{$re=array();foreach($_POST["check"]as$X)$re[]="(SELECT".limit($Rb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($X).$Ub,1).")";$I=implode(" UNION ALL ",$re);}$c->dumpData($b,"table",$I);exit;}if(!$c->selectEmailProcess($Z,$Mb)){if($_POST["save"]||$_POST["delete"]){$J=true;$la=0;$I=table($b);$P=array();if(!$_POST["delete"]){foreach($h
as$C=>$X){$X=process_input($q[$C]);if($X!==null){if($_POST["clone"])$P[idf_escape($C)]=($X!==false?$X:idf_escape($C));elseif($X!==false)$P[]=idf_escape($C)." = $X";}}$I.=($_POST["clone"]?" (".implode(", ",array_keys($P)).")\nSELECT ".implode(", ",$P)."\nFROM ".table($b):" SET\n".implode(",\n",$P));}if($_POST["delete"]||$P){$Ma="UPDATE";if($_POST["delete"]){$Ma="DELETE";$I="FROM $I";}if($_POST["clone"]){$Ma="INSERT";$I="INTO $I";}if($_POST["all"]||($ve===array()&&$_POST["check"])||$lc){$J=queries("$Ma $I".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $He"));$la=$j->affected_rows;}else{foreach((array)$_POST["check"]as$X){$J=queries($Ma.limit1($I,"\nWHERE ".where_check($X)));if(!$J)break;$la+=$j->affected_rows;}}}$Hc=lang(68,$la);if($_POST["clone"]&&$J&&$la==1){$vc=last_id();if($vc)$Hc=lang(61," $vc");}queries_redirect(remove_from_uri("page"),$Hc,$J);}elseif(!$_POST["import"]){if(!$_POST["val"])$o=lang(69);else{$J=true;$la=0;foreach($_POST["val"]as$te=>$L){$P=array();foreach($L
as$y=>$X){$y=bracket_escape($y,1);$P[]=idf_escape($y)." = ".(ereg('char|text',$q[$y]["type"])||$X!=""?$c->processInput($q[$y],$X):"NULL");}$I=table($b)." SET ".implode(", ",$P);$Ge=" WHERE ".where_check($te).($Z?" AND ".implode(" AND ",$Z):"");$J=queries("UPDATE".($lc?" $I$Ge":limit1($I,$Ge)));if(!$J)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(68,$la),$J);}}elseif(is_string($Db=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$J=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Db,$Cc);$la=count($Cc[0]);begin();$Hd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Cc[0]as$y=>$X){preg_match_all("~((\"[^\"]*\")+|[^$Hd]*)$Hd~",$X.$Hd,$Dc);if(!$y&&!array_diff($Dc[1],$La)){$La=$Dc[1];$la--;}else{$P=array();foreach($Dc[1]as$t=>$Ja)$P[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$J=insert_update($b,$P,$ld);if(!$J)break;}}if($J)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(70,$la),$J);queries("ROLLBACK");}else$o=upload_error($Db);}}$Wd=$c->tableName($S);if(is_ajax())ob_start();page_header(lang(36).": $Wd",$o);$P=null;if(isset($_d["insert"])){$P="";foreach((array)$_GET["where"]as$X){if(count($Mb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($S,$P);if(!$h)echo"<p class='error'>".lang(71).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($N,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($Zc,$h,$x);$c->selectLimitPrint($z);$c->selectLengthPrint($ae);$c->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Pb=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$F=floor(max(0,$Pb-1)/$z);}$I=$c->selectQueryBuild($N,$Z,$Tb,$Zc,$z,$F);if(!$I)$I="SELECT".limit((+$z&&$Tb&&$lc&&$nc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Rb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Ub,($z!=""?+$z:null),($F?$z*$F:0),"\n");echo$c->selectQuery($I);$J=$j->query($I);if(!$J)echo"<p class='error'>".error()."\n";else{if($nc=="mssql")$J->seek($z*$F);$nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$nc=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last")$Pb=(+$z&&$Tb&&$lc?($nc=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($I) x")):count($M));if(!$M)echo"<p class='message'>".lang(63)."\n";else{$ya=$c->backwardKeys($b,$Wd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tb&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(72)."</a>");$Nc=array();$Sb=array();reset($N);$sd=1;foreach($M[0]as$y=>$X){if($y!=$Pc){$X=$_GET["columns"][key($N)];$p=$q[$N?($X?$X["col"]:current($N)):$y];$C=($p?$c->fieldName($p,$sd):"*");if($C!=""){$sd++;$Nc[$y]=$C;$g=idf_escape($y);$bc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Xa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($bc.($Zc[0]==$g||$Zc[0]==$y||(!$Zc&&$lc&&$Tb[0]==$g)?$Xa:'')).'">';echo(!$N||$X?apply_sql_function($X["fun"],$C):h(current($N)))."</a>";echo"<span class='column hidden'>","<a href='".h($bc.$Xa)."' title='".lang(73)."' class='text'> â†“</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Sb[$y]=$X["fun"];next($N);}}$yc=array();if($_GET["modify"]){foreach($M
as$L){foreach($L
as$y=>$X)$yc[$y]=max($yc[$y],min(40,strlen(utf8_decode($X))));}}echo($ya?"<th>".lang(74):"")."</thead>\n";if(is_ajax()){if($z%2==1&&$F%2==1)odd();ob_end_clean();}foreach($c->rowDescriptions($M,$Mb)as$B=>$L){$se=unique_array($M[$B],$x);$te="";foreach($se
as$y=>$X)$te.="&".($X!==null?urlencode("where[".bracket_escape($y)."]")."=".urlencode($X):"null%5B%5D=".urlencode($y));echo"<tr".odd().">".(!$Tb&&$N?"":"<td>".checkbox("check[]",substr($te,1),in_array(substr($te,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").($lc||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$te)."'>".lang(72)."</a>"));foreach($L
as$y=>$X){if(isset($Nc[$y])){$p=$q[$y];if($X!=""&&(!isset($nb[$y])||$nb[$y]!=""))$nb[$y]=(is_mail($X)?$Nc[$y]:"");$_="";$X=$c->editVal($X,$p);if($X!==null){if(ereg('blob|bytea|raw|file',$p["type"])&&$X!="")$_=h(ME.'download='.urlencode($b).'&field='.urlencode($y).$te);if($X==="")$X="&nbsp;";elseif(is_utf8($X)){if($ae!=""&&ereg('text|lob|geometry|point|linestring|polygon',$p["type"]))$X=shorten_utf8($X,max(0,+$ae));else$X=h($X);}if(!$_){foreach((array)$Mb[$y]as$r){if(count($Mb[$y])==1||end($r["source"])==$y){$_="";foreach($r["source"]as$t=>$Kd)$_.=where_link($t,$r["target"][$t],$M[$B][$Kd]);$_=h(($r["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($r["db"]),ME):ME).'select='.urlencode($r["table"]).$_);if(count($r["source"])==1)break;}}}if($y=="COUNT(*)"){$_=h(ME."select=".urlencode($b));$t=0;foreach((array)$_GET["where"]as$W){if(!array_key_exists($W["col"],$se))$_.=h(where_link($t++,$W["col"],$W["val"],$W["op"]));}foreach($se
as$oc=>$W)$_.=h(where_link($t++,$oc,$W));}}if(!$_){if(is_mail($X))$_="mailto:$X";if($pd=is_url($L[$y]))$_=($pd=="http"&&$aa?$L[$y]:"$pd://www.adminer.org/redirect/?url=".urlencode($L[$y]));}$u=h("val[$te][".bracket_escape($y)."]");$Y=$_POST["val"][$te][bracket_escape($y)];$Wb=h($Y!==null?$Y:$L[$y]);$Ac=strpos($X,"<i>...</i>");$jb=is_utf8($X)&&$M[$B][$y]==$L[$y]&&!$Sb[$y];$Zd=ereg('text|lob',$p["type"]);echo(($_GET["modify"]&&$jb)||$Y!==null?"<td>".($Zd?"<textarea name='$u' cols='30' rows='".(substr_count($L[$y],"\n")+1)."'>$Wb</textarea>":"<input name='$u' value='$Wb' size='$yc[$y]'>"):"<td id='$u' ondblclick=\"".($jb?"selectDblClick(this, event".($Ac?", 2":($Zd?", 1":"")).")":"alert('".h(lang(75))."')").";\">".$c->selectVal($X,$_,$p));}}if($ya)echo"<td>";$c->backwardKeysPrint($ya,$M[$B]);echo"</tr>\n";}if(is_ajax())exit;echo"</table>\n",(!$Tb&&$N?"":"<script type='text/javascript'>tableCheck();</script>\n");}if(($M||$F)&&!is_ajax()){$vb=true;if($_GET["page"]!="last"&&+$z&&!$lc&&($Pb>=$z||$F)){$Pb=found_rows($S,$Z);if($Pb<max(1e4,2*($F+1)*$z))$Pb=reset(slow_query("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):"")));else$vb=false;}echo"<p class='pages'>";if(+$z&&($Pb===false||$Pb>$z)){$Ec=($Pb===false?$F+(count($M)>=$z?2:1):floor(($Pb-1)/$z));echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(76)."', '".($F+1)."'), event); return false;\">".lang(76)."</a>:",pagination(0,$F).($F>5?" ...":"");for($t=max(1,$F-4);$t<min($Ec,$F+5);$t++)echo
pagination($t,$F);echo($F+5<$Ec?" ...":"").($vb&&$Pb!==false?pagination($Ec,$F):' <a href="'.h(remove_from_uri("page")."&page=last").'">'.lang(77)."</a>");}echo($Pb!==false?" (".($vb?"":"~ ").lang(78,$Pb).")":""),(+$z&&($Pb===false?count($M)+1:$Pb-$F*$z)>$z?' <a href="'.h(remove_from_uri("page")."&page=".($F+1)).'" onclick="return !selectLoadMore(this, '.(+$z).', \''.lang(79).'\');">'.lang(80).'</a>':'')," ".checkbox("all",1,0,lang(81))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(62),'</legend><div>
<input type="submit" value="',lang(64),'"',($_GET["modify"]?'':' title="'.lang(69).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(62),'">
<input type="submit" name="clone" value="',lang(82),'">
<input type="submit" name="delete" value="',lang(67),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Pb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Nb=$c->dumpFormat();if($Nb){print_fieldset("export",lang(83));$cd=$c->dumpOutput();echo($cd?html_select("output",$cd,$ka["output"])." ":""),html_select("format",$Nb,$ka["format"])," <input type='submit' name='export' value='".lang(83)."'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(84),!$M);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(84)."'>","<input type='hidden' name='token' value='$he'>\n","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($nb,'strlen'),$h);echo"</form>\n";}}if(is_ajax()){ob_end_clean();exit;}}elseif(isset($_GET["script"])){if($_GET["script"]=="kill")$j->query("KILL ".(+$_POST["kill"]));elseif(list($R,$u,$C)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$J=$j->query("SELECT $u, $C FROM ".table($R)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$u = $_GET[value] OR ":"")."$C LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($t=0;$t<10&&($L=$J->fetch_row());$t++)echo"<a href='".h(ME."edit=".urlencode($R)."&where".urlencode("[".bracket_escape(idf_unescape($u))."]")."=".urlencode($L[0]))."'>".h($L[1])."</a><br>\n";if($t==10)echo"...\n";}exit;}else{page_header(lang(50),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(85).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(31)."'>\n";if($_POST["query"]!="")search_tables();echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(86).'<td>'.lang(87)."</thead>\n";foreach(table_status()as$R=>$L){$C=$c->tableName($L);if(isset($L["Engine"])&&$C!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$R,in_array($R,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($R)."'>$C</a>";$X=number_format($L["Rows"],0,'.',lang(7));echo"<td align='right'><a href='".h(ME."edit=").urlencode($R)."'>".($L["Engine"]=="InnoDB"&&$X?"~ $X":$X)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();