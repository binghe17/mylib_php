<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.6.1
*/error_reporting(6135);$Gb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($Gb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$X){$ue=filter_input_array(constant("INPUT$X"),FILTER_UNSAFE_RAW);if($ue)$$X=$ue;}}if(isset($_GET["file"])){if($_SERVER["HTTP_IF_MODIFIED_SINCE"]){header("HTTP/1.1 304 Not Modified");exit;}header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo"\000\000\000\000\000\000\000(\000\000\000\000\000(\000\000\000\000\000\000 \000\000\000\000\000\000\000\000\000�\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000���\000\000\000�\000aN\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\000\00031\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0001\000\000\0003331!31\000!\000\000\000!\000\000\000\000!\"\000\000\000\000\000\000\000\000\000\000\000\000���\000���\000�\000\000��\000��\000��\000�\000\000�\000\000�\000\000��\000��\000�\000�\000�\000�\000�\000���\000���\000";}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo
lzw_decompress("\n1̇�ٌ�l7��B1�4vb0��fs���n2B�ѱ٘�n:�#(�b.\rDc)��a7E����l�ñ��i1̎s���-4��f�	��i7������Fé��a�'3I��d��!S��:4�+Md�g���ǃ���t��c������b{�H(Ɠєt1�)t�}F�p0��8�\\82�DL>�9`'C��ۗ889�� �xQ��\000�e4��Qʘl��P��V��b���T4�\\�W/����\n��` 7\"h�q��4ZM6�T�\r�r\\��C{h�7\r�x67���J��2.3��9�K��H�,�!m�Ɔo\$�.[\r&�#\$�<��f�)�Z�\000=�r��9��jΪJ��0�c,|�=�������Rs_6��ݷ������Z6�2B�p\\-�1s2��>�� X:\rܺ��3�b����-8SL����K.��-�ҥ\rH@ml�:��;�����J�0LR�2�!���A��2�	mMT7��S�5]2����E�)�ȣ���8\r��*`ܯ.i��6U�u*я����N���e���U&�M��D�\n��#���%%�W`�4��8�j�	��X�Ck|2Ll��\r��)��Z;�Ӡt��C�7�T�JC�?��N��<�n�: (T�.+�U9e���[US56�eW��zH�����-����2����3�������C�`�>�˚ȏ��PF��S�����\rC�&4`��X1[�'���b	eY�tWi����:C��7c�޲0ꌉ�J��Ӗ�GR��V�|�ur��l���-�\r�\n8f{��=��9��giy���̣4�t8.�/w��}��2��,��{Z�������偔c3��^�@1d�Ղ�#��'�^�[�\r�(��(t�;�w��h�\n��Kw~/ͩ�g6J�?ǩ��v2�Xc�\r5�!0n�s`%�\n�r��nqPV�h@�P)�����H�-]����\ra�7p��	0�Y݋�Ra�S�(�����k\r�����!<Vϩ6�nf�\000f\"�Ȫ�\\�ʊ|9n��Kb���8X6O��FS�1G\n�Z{�b����v�#-(7����xpr-ȣ���|>1�@H)	!�)'��!f<V�;�l�8���U��| ᷔ�*L��cLu>�fBߌ\"q�<�����;���&����h Fi0�pdkU!!*r���-.�u�c��j�\"H3�(؛3j��*�s��D����:A��r��_�}d ·0X�E�)߬�����;�S�փ�mgl�*\rșP��(��{jp��9��9/�����^��l�����95��u ��a4�*'l��*TC��!N8�`�Di\"g%��B��A�� h��g��r��s�^���1h�0_�9�S�;�	f��% ��Td�ED��GT���R�20��%y��;7^~e㑬�R�:r�[�����q��&?4+�-��]sգ�{�ˤ=�\$��)�c��֦��ӓI��Ti��h\$4�kb�Ru����zamNa�\"����a\$ ٌ؊�b�͓ex����hu(��F�42�Xb\re��ݲ�N��)��S��'@SvJd)C��o�s�� ���P*gW:^���W+T���I�w�]�r����,0�\000r���g���7Uz�8�&UT\\2�6��\000r��p@7葭F��7��GT5R�UT�c�>�O�1��|�����{W����C�x;��^��#�iRb:Ǹr}�,fp%�u��*�HL�'�`@~&�0ͲkT�*����=������\nо܊�Vk�|ʑ�5�#.��3��:E��p�{�w�\r��Xt�}");}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");echo
lzw_decompress("f:��gCI��\n:��sa�Pi2\nOgc	�e6L����e7�s)Ћ\r��HG�I���3a��s'c��D�i6�N�����2H��8�uF�R�#����r7�#��v}�@��`Q��o5�a�I��,2O'8�R-q:P��S�(�a��*w�(��%��p�<F)�nx8�zA\"�Z-C�e�V'������s��q��;NF�1䭲9��G�ͦ'0�\r���ȿ�9n`�р�X1�݁G3��t�ee9��:Ne��N��OS�z�c��zl�`5����	�3��y��8.�\r���P��\r�@����\\1\r� �\000�@2j8ؗ=.��� -r�á��0���Q�ꊺh�b����`����^9�q�E!� �7)#���*��Q���\000���1���\"�h�>��������-C \"��X��S`\\���F֬h8�����3��`X:O�,�����)�8��<B�NЃ;>9�8��c�<�*��2�c�9���>�H�z�Oj�B'B���������5�,�P�b5�45��3��@��:�N+i�j��J��ڊ\\��	�Ƈ�@�>���4Xr(Qr�� R١ d�u=�t�A8A{�c\\��)��|ׁC4\n6�W�7(V4l6�	�9\r�vˎa�&:CK��!�-��p�:\r\000V�M�Q�#�K@�\000�.�ـ�Vy���wE�\"��f�|j�bgټF>ċ	BHn�ݺZ��B�B�\$�F0���=��kC-9���C��O��9^Z3\r�r�7��0�u�w��M�g�Ű��v2��qI�����p����h5c�Pyǅ�.��[���hV'-�Y���T����ݛ�:v����O&&6��Z���λ	rn�����Bc�o� �0�M����xz]Ԍ�Ս��!�v�dz/s���C�푦=�d9K�eVX�s:p�ш8�r�A0&i�)֤R\$�Y_V�4���z��;ia�4���lI烋���q�wlM(�����b)O&���xl&��Ó�F`��U����Ù�y�]N��PAx^+`���L���g��(���|8��,����)��Y-*h��XkwT��<��BQ[��=��tW��on��@c�d�B�׮�}U��>+5jW�FwN�&�6�\$� o1~�ש�\\	'Ҡ�=4@�D�h�R,DF��+�Ii���K\$��r�#ȇ�\000�!&O�>�B�˦)�(�:��`LO���2&	�Sk:(�.8�4h�	��_\000�u44���[+�E���\rB�\$-�f,�\000CO;`�oͲG>x�YS�I�@�A�_���9����	��?������K ��3d�˨�'s��L�]CY3-�Fbp�-.UDt���F��(�>�P:d�`Ȑb;��@:�g��jJHP�P�ʼx\r�P�hl%�4V\000��N��O5�G�K��S����Z�Q	Ive숳֍>���)0�7P�hL(��7 �٠���XK\rb,Uv\r�I��b��P\r���s�-S�܇I��UC���)�x9LCݨpF	���-���)=�IAU���Y!�!���'��\n`M�w\$2�`VO.lw%0\\�Su��e�@����ϑ�p3���%!�'���1V0aU�!�9D�B�a�p0���6\r\r�3p�.�txK\na`�D@>���\\'�I.��Sh�CP!���;�[bn\\\r���������l��8�7�,hQC\nY\r�J��XdC d\nA�;��fF+�Ww�4LP�ɻHA�!�;��&V̲y��65��z��=��C�r�mĊ�i`ˉb�\\gyԋ\$#Q��mt�s�\\�rs�Y��\000y��㧣�KC@iŧZ[�yp��C�]�l.@V�8\$��Njp�:Ic����}�4K���^��4�)��8�\000S4��⤡ohR���\n�o:�Tj�Y����֕�gmFp�J�E4Oj�����fp�vy�PP۽%���\\3�G�pM\r��֨-��g6�Oa���jٰ�ƌs6?/i&��!�3e�GU7�m\r�6��I��@�Zs��nN�?!\r�N�-7�����5!B�*������.��a.�����B��|��o�Hv��轉�M�X�Z��n��h��ӱ��I�8/HQV�'r�%�M�g\$\$V��Gv����I�R�(a��B�N��H����7%�P�ߒw~S.g9Z{���O���??�P������{!�bXJ��W'��hrqD��@æ�\$9�W6f��0औ@b��B�_0���b.�&�XMY�~�B#��n�c1��&1S>��}�%�ܭ��o��J��e�Ȅ��\$�\"Dx`���qIXDb0��\000}�(0��C�T�F��~��#���+�W�R�i��!�;	�\000������������NHi�����0��4(���\"���܍�Hp�F�i�g���J(��j��\rc@���\r\">�eL�/���\000\r��X��H�� �L�o[�B���\$O�V���a ]\r��f��b���I�����&��`��oj��H��L���πЃ��ʟ\r��� `)��N�jj�`��d��(d�F�]m�>�*�%jH1N�No0�(��o�h�ؠRLh�eL�Y�L����\"|��JH@)+D��u�^ĠSϐ��Ek�B�p�0G�xbC*��&��A�l�{q��ʏ\\���8�C�i\nb�*p1'�V�LvxP���JdXʂHP\r�����[`�[��\\\000��-`���(F��EĄ�f�\$\n-�� ��ҧ�򻣈��`6`�&rj�Ф�f��&�lt���\"�\r����J�f�C(��t�PS�&�1%�&2)�Ø�I�(��&�{&R�)R,��\rRh���X\r��� �.\000%�*��+�J'�NI\r����00��S	�1��1�f t\n� \\#\\6 �	��\rDo2�S@ �E4�L c�	�:>���bE2k\n��<�uEX��0D왳0\$@�CO\\�2�)��	�\n�\000��:\000R��F�/�8��0�K1��	)-\$�p\$#.�����Y��[�:�.F\000Z?������\$�) �+S�s���s�8#d<@��\nT���?+%�7�2ӊS�T�^;�,T��L����7f]C\"EC�� �(.��aTLi�8��I�P�޷³D�6`��&�X���2���%!4~�PL�F*�D�\\0fXӴ�dX<C�t�4�P��\n��3�R�h�N0 �ӊ���P�R�P���Q����W�����\\��2��H�	��\$�O��ff�<�i;���t�di,�E��M����i/Ԫ�L\000^�F�u(a��J�ypZ;�����B���`\r�ܒ� ϔ��D���	8i��:�	���l�����d���\\�p�q���������0��d���JE�%Kt��L�	�:\$�\$��Qo7Q��LTd�<��\$5�[��L�d��L`��W(rfe�IU.�FP�`h�d�>����/�5\000bΤ�#�@�UB�`�����:��lK%�c�z��3)f�^t��\000`#�_��r�0(J�2�\rf�X�;H�HC_/���%i��:�/ ����r�)�\r�D8����\$ �O��l��)�P��Vck����kl�V�66��\000p�a]V�@`�I�\$#�p��o��9�\$��\\����:+��S5��\r�^���):!�ge���o�(�eH��I P���k�3�LRs�V��\n@��\000�K�.��0\"#>(�QDt�D�/;�<W\"�ٲ�fԶT��0��`RΜW2����r�f��z�]{�|���_ER\000YG|���C_qW�c&]UH�|�i7'jV�~�j�k2'oIo`�qC��U�JG6�Z�5��V�X0����� �	��8.*�P X��#�86�pk0�!�8��7Sc���V��s@�\\>�����\$���)�JҨ<K�C[.T����W��~��\$����П��L�i�˿z+ ר�Q%fF?�W�K��dMHo%�\\��t`��Oe6ee��c�y�Pˇ�\\VQ`�x~6-��������`���\$&�ՠV������r WX\"� Wc��xg[�ks���F�ɩ� ��W��i�\n\n츳�U�{�9VO�����φ�ž\r����\r(0P;�C�c�qi���Ž�\"L�xb%���k6T�\r�P�j��GZ0R���1����U��0\r��Y����0�Y������x�/*�&%Q�G;L��_�ш��(b�?��w7v\r�z��&Y�H�T�`<⧟:�>��\r`�\n�&��(�@/cA!1����4�R�,��Y�,��\"Zo'����F�:������I�I`Wvⓡ�yw��D�gy�`�*�1h�`٫��J7��:z-���Ľ��᣺�d�Y�uì�#طK׫��խ�B��F��A���:L�Q=n�^n���,�uJ��wvz��K����7qwZ��M�����+��37���8BmT�@");}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo"GIF87a\000\000�\000\000���\000\000\000���\000\000\000,\000\000\000\000\000\000\000!�����M��*)�o��) q��e���#��L�\000;";break;case"cross.gif":echo"GIF87a\000\000�\000\000���\000\000\000���\000\000\000,\000\000\000\000\000\000\000#�����#\na�Fo~y�.�_wa��1�J�G�L�6]\000\000;";break;case"up.gif":echo"GIF87a\000\000�\000\000���\000\000\000���\000\000\000,\000\000\000\000\000\000\000 �����MQN\n�}��a8�y�aŶ�\000��\000;";break;case"down.gif":echo"GIF87a\000\000�\000\000���\000\000\000���\000\000\000,\000\000\000\000\000\000\000 �����M��*)�[W�\\��L&ٜƶ�\000��\000;";break;case"arrow.gif":echo"GIF89a\000\n\000�\000\000������!�\000\000\000,\000\000\000\000\000\n\000\000�i������Ӳ޻\000\000;";break;}}exit;}function
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
as$t=>$Ha){$kb=$Za[$Ha];if(!isset($kb))$kb=$Ie.$Ie[0];$K.=$kb;if($t)$Za[]=$Ie.$kb[0];$Ie=$kb;}return$K;}global$c,$j,$eb,$ib,$qb,$o,$Sb,$Vb,$aa,$jc,$nc,$a,$tc,$Qc,$hd,$Pd,$he,$ke,$pe,$we,$ba;if(!$_SERVER["REQUEST_URI"])$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!="")$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$fd=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0)$fd[]=true;call_user_func_array('session_set_cookie_params',$fd);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Gb);if(function_exists("set_magic_quotes_runtime"))set_magic_quotes_runtime(false);@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$tc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','id'=>'Bahasa Indonesia','ru'=>'Русский язык','uk'=>'Українська','sr'=>'Српски','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','bn'=>'বাংলা','ar'=>'العربية','fa'=>'فارسی',);function
get_lang(){global$a;return$a;}function
lang($v,$D=null){global$a,$ke;$je=($ke[$v]?$ke[$v]:$v);if(is_array($je)){$jd=($D==1?0:($a=='cs'||$a=='sk'?($D&&$D<5?1:2):($a=='fr'?(!$D?0:1):($a=='pl'?($D%10>1&&$D%10<5&&$D/10%10!=1?1:2):($a=='sl'?($D%100==1?0:($D%100==2?1:($D%100==3||$D%100==4?2:3))):($a=='lt'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D/10%10!=1?1:2)):($a=='ru'||$a=='sr'||$a=='uk'?($D%10==1&&$D%100!=11?0:($D%10>1&&$D%10<5&&$D/10%10!=1?1:2)):1)))))));$je=$je[$jd];}$oa=func_get_args();array_shift($oa);$Nb=str_replace("%d","%s",$je);if($Nb!=$je)$oa[0]=number_format($D,0,".",lang(7));return
vsprintf($Nb,$oa);}function
switch_lang(){global$a,$tc,$he;echo"<form action='' method='post'>\n<div id='lang'>",lang(8).": ".html_select("lang",$tc,$a,"this.form.submit();")," <input type='submit' value='".lang(9)."' class='hidden'>\n","<input type='hidden' name='token' value='$he'>\n","</div>\n</form>\n";}if(isset($_POST["lang"])&&$_SESSION["token"]==$_POST["token"]){cookie("adminer_lang",$_POST["lang"]);$_SESSION["lang"]=$_POST["lang"];$_SESSION["translations"]=array();redirect(remove_from_uri());}$a="en";if(isset($tc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($tc[$_SESSION["lang"]]))$a=$_SESSION["lang"];else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$Cc,PREG_SET_ORDER);foreach($Cc
as$A)$ja[$A[1]]=(isset($A[3])?$A[3]:1);arsort($ja);foreach($ja
as$y=>$qd){if(isset($tc[$y])){$a=$y;break;}$y=preg_replace('~-.*~','',$y);if(!isset($ja[$y])&&isset($tc[$y])){$a=$y;break;}}}$ke=&$_SESSION["translations"];if($_SESSION["translations_version"]!=1126468046){$ke=array();$_SESSION["translations_version"]=1126468046;}if(!$ke){switch($a){case"en":$i="A9D�y�@s:�Gࢩ��b6@�����l7�L���i���D�	��m:�c�������`���s	Nd)A2̳�q�� 2ɎgI��p:AF��i�D��9ȅ��a��g:�L�Xa��P��m�[���7��CD\n�t2��f���u=��)GK\r��r��N:ܤŏ9���p�:I�3�Vϙ!V'*�8�t;�\r`�9��m��,�|`(�d4��X�;p\n(\\�{���o����m�G�tkfS���N�\\��U�K1p\000�8�Ӏ̞r�PP�b-�PQL�Ռc@�#�������ݍ� �m\n�����\"���@Ón����2��K��b�@-��޿������B���\n��b7�Cbq�/-�zD���P�\$Bh�\nb�-�2��.�#hZ29�c���o�,�����\r�,(9I.L;#`ҍ�b��#/cx����b�/��-Q�ܑL�<Ѓ��ơ�c0�6\$O����Ԡ�8AAP�ǊB�%��0�\r�P�4�# X\"������G\$S��=�j�3��1LX+k��/�Q�Ix@(	����@'AJ8����@����7���m�☨M��\n)%��%D�(��\r�5u�IՊ�#�@��V�i42M��%Q�q%�#\$*�ՠP��G1�8���C���V5G���90\"D���d<;����\$����#c�Ѝê��M:<��Q@@��X������e�8�3إ[!;�ď�k�ś3H-Yb�C�T(��6iT\rL7�0�Onw��q�b�ԙ���\r��K\$�:�l�mٽ-�Z�D��`�����K����_�f ±�F�OCv��{���&��\$NJ�8<Z�A���33#]3��owF@�zd���!��|<q0X��搤\0004_v�݌ȩvuk2��:SX�D��j	�\\��~CJ���[O�\000";break;case"cs":$i="O8�'c!�~\n'N�!���4�\r���@n0�L5	�(o:���!p(�a<M��a���B���a�\\����I��s��#��@j�	Nd))N�#��L��֑%��FIr�pb��u�x)���Y\"���u6�2Q\000(�a=M`����:�)���1�1WƓQ�-H�Q�B	��o���m<� ��j�pQWi;q�Ù��k:N�S/9� �&��0���	�̘2���ь�\n!f�)r�S��T��9��m䜍<��6��CI�G���u`�A�ro�C�&�dp����x�95/�ְ\"�8b�)��'3��1C[v('�Ș(�B7B�PJ2�Ɓ1K�1LI1�0����焁�\\��b�/�ʆ�#X�2����댨x��0\"bT��B��H���B(Z6�(�'��^�>b�!��[+B�[538�46�#�4:��!��873q �/�#`\\�S��@L��?G�T<���td���-��ҴB\"���q�G��@t&��Ц)�C \\6����[�B��2AE�7�R�=\"7c`�9I� �d!#�З�`�5��\000�)�B0\\OPbj�2F6�Y2<���̕�&�19o�&;1z�5�r`����%�6�cr�\\�2`1e�<�&�qR���;6C�������!��,��,&��#��f��~=�Pc00�ix@a�HkH��8;=A��3x!�@2'��8`�V{�2hXȅ��M�1�\000�\$\n���[�\nPR�Γ8�')�\\�\nx�*h�P�m�O\000�w�\"��]�p\rdk�2��4����o`�\$�E(9�	��\n�#���s\000�A��5�D��@0�zPP�?���,�u-�s8��(���r�xP�A��.I(�8ʞ_79ul@�Ǒ��=|Honh4��b<�����6l�E.Q��1%\r�]	te�0֔��G�mGۂґ'���J�}*q�ܨ�Z=\n��0���kk��!2^p��u�-�5����\rǴ���@J����\rB��� ���� ��as�=\nf�8k\n���0,�C��@\$�`���[���M,�d�EJ�L9e�=���Y�/���^{��+��ؘ��i�i!�X��G�\nj�Ph�����uQ\$x�5�猝^@y��5� �FP�@@\$\"Hņ��u-�(�գ\n��~����#S�C�)A&5���\$�|<��8�\000PT��݌Q0�ђ�l\000�";break;case"sk":$i="N0��FP�Sa��F��a��y��r4�\r�	��ab�E��i��i6��&�tB(v7���P��eb/�f�	����Q�@%9��p�T2\"e2��gC�Fp9J�FH�*i3�f��Szi0�(�C	��95�db\000Q(�z<��EcɊ?!S���6��NGJ5�C='f���i2���:]�Q4��YU���8�����T������FaNf�(�*�a�Di��\n)d7s�B�J�UҞc\000G2�ͦS�czZ�KM�b)��t�`M�]>�W8_�]ٿ4%G3L�\n��T�6*����i�0	̲j�#M8�ފ	�d�&���P�И��\000Ă�LAD��M�cS�;C��\rϰH� i�+��4'+J@R�CX�̍��n�<�0�0bP�B�1����H`P���\n2	�\"x�7�c���#�:/p�|�Ȍ\n�\r\r��K�b\"��h^���0LC`\\��`�@L��61=0�+���t\r%A�cE\nR�K,������	К&�B���p�c�t9� �/�\000�Kej��z6;�;��Pb'4�m��5�a\000�)�B0\\Of*V��26���B��Q�T�̶\000�(���1��6;��2\rc���?�x�~�C+�7R���\"�%�f�`c���͠�q-�Y�@�R��!�C�k,0�bu���3��e���ʲʳ�(�@��W���X��(�5\"�kN�-Ym����}AQh�1[�0�\000P�)�V��l�5툠'�b�Ad�+e�-awɹ�AC{�c��a��\r�j�2X0̰���2�[�ӄ�c�R<�{59	b)�!��(��NP�E�o��됍#ִ�u@�um�m9b�J�,�\000�j�������\n�R|�Z�������pe\rC�y�.���Ӛ|b��o���0�!h�\000;`�;\"Z�F\"&P֣�[Ip䵫��Zq	�#s\$0�Bs\\8zaiБ��@J�/RnQ���x�Z�Q�`�A����]����9�lvb�P��?:\000-���6RD��#Ɏ�U����yn��5��(�#��62�P�b.#n\$��f��bsp�U	��G�\" �t�!�zE\r�mPh}�����T.1��`yi,A�?�BHcN5f�查���qL��%��ܗB(x� (\$�J��\000�HK!����[��*{aR�z�Ѷ\n�)�#�N�";break;case"nl":$i="W2�N�������)�~\n'����9��i5�#)��a7C,�l7�L�Sp�M0�\r&ө�Fo2�M�!�7��Nfs���t�\r'1\000��B��	������d��3���#I��n��Dx�?6W堩qP�a�[G#���k2�ﱡ��� �͑Z���x����1�4�Q��g���2e�+�6�e�����+��N�~�,'�\\u�0d!q�Q\n�a4��Z̰�\n'@������m�Y��db=�\"�\r'K���9��sh(�a1��z1ˀI7J��,\\�3�܊�c�'*��\$�h�λ�\000�0��X�C�0�7\r���h7\r�PH�� g� P��!�r�;!��)�i#?*M�俈#�ɁB\\�\"��k��\n� �N��88)´��0ԝ����+��<2�2[\r/�iZ[�S\$�4��dh9SJ�\rè\$	К&�B���\$�6����E�B�*�o���9�r�9��,���`�9F�l�'�O�b��#&�\\K�H�:�����h���\000�8*�,�R�\$�9h�w\n�p���H�@��VB*�Hq�^��������NHjP٥��^F����k:F���#R���(���,iK%�e�ǲ*�k\"�2J(	��9̛6����[\npR�\nx�*�\"x0ܗ�����}b5���`4J�J4�Y?_@�`�\r��j�T3֩⮗	0l�(��~��@H�&�i�(۟��Į3ٮ(�):�h@�\rS��8v\\e��0{��u�9�7f�g��֛��ĺ���lw�O�\000��êM�f��j#.�:%� �1.b�w1�@�z2�Y6��N���JI*a��h��/�]���_�v�i�I�t�#Kz-�S\n�7���� ��:X�\nH���/O:4�\"�r4y�XE_&�_Kό/�J��#P�|�b�(�VX���1�#\r��JO;�i�2J̓\n+F�S62:T�7!ԓ����@PE�9#�p]�S�����˙S0�\000��2&ܦ>X";break;case"es":$i="E9�j��g:����Q8� 2��y��b6D�lP�t0����v7��EC	���X�Ͱ3�rd�I\$҈�HJs!J�'),�n��f�,��i7�k�@(�r4��d6�K:M�	`�s�D�!��.NrQB� 3e#�@u7D���<XM�cy�\" �Ш��y�J4�%ECLR%83T\r&H|z l��βt6�m2`�1�K�<�\rs(�a�`AD*�`�\n)L��9��e:�j��33 ّm�J��U���9�a�7֍��Y��!�g//�u2�95�*�6��8 oSz��\000�<� LA��<�J�H�� g�-���cI�Y�m �� ���,K��6�#� �qF�����9B*\\4�� ��Cs����# ��;���;\r+�2��B�*8	L���Kr�H�Cv�B@�	�ht)�`P�2�h��c�0��P���d+3-X�4�O��#,M�\000G��c*4��7�k@!�b����h��\000��\r����r�D6\"��(�c+P3*�h��8�P��4l�k(�)T�1SȊ@�\r� F.�\"H3�M�-����=�b&��+�I\$�(�T��ò4�\r��P�-�ЌcB�ԃ�Mb�Hst0�*Sm�����,+�,V�(	�\n7��މ	�R��H\"�9��z0���x�*V�r�\"��A\$�1:�9# �=_�:Ȗ��@��#�aHbL��@5v#G�(C�D������SN�+uC��멐޶ߒ�U�?�zR ���G;@�~ǘ30�,rS�袩P�������sG�7���Z�;�ý�~����?�q�A��6�c6��K��Fǌ=0Ǐp P�7�ah�E�x��%hUuh�	.�5�U��*6����]��;j\$�c��ѽ\"L�.����m��j��Cn�4�1�p9�k�}HnK\r�BB��#U� 7~w�4���x\"o\$���U��_��i���J�\n*h\000�\000���kЃ\000٨3�Ôo8\000��;��H\000RJ5H�\":FR8CV�}����K�nH�!�	ժ�|e���'�� �=x���&p";break;case"de":$i="S4����@s4��S��~\n\$�F�	��n��!��e4��SA��e9��2sp�M0�\r&�	�A�LQ�v>i3��kc��i9�S�\n]>�M�T�L2�n����a�\n'���(� 7A����]���\000����a�AD(���z:����I�yh��\"�چ�p���u���Ǫ&Z�Ҫr�JM�u�+�b�h~xT���E��e>:�D�X�� :l��q�ˆ��,5!�N㞎��X(�e7�x�+�2�7��L)����W�)���&��W����+0�@�'���9���&:)��/A*!(��>9�C�P\r�x�pHDA��:��R�6*���C\"��\n.�0@P�5����#��ģO���H�\n���:C(�3\"\0003e�Y\r�C��/B��!.3�\n�@�%bO2q�]	�sL�6sh�7�S*�\rPJ \$Bh�\nb����p�5RP�N�؋<2�:�c���<#d��!���!�b��\n�|�0#<�Q(t*§�\"#<�h�F0n9-+��8L�t�K���3\r�4�����X�#l���#x4��r�Z�,p3�c ����r�u�cpX��3�2���f3\000P��Vl�N7�܋�H�hI�{��:����¡��0��)�X�,�C\0000(���+��\n@�⸾M�B���2�\r�0�\nx�*1H��0�7����2٣�>Ġ�R����7m�L9(*�b ��0\n겗<�9%�m`�:��{2�@����lHT� o#��/�{���CD�:��ĵ?�d\"�d8��Z���b.���0(e\000-���\n�����B\r�b��<P�+�2؊7���B�@4�ɲ�(\r��\"\r� 6\rqd�70���uZ-<�-P�B�������N�5\000�l����U8;���z��j�DI	1(%Im�9B��M<�0�_MAj���W�n���jda]g�U���c\000(���@�N�\\��7�e�8o\"���*i� ˨:�JmdĜ1�0�a6A<?3<C\r�I|��(:�PB�����\000��[�Ӏ��0\n�\000";break;case"fr":$i="�E�1i��u9�fS���i7�I��o9��&#a�@d�b��l0A�&3A�.\"q��(6�O#������L��	Nd)�2=*�K�B\n0� t9A���`v4��RCI�!=N�3��=���	��u2���I�����Y�t� :�\r��1�Om�O览�4o�)T�}\n�T���S���@��Nf��\n'ͦ#�D�G��sFj\n!�,5u��\n!Y�;^9I����N��??eϬK�7���2u��ޫs�M�y���a��mGM��P�s�O�,�܆'+s켶#��2���69�h��6�`�4�eCj�#:���\000�1�C�DQ#v�-��7�A j���h�B�ʖ!��^7\$)Ke�*J��6�O�H�\r�P�Gc����RL\n�C��ݢ���ڵ�0T!hH�7��7 �k_BH�:�&nÞ�Nx���<C:�p��(��S>N.x�'3hܺ��@�	�ht)�`P�5�h��c\rL0����1�rv��#2�ުh�2U�{l6+����5�a\000�)�B2�8'�\n�0L\"n2��u>�I:��\r��؇����6�3�,�ځ\000�'�u����2�_^��<]t�à�E���o�La�_��ń>�K�@UXЃ�I���Bl�\"��0R����bܤ2l�D��@�c������)AN�����o\\�*\000�'�b�h��\000�9.��\\9�H��/�=��!��X��\n����&j�:�)�n��:�X7%K���\"/nb()�<�7tT���k��#m\000��EL T�J<��Och��\\x���|���QVX�1��W9%-YU�G[�p�\nn�3�#�~����q�\$��D\"�kȼ;����v�(�NT̖�ܬ��|�\"�W{p|���4_5����4;����ϋC�`\" ��Z1�c��a٩S2���ܖ	93~d����Pb�;+|��3��W�T8ȉ��X*I ��\"�]z������OU�4��Q�PdUed��(���|8�ŵ׬b�(\"�0@v�ʙ�\n6��L�wN����)n�1d���O	v&1}A�C\"k\nZ�Aؚ��_\000C\r�`�1�,`! 0�#�>��	���*2r�\"��XF%�9��C\000";break;case"it":$i="S4�Χ#x�C0��&i��t7��S`��i6D�y�A\n:��f���L0č0�q���L'9t�%�F#L5@�Js!I�1X�f7e�3��Lv:��\000�|(�i7c �tD�a1E#2i12�g:�AES���):�f��5*�-���3�\n�:���\n�\rA&*N��^�t�V��s�ޛ\\:�a@�!��IUmE3�(�g4AD*�\$�\n)r�s)��4ڬ��Q�\$���ڢ���w��D�; c0��:�a��8NS#w;TN���1C,��U6d&�^�%2G�h'���R�G��p�xH�A��:\n��7#�T'�M����i#T �I�)���&\"���0�-Bx�3�J����CJD׈+��3��|V;7 S�2�#\n0+�<0�ϳ�DH��ܩ�0��x\$	К&�B��� ^6��x�<̃Ⱥ�x+E�H�4�C�R2F�S�9Cn���B��5��\000�)�B2�����2\r�p@��iHؔ�C�4��\"���(�3E+K>1���1�jP�F����U/,`��#�\r^9#K0�3�t�:aE'��X.j��IrT��5`�\\\"cs�EP�7�i4һ�����;�_e��R�9�H��\\+�@(	��:�����aB~�C���I��_,�!m77��)��p�E�uĀ�F�\r�̹�J5I�U���Q6}H7\"�@���)������6��,ј9ȋګ���l\"�xޟ�b�	�{~��\"uԹ*�Ц�Q0ި��Y; 7-:�ْ�J�o\$a�dN�\n�j?6�,�#��[\n=�)(�!U6��\\��	􏼍)0�\"C~����{��B���N��\r�PӦ!#eX��2\000�}W�#m�F���u�M#0�4���J���6�AN-\\˛\"j��'5�|����w'�s�XA�s��A�A��#m�	3��C�ҕ��*�JN7��?�'�8�证J�m������C�	؀���Ijh ���d��O����&�SIxgBR ";break;case"et":$i="K0���a�� 5�M�C)�~\n#M&�H�����͆	��m�D\$���Z��1CX�M0��r�Y�Df�EgS�����R�N*e��M'C��\\t��\r �y��g�G\r�����\r�A�\nU2�\n�fXm�u:AE	Y����b��A��2���C)��A�ND���� 2̍8keX�.�N�&�\rAy1L��q��b�N�֩����2��x�\\66a2��6�B��N@����k\n&�C�T�)̦�m��V�2gM�J\r1:Um٣p���F� (�o�&g3��J�ޤ�V�=̛h4�CS�+\r)Rl��C\"����J���X	���,(7\r�PH� i� P�:&`P�0���H��B�������K��ܶ)�Y�B(Z�0�Sl����ʕ�1Цɰ��^0���V)��\"�.#�*̄@�`tBip܋���\$Bh�\nb��\r�p�<σȺ�>�NR\r�㈎/R����c��#�s���Ύ�\000�)�B0X������.#:L���y*�)s�B3�e��I@ܛ0��\\)�����ㄟ��-.�1���^>�M~����λ)���P��\rMU�c�ɾ�p��\rj���ň0AE:�8���64�##HT���Fu���>/�e��(/���0�J���)��m�1\$T��h,�JV�'i�]����6�.�	:R�'�>Qm�)�8���:3�0ֈ�k[ʵ�*۹F�[W\n`��L�.j7��0�5����e%�jy/F�#E]C��:ؕ�WI0���*������x:\$L�6m���n-x�3֍es+	�C��r��L�K���Zv3��-�@��TpZ5����6 �b\\\$�� �;�B�K�r����jV�Ac+�h��6�떰4K\r�?H\r�GW���s)���y��&�\r�J\\&A�z0��M.�P�`����=�����R��*5��X��c��yKUd�)2uDx:�T�Y3!�L�s@N�\\+Ŵ) �K�	%���";break;case"hu":$i="B4�����e7���Q8�m�C|@�e6kh� � 0��5	�2.D�	��m�\r0Y��0T���A\000�\nB�J��a* la�N�SѤ�(a�'G0Q�td��a��q�P���@�y��D�	��n������Ba�3�)��K9���Ҥ�t�Ȥ�JE*�N�����CHY��JӁ֨S=I\r��\$�%��M&F*D�����pT,r���,5���t̱Y���\n&LΜ}X׃�kAY#fRݖ��Q�v�k��5 �)��=�-)��5Di4�`(�6��y��0��(ȃ1c�@�,\rP(�*�p���\\��b	j�����4?�x�9I\nt7+\r\rq:�P�i�X�Cbw\r#�b��\n����K��##�*\$���<���t9B�߿��B7JZ��<p@�\"20@�\rr����<1ȣd�6M%��6M�<�3MT�\r�#��7���8CkF-�4h�.��h\\2G�k����午��ʎh��J�Q�2���)�\000�7�O�Z�apA/N�\$a�CP份Q�䱎{ש���#<-K6��p�0��Bv2�hP��9�5����,�T��@��x�9GHH�2�m�k�(Ry\rRh��:=RX��T��SU#d�,)�ڻg����3���mk�P�#<�:'���(^+��� MM��/w\$I���9���B(	☨�?�CV�E���à��/V.�'	����Ò��s�/�0ʘ��Hñ:�0��b9?�[��37�l:O����NH<�Q����cY�3��A�[�I#3��Ĺ|�*�&��t�9·<�?�˗ ����0�e���\\>�����a�ʸ��l�d��v�O>'}���@�ߎ�����e��jH֝\$���,7*=%F��%�O���^�LN�\r�l��~__뇡Ȃ\$E�~G�] �G�	`,F�=�L��jd �#�(Ci;Ű�����\r�ߣB(L:gJ���U�L�o�\"G����>����f�2'~�\n �@��I\\6�\$��NAM8�m�B�\n��#�uD���q�Y�BA����pHm���!ŜΠI\$�b�5�����	cA<�)��{��U0oz�'��(";break;case"pl":$i="C=D�)��eb��)��e7�Es9��n��͆�Y�@b<�PF�`�m7�W����\\\n&�Mg3ɴ�l7D�)��)M���x�\$��R�l�%��`�h\$��u�AF#)�@z6�b�Z�t0�\r��\000(��L�Mq3Ɋr=�#y��peG��d7L�J���~2�!AЂ�L�@�K�H�T�����6y:O��Y�N:�r'��\n\"m���s�ftym��99m�p�(�e7쎇+(��<���MA��\n*��&�\\pH�ȍ����g:��3M��a8l7G�悍O��� C����P��7H�t�/������5�L)C�5\n�P��a�c��.i0�pHE��)�C�Z5C8�=!��؞.b��:>.�Ұ��R\000<��r��{Z�;Ajl4��x�2#���\n�;t�\r��p��F!\nڵ�J脣q��<�i.�B�,�0�p9Τ��O3ܰ�O��'P��+�iz�/\"@�	�ht)�`P�\r�p�9T����\r�|�(JC\nTK�����l�Z��x��!�#�;�J8ֈ�)�p@)�q ���tU���:��\n����s���uK;�r�ڐ�i���i�΋�H\"\r�:��\0004�a\000�\$\n	x�\000'V�@�!b��>��Lۖ�L��#-w.�5�F����\\O\".�%�*d1̃%F)w-�*�P7���#��%��0)BT�,P��\r��5��3��Q\n�B�v�\nHR�c���X/���81*c%�Q��A����IX�P�6����1@\$ʎ���`Ǣ���į�˂f�,|�5	��3\r/�,1�#P��2�P��P�����9����<���̫��E��r\"n4�w&���\"����X�2��#��H��L���8��{�8*\\\"�޾�f�~qC��:�;i��>ky���+�;�*��ذ�M�<e�����u\r��GH��oޣ_˙y�%��0|��d������A�(��&���\"(D��;WpZXzO��(�D����x�	ͻ�!%8�y?A׌� ��1��!�v�k��uK�������yw���ԛ���D�6V��[�[!��|��n#�a��*W�c�(o����#љ�[�����\r�D)�'r=;W�u�z[8�@%�@J3-\000)`fnN��t5\$<�P�S�(E&p��H�ˡ~F�\\����\$H0k\r12'����i��ڢT�#��g ��\000";break;case"ca":$i="E9�j���e3�NC�Q\$�p7��f��� 0�\rGSq��rM�1��x2����a�@m4�%����m�%&�)�\\d�I\$҉\rS��2��#���\"q�C6��M'�Y��&�F�9��a6��cA�@h��'x�l0�Ő�!��8N��d��a��X)��u�<)����)1h)��t2��f�(�N�P�f�vx�Y��ʆ��356	�X���1���!�< �,X�gC�!Y����|�#�o�S��L��N`�-��bߛs[����\n!�;�9��\$��&3L���'���Y�0��	��\r��ߎ�\n,�#�\">�I��A(�C�@��D�.���^qxb�%+��-�؃��zF6\r�x�	㒁	�Z�A���@p*-'����98P�D2�n�Y?R�2�B\n\$:���%*��2�H���<b(�;?�HN�\$3��:)P�ƱK0��/L�\\�s��7O�Í@��2��ܺ9K�O� P�\$Bh�\nb�2�x�6����Y�\"눞�ct.��59�)����\n9O#�*\r�[Bb��#9��pAfL�[?#�H�\r��z��c�s��E,�W�[���(�z��+t�+r�)(:%*��l���<8\r0��ȼ��\\�,���9�k0����-*�;Z�>殌�@�@�\"ַ�+��ۄ⯕�m(�\$\n0ވa�r\n)aK4ע�*2�bbz�hA\000�'�b�\r�	�\$���Em\nC(�:�ٮ�ai��1�P������;'�r��0̠Y��]>=���f�<��o�r1.�L5&���w>,�8�P�')js��e�jߙ.�ʀ�WBz�]8�\000��MG��k�j�݊F���y1#������6���J�P/\"��{���#O�I���;O��z8�\r�]*h�0n�\nAz�S����'�!�1Jt�{��Q�u M��D����VC��|D)��˱xNȏ*�phR:l%�`3as�4)\0000�1Nzݓ{A%M�>��H\n� /��\"Vو&J]P�2��\$C���0���f�\$!��p��<��Σ�@p�j�8ǌ!�8C�?�˜�jOڊ�f�D�@¹�PF0��0Zr��o�";break;case"pt":$i="E9�j��g:����Q9��7�j���s9�էc)�@e7�&��#\$8�M'cx�T0�L&�DD�<M�\$��)��bb)̅. ��R��2�`&Yq��z4��F��i7M��|~�t2�DC	�:a9˄\000�I��2Nr@QB� 3e�S�@u��5��Z�NtK�*�@��vcMN\\T4ŲfC)��i��c�)�]�C�F�,(�\n\"m����a�:K(�`��AE#.�G2���J�\000���mȷc�r�s�(v\000�����\"�����%��8�}3�_�L4Ѱ�(����(�C����D�C� 7+A j���0��PƄ��JĔ��\000�7�k'�N\"�덣J��e:��#�(Ƭ�#�\"���ұ��+,��R�\$���#r����\nGA�H�!�򳆖��<�!�iE/��ή8@�	�ht)�`P�2�h��c�0��\$�<�du\$�T�?�#j�'��7�i\000@!�b��,�65	h@���*\"3+�h�6\$�ʚ��)З=�D�-O\000����t��-L�ؒ���8lc�#\"ʼ�j �}�\"���ˮ�ʂ����U�\n%�r�Y\r-4S���?^����ͪ,p�!�3\000�s(�}Y̐@(	���Kf\n(R��,��9��rV���)��Sv�&Wܾ������2������h���@0����I�+��\\�\000�7��2�����>������>��\r��/�/è7��䚮�\000P��ݣLS!֚��-!\000�?(�h�=��Ko��R�p���f��Cc��,2�S�,8MK�n�͡l\r9}g|��85H�\\,�8=`Ø�1n�0@�D�/(ߣ�0[��n�ji�х����~�Ѳ����4W�8� �4w�Q0\n`�U�Rw�m��H1��v�H�eYxY���Pu��@7\ra����I\000�KC~��,\000a���N�Ӿo\r��@�l�`o8e�3�\$��۱1e�>UV��1�\n�W���(xxe�\$��V���&,��2�d��o6����v��\$1+�P��";break;case"sl":$i="S:D��ib#L&�H�N�M�Sh��a6ث�I�� 2N��	��.��MGc,\$�aK\r��Y��t�H��Y0����R�\$�K07@��)���(�OF�x*&i3�b��||�a1M��\000(�e=MES�N�iScI�X :�NV���I3�\r�IE5;(4J4�L����q��P��Ɠ�������&�*�t:�kBI��]���U�	�\n&�c{r9��m2�P��N�6�\n�Y��15��V�d� ��A[Ӝf�r4��B�h�{5E�~��o���N�Z0�\r��'\n� ĕ�L@cR�@P �A#�#+^�A l��8�BK0��Z~9&��)�h��	��:҈�*^��BH���\000P���F	�#����p+)���\r�rL��E�5.�l�\r�������2Ӻ��\nk0LM�2�hZ>9��<� �cH]8L�`�/Mk�ڌ��@���@P�\$Bh�\nb�2�h\\-�T��.ȃ#�9�1��� l0�)��V���Ԉ&O�\$i4�!�b���1+��̉���H9���k��.O��/��V�(����a\000�4�Ȋ�#��~7��z���\\l�'�*J�W���.�j�;*�\"���\nQX,O���cHƓ�H(�¤5<&��2�R��\"=?��3o&��(B�����;\r��h ��h뭸�?oעx�*W�Ԃ��\"�4-i�>0���c[ H��`�9��o�\0004�o\000��˃@-��:1J����8*\r\000;I�H�ɠ�\"�'#���I@�4/n/9;�.����o/b���_�p���Z'��C��,��)�Nq.�0;�Y�O@�/���5t۫�7�c/E�Ns�	Ӿ��U�����?���d�\n&X���Zf5�Ɇ�����A����'�#we�[��7���}�?������}�_>:P?ړ�?��?{�'��Hz�\"�a��\"�X��Ը�J�P�;AH�����:FU`��n�ZihZd	�-b(V��/�L�b<ߏ�nH�藠��PaB��C�p����F������� \"D�����` /a�c����E���lQ�]l`ï�W�	�\r\000(*@�H���+xP�\000";break;case"lt":$i="T4��FH�N2�'cɬ� b+�fSa�� 3A\r��p(�a5��&�	��s�F��Cɐ�(��2t�0�\r�S)��/:M�v��P���(�r4��&�,��K���)��4�Vq�\000(�%1SI������-ƳM|@v4�X�Q�B 8+cu�g29ͧ����A��AEc	��o�؄hQ�S5�)T���t0�NU�&��\n*d:�y�e5u9~¦k6U��Sy�uP�g�p:DR2�\$z��'������b����yB�\"5M�{�Bs�;I�sO��#�Zν����P��p�5��\"^�\$��z��Һ� L �:		A�x�C��׍�x!hH���\$��B�/��99�ҡ.bG5�ʀ�i#^ ����5�(�0\n�� � ����F!\\��/j��ǳ�J��,Lzr�A�\n���L�P���65�z	8�s��<M�rĎ�KLh\$	К&�B��c�\$<��h�6�� �)��C��3�\$�\$\"�\"��0�z+\nc(�ۼ�;u�O\\�!�b��͍蚨Ą�7%���?\"�6��EL⫰;�մ,����F)V�4������\000ܡ	2ٌK?���7\rc̄��h��mY(���'(�Z�Y�,6\r*�A�:��I�2^��V5¿\\K`ԎVJ���x}���u:�<�Br��0,ӂ���R���º��{Z�B��(0/3ABf���\\:C��\nx�*i�A���<-��p��C4�6H�@ʭ2j\\�H��@�\r�2�m c��sP�y/lB;-?�Z�\"�m��-��P�\"j�,��h�ܣ��qn��3��M�?����`η̽��5LوL���/j��N�P4�h��d�ݘ�#=�h�O�~�/w;�~3�4�>W�5���ψ����>C��������0��p�#���\r��]��(﫾��&����;���(E���z��?�:B�\$D\$�����J�^|B\\׾��� \nk���@fñ�4'<<��HA�{�/�Ah0�]q)�L�Rگ[T.!p}q��Ƶ�PPA!�8���)�5�	�?���LNz�!��[@gQZ,��A�)��5���_�P	dn��B\nzP	!�89C^�s�k�t�A�σ�e�ev?����3�\"�p��";break;case"tr":$i="E6�M�	�?\r�3Ʉ@ga���C)��l2�O&�B4��H\\4@ia��RsԬ���`rHd8��X��)��Js!G�SX!��c:�\$fV\"~/1ة�Tp�j�M�����l7�#f���Φ�a��\n����q�qm�NL���C4�\rv�l�sB�Í�jA�=j�[�9�ц�9F\"�����w0���I�A/]\r���D�c˚�@�\"��4��4�Q�oŝ3d�I��eّ2穔`�i1�r\\��PЛ���N�Z�a�ڡfe���L��|�3nK�x�	�\rf܈��C��9�Cp���\\�Xb�CV\r�з�\n��@M���O�n��`P�<�k82�10Z8!c��#�(�*�-/h�6OX��Q�\$�4O�@2��2F�\".2\r!s��?��\$��r!!�d��*cH�(B@�	�ht)�`P�\r�p�9N���d:p5���XS�Cc���p�7�*�A\000�9!c�Z�8�\000�2�#����Ί�!\000P!�b���P�:GAp@##���:�8�Î�ڏC\n�ЧB��k�Ȝ#�x�:�U���)�t�:6��Ս�ŖX��U�hZC�/M���2�`@62�̙W#-w+C(���#�p7#��SG�4�n6��J�\n��ܻ<KO����z\n@��a؂��hP�ՃBPS�l��*Z���8�5����؄��)��:`�]�z,�\n�C_��F�3Ҷn�\"�70#��3�!�Ќ9�,-����,�P-�'(��B ^\r���K�i>�\"�<{��N\\q�r�ǳȠ��<6|���tR2�JX�	Z�G�ol#l�H�8�H�N�k����)�R�E��\"c�boR,��ݟZ��#2��6L���\"�z�:/�,��)8���<�/t�3���1��y�~خ��\r�q�\$�^9�~�������c���r��,^i���Ǿ�k\n��0F�s8|�>oU���P�ҳ�>A07���T?��:����Q���@��Z��>F�4!Zm^YZ4ot��|�Z�{���\"𩂐o�������K�@";break;case"ro":$i="Ed&N����e1�Nc�Q8� 0�`�S�P@�W�lD��a�0I��u6AL����&��4̖O)6�O����m��)̟1 �d)\$�@n��gg3�rbg7�F��i7kL4q�@b0��IY��t��%�Sq�@t0����,�X\n&O-\000�\r��e�VM�9n	t��S��8t7�`��J�n�A(��6n ��(UU1*NH%�'6mY��4떎������<�֙	�LQ+���&;��8Y��QH��M�L �9��m2�+��\rSE2w��G?ni��뀢�j��+��0x��%c�L���*�,�\000����p�:���؁�((¯�� J2{��1K�H<���A j��p�B8�A\nں�-�P��/��� ���@�����\nz�3��9\r�pҍ�nV6<b���T����Ҧ�2V�)K���Ɍ@���k�Ԟ!H�p�̠�p ��5�ψRWQ*��\r)��߁B@�	�ht)�`P�2�h�c�d<��R\000��Ҝ�+P\$69H�rM�b�����\\9X�1?p@�Ps�\000ʌ*DZΤ��Ƈ�c��1�)���.��V��꒥�2E����9	BY�7JՏ������3�\$�3��@�=6��,:�(s��6ȣ��-��X0���43�p@3����d��:<3�c�e���4�/�\r1!1._���\$-�0P��)���#U�(	☩����@�ѡ\000�J��r�6ql�-�X�j��m�N��6%#������\r){D9�0��������r��9y_2��T�P\n�.��ϗ��mo�(��%�,����ύyf�\n���P�;#,I|��\r��{�8ے�CP��A�ڼ]�@�k�cA;v�[�ð���6��D���?aL���H�~ǵ1��1ئݘ�:�Cb1�#֕gò�FA3ZN�{W{!������D�49�裠D\n6�06�8�X�\"\$L��bZ��[�>%�����ϒA-�e�C�w�B-E�Y��6��I|�qC-� Ӎ��]�`�?\"0�[怉��!vLO� <d�4T��vE(�,(�L��a��a���s�qxF`�p�y(G��0��X\nHM�U\$ @����.��*yX�,Y7���Gf\000";break;case"id":$i="A7\"Ʉ�i7����A8N�i��g:���@��e9�'1p(�e9�NQ���0���I�\"70#dp@%���'C�O!����4��e6�gSY��o����#I�a6B�3�>l�ѣ�3(��LAD�Q�� ��3�L�;):DSYΞn�O�im\$�u�Gl�RTZ� 8E���l\000�\"�Lsv|�@w�`AE3�r�B�HD�T\"7	#�M�]i�D0��� Q�C�����c�du.�N�9f1n)�{�nvjsO9A�� ����O2�Q��\nE�A��jm�㢉�8# P�9�\"&\r#j�� +۔4��H�Վ��ʰ�\n�81\rL#V��#�p	�(��.B[��Op@���bX9\r	0�����1�q�q�8�h�또	�ht)�`P�<˃Ⱥ��hZ2�P���T/���\r�kV�͐�7�h�@!�b��!����e!�z��ڣ�J2A%G���4�-�����P4����#H̒�t�B0�C�Y��\nǡ���4��\n�Pu��(�°�J���I\000�2��m��\"�H�\$\n	�d㌔�d(J��!�E�f���\nx�*Y#�{K��M#CC�A7 h���;���3K�:���0Ҍ=,J�a;��I���:�b.P#�� �߯\rp%�j�&6�:,K#��1b�\"��9�ۚ4�:A�\"�ՙ	����EBr��I����j�����̢�В�p�۠Q����ucP#,\n���Ď\r�*Kmy�G�������\n7\"��إU����D;�P�|�.	���%�*Y�ӵ���^��z�OC��i�z�\r��m�'h��2��}SK���(��0�Wg�H���0|4��\000��>@���¯0D��";break;case"ru":$i="�I4Qb�\r��h-Z(KA{��	�L�h,�����h�\r�e����d��E!�!\$˘܍{� a0�<�\000.�'\$˨�����.�0�As�F���R\"7����	4��\n@Lfq���@%9��\r;'�أSH��m��Z(�܁�B�V�����Kd[|b�N�\$�k�U��V M-��Ʋ��j� �+���F���,%��b���ґ��2�]�_e��2����s��Z[Z���E�Ic]Śkā{���Xu��������W��l���EsS�(���I(���X��n��h��B١�	t�?�낖��b���/\\���b\$I��\n�?PI�P�o�u��@�������k��؍�i+�\000>q�LO�ly {|�Ŧ�<��)�䐯1���M����H�~�J�*4�1M��\"#����!�|�Č��C# PJ22i�\\����\000ϓ���O�#(�\r�x�pH�A�%4EQ�\$Y\$jQA���G��7�)���ڌ�%�\"�J	�S \r{��Ej���uTR��\n%'�F�5P��s�!��O����7[4����t�:��1\"���<����{m.3�S2�jA|&�έ]7�����AL�������]o^\000�^�ςS2ڀ�֐�d@��N\n9�E\n\$��r������Y���]�9�]��`�9Ckz�K���0���#��؆)�B3@���z\$vFwhϚ���F�&�\"�*KZ���J���Vd�!�3I,L�	x��qB�'N�p��k�2l�;m��\n�H�a\\�Z���0��ꆗAbl�;��\$��R���p���r��7jMh�-�W��s�JZ:�+:{�R�H��֊3�b@�*�� �����7￱�b�Ѫ.k�&�o��G^�1�;�����[8@S���j��S��**�E���S�@'�0�Nr+&q�&u�U�\"ZTe]�b�[̈́KnJ�:Q��*!��,Q�\000Dd����Cɑ�%}�C���#=�!��@Ω䙂�DJ����!�4�H���b\n%�(��C�_���,�ԘB.hDi���|Uc�%č1/60S����ƔN���;#��K#�U�p����W�9GC����d���\"��T��� #�W�`.��6�RB�d��08؀��*�����VW�`bR�+���Z�Y�m���J�썇�8ä4Ds�qf����tY��%r�=�tnRa)I�	��yF��FA�-|��W8D�Hӕ��X�	c	�Ӂq��<�3�O���<r�E�J�ϕ���*���1[fZO��D�F�� @)��i��*H�D�k%)�#��Ad�\$��(#8�Re�g���8.�������a��98��\000�gVL�:0�ۏ���ҧU��\$)LM�&��� FT�����D�`o!�4���Z+Rx\r��9P@t*l��tTےT4\$��L�hSI\n����a�����q!2��]ZQ4i�\000R\$[h�N��\"J�4}Y��}U��\$؀";break;case"uk":$i="�I4�ɠ�h-`��&�K�M�9x�_4��\n��-�\\�z�AH�P)D@�BJ�1�tM9*]4P1輑v�FC#E�b�AΥ���^����(�%�A����d�9�@%9�3V��e�CV����IJY!�7'���w6�G-]Q����V=��d��\r@��&�)M<�X�V��F��ZP �����A0m\rҤ��Jc+,��[k�QmR�M���T�W����f��*ӹ=�Ȣ�B z���`��g�ٴ<BS�'zH�R���K��X��UE��<�^��[�KdַXTm`��hr2��d���B��N��h=�R��'-����N�^ػK���������b&Q��l���\nH^���qb^��n��G0�����N�t�6)R���Z�;�kN�\"�+i@(�i�i+�Lĵ��h�\"i;��pH�A�@��t��\$@��CN����.�@�[���&�)\"h\n�̪Q��h�0�#e���.�j2:٨Ӛ\"���#0�I��{���P{=;TkMd��r2�,A��8�\"��\$�J���*H�ו���X�R��lm�Y6]p��ӽ��Zj��k6�\r���Hy�\$L�\"h��I�F�K}_0YB����]v�p��@�F��]aG3Җ�HȀ6�����H69�O�܆���)�MJ��r��곀���1��Jj���(Kz��%�OI��նٚ]zF�ov\$�ĺ	t#�:!)���H4I�\"��-�M�I��<�)DcS���oZ-�;R�>����Zk�����ֆ�D��(��W��(�ko�\nܩZ,���~��1�0ժp[���(��<�6�\000S���u;-~t�����G�m޿N�BԲS�5d�h�R:�>1R��1��^u\"x�*O0����q�OЩ<㚴J7�h�h#p\$L����m��IT�X��!�T�3�A�'&%0Y��\"4Lym�1 �&���ѫ|Ki�BH��1��\$�XF �:�,�hvQ�� �!�4 j<����#��9L\"�\n�8C�j,S�z#���K���u�|���`���7�\$��\$����O nV�5T��9�)0�A�Y��#HU0��ʰ�*'Ku[�&�4wK��(���:���jH8*��d<ˤ��S��fo��X\$w!:fg��9�h��əT\"�����-(gx���l��4K�ED��c��X(\\�;.�y�;��L�-S��Wұ�.�2Fޙh�=�E�bc�(�,�(��#�si�!g��N�9F1\000��u\rsN���ۿ��N�b�kI\$h��1)d\\��b�F�@��{RIhE��'r2J	Jd�Y��b� T~^̨��`o!�4���J)RR\r��9P@t\$M�7zB���(Д!�F[�*����Kj�4(d�I�+R&*�;:o�QVT��	�Fb��\n�c����2��\000��K �";break;case"sr":$i="�J4��4P-Ak	@��6�\r��h/`��SAC�4SP�\"�C\r_C!�Ԓ3h�\$�XSA+�/����d��4Sp)+A|�[�(�̮5�N&x�>���Ja�Yd�e��S���*�Kj�|���L`�E�^H�������'U���Z�\rX45%��YDabK���0�A��4����Kr�T�I[���lJ�	GZA)�\\EGjXl��Ʒ]�P�(\$�S��̗L��I�i*��F��G�.0wnLwy��4x\"��\\^C��)Z�i��V#��A9�h-�QԜ����d�����F�\$�\$�+;*�����h�j2ϽF����+�4�#���10�ֻ+	���D�Th'��FNJ��\n�h�F�X���(Ȃ1qj��B|�d��I�Cl�������\\r�b�D��!�oܨ�'(\$ғ��.���k�!��4�H%����E�d��,[�����\n8�9(#��V�\$(�r�AO���1+��DѠO��\n��I��.�	�UQ�B䶸ɪޠAt�F��b\\�u}kX�hY^V�1k]U5�_*�G-\rJ]Z��2t&�Ih	@t&��Ц)�C �\r�h\\-�7��.���J����uxլ�l�6��:���J+�����\000�)�B3BΖ�|� ��`�:�ʢ_!\$\$(�\"�\$���#�#l�3��p����(�@�5����c�j�4�N��#�\":BaZ�lߥ��X��1N?b���鑬����N����\n���\"��`\r����I5�{W����Z��\000�\$\n\n.�\\o^��m����#��3��(	☩���e_�Ŗ��SJ�F��<\\��Cl���(R�\\�L���b�9zh���w��� �w/r�8M��=z��V}��X�h���������ӆ�����-K�����}�	{�hnJB����� L_���\r�%*���L�4��H� -���\000��D�\000mHu}��*dUBGG\ry����IJ|��]�2��������L�\$<�U�\n��\000rnȮ�b�.�1�?�ݗ��w���ؖ� \\m\$efB'�a�Ya���ؾ��4&�Ql�6R\\zJ;;*�B�rhz� �T����Gr��LF֤]�<~g5\n��D2h�D�I\$l[]�+����>tF�[e�4���f�D\nU1�Ђ��_k�\$^K��%��ZĤD:����~�����C�C�ΔL(\"��ź��\nz���y	�%P�0�X���I�_�0��	W+Ƃ��U�`";break;case"zh":$i="�^��s�\\�r����|�\\#]5�A�^(�d;�v�q�@�2q\000�RB�B�p�M!#q���N�X#��\000��B�G#�h�5ʭL9S���Ω]�����N��,�2TK�CL����B�Z�T !����(��+��m�пL�I�2%R�X�b\nق ��*����6�4[9V�*=&���*ȅ��b�r��d���%ԲT��.�t�֕%j]άSDP��2�r���:�\"�]�*Hu*�M����I��\\�ĳ�|�r�{V�����+��u���/R���ǔ@��?�oL]�GIB\\���W�PJ2\r9�E\$c��9�Cp���\\p�j���Z:��vs��zF��rHGG)tG�GI2H �ҤE�t�I�E�.!(Z���A�HN��AU!��vt�D�HG�\$)K�,2>�䌀�Api`@�rjjɜ�,���2�	@t&��Ц)�B��A�\"�\\6��p�2\$��Pt��T�!H�!`s�p�:P*�E/\n��#D�b��#�Hs�\$b�t��k�8��X���i*��u @3q�O���4���)~B�E��QhI^��%�W٬��C��c|�V��,X?O�~�ԍ!r��m0WX\nҸ���\n����(W���b\n@�_�G��zD'�a�%Rl���x�*a\r-��zpH�כ6�)�Q�)P'��@t��az��(�vRb��PF�\$\\���谲E��M��������sK�,����j�����+Ւ�r>���f�)r[9;��;��#���Qm�K�* E��K��%\$1:�\nG��L^�')&F�Y�@���F^�<]�q�J(1�M;�r���R�(�&^�rR��*����Ѳ��D)ft\$�ȭ�%zֺ���t�e��G5r�;ϗ=�&^1�A�N��*NH�A��B`�0��H�3��<6�����0��M�~���'�SVc�Mc��9Qu�/\"�vL�D(�Q2U2Y�aR�ݮ�\n���";break;case"zh-tw":$i="�^��%ӕ\\�r�����|�B(\\�4��p�r��neRQ̡D8� S�\n�t*.t�9�E�N��AʤS�V�:	t%9��R��\",�r�ST�����Tr}ʧE��I'2q�Y���dˡB��I��B�=)@��:R��U��wUDY�D%��h��,�r�b)��e7�&�p��i��h�U�ʓK��/wgB\n�P����˙*����iu-u>�L��)d��Z�s��e��t�t�3ȅ�=l�t-��U��\000���l��:�P�^+ܩ�s�p�t&a�UzSs�Wre-\r`�r.P��걖)v]%\n���A|F0�)� @1,xP9� P�2�`P�7�A b��H�d�8�+'!v]��!��9zW(dq\$r�Dx�&�:JE���9�%��I���6�����A��s�r�1�C�K�p]�b�G�o�~L���L��L�O��@,�\$�2��]����G��b�\$	К&�B��c�<��p�6�� �5�d9u\$IRb��,�P�:K�x]+�Cȇ�-q��\000�)�B0@:\r�[ ��Y�C���7;g),WOϑ�M�BlE���2L�@r��9@DVr����iZ��+8\$	�!�e{_�\$�`�>��ZJ��i�C'AZD�2���!�Z\$�)�T'9jB+J�n��J�1ZV��(`�N���a�!�F\nx�*��L��RnS�'1pM�W�Ù٤�JB��TE��V	IZ�!\n�0t%�\n��et�n��AT��+:se�����18cS)K�k,�V��#�,�f�B3�R�_���,S��xs����霻�\\�k�0�J��k����ۆ�G�DD^�'I>_�I6L�dT]��[��_�عr�B;���׮�V��M:Cꎆ~�;h{����A\r.�\$�8t.�FTqO�Q�Ą�Cv}�)��ptA���w%�&\r��4��8�~A\000�7�C(@t%D��G0�H�R<AF/I(�<Jj�\$̠��dG��s\"�X[9e,���p�	LT\000";break;case"ja":$i="�W'�\nc���/�ɘ2-޼O��h4����)\"j��J,����p��&���`�x26MŒ`�2q\000�RK\"�h�\n4�� �����@%9��S���W�U��*qQ� aH�\nf�T��NT*�����Ѹ4��\"��ɓ�\000�N�BЪO�����(�� P�d�Z܋�+�ȵ�x�s*`H5�w��(��h2>��EqTs�.+M�[(�2^@�UԪ�j��3K� �%��\000�s��.T�.h�XT��D��̙�9��~��Ӊ�)�\$��.AȐh���҂��bH%�YU�z�j�g;��(�����4D~�=��H�Y#\000=�ID�i1X)ŚhX9l�L[p��P�bA��I@B���\\Ȱd��D	�lr��tfA��,\\A(�<*t<��h�7�A b�����!8s��]�g1G�l���dAm.�JƠQ�@�1���V���q�C�G!t�(\$��a~���n]���0����=�\$r��#�3:�IS4�:ޫUB\"s��򪫐,���.�t����S�@P�<�Ⱥ\r�h\\2��-\$��p<�C`�9>j����s�Ub��#@O{�.��C�-8� �Jӵ(4�Yh�-g�e�B��tY���r�POz�-!�-A�_d���2'�V)�>t�\$���H*�~Cp���F%�b��o\\�߱\\<ɲ��2ͳ���K�R�+�P�\$\n���3���!�B���Z65��DA�j�^�bQ2���b��)�����6i�X@��\n@���۹Zm��E�:r��U�!� @�m`@��?����!����9E�fAG)Ed�� ��(�]FXI6Z;P�WUH��_�a4UTu�5V[�I6C/h\"ۣ�+�����u�zJ�e15�7Hyt��P,}?SO�!����p��R��?���͜�'��Hܟ��p��X�;v DH�hL嬧�D�S�+s--翗��Ӑ�^\"���,(��x~�!�:H,��Y?�\000��Bj 8�/��xa��7xoR8m\r��2�\000�C�a,bTC 9��>k��&t<E��%@0\n2~�\"�gZ�����\r���p(�8���:%���M	�8";break;case"ta":$i="�W* �i��F�\\Hd_�����+�Qh:.\000���U�z A\000�����V�X�`��B N�y��)�����4:d���(2�|�j�Z��yl�]W%c��<�]W*f�,IR���T��5�@t��� ��Ux�=#����	}VEUD_*z,�6���Ӂ��)�YhT�6fm�g��M���U؊���)E@�:�&?O�ߣ��qt�Phx�̊�v����_��9�F�<�㙤�n�@6�=�n�h�j���v>%!�zo�I�����?b��@�K[���+\\����\"�!\n	j��\$B,��HB�G \r+�\n\$-�\\� j	\\��-TJ@�j��%NZ��������zn\nc��4��;0�\$�R����1�D��%t�=1���:N��3���2��h�2����L��52���ɯLP�5J��I��o��4�\"F��2�Q�����삭�dҬE�{f�ыDj�Ŏ4�@�#��|%,?���LOr�+���M��26��a �Q\r^���,��\nIO�@My_4�3T�M�Z#\n�#��9�Cp���^v�cE�u��ʎ�S*B���s��K����+ȥ��ƕ���FLb,���'��E�(���+������u�53WD�{����\$�mX�]O��7��5����?WNL9�b/vP�Vm�(�Z#��Q�\"�(9n+��R�����u�^�n�j��	u4�X�������j�\"�B������Q]G���\$Bh�\nb�2�x�6����\"��}A3<>�.�� ѿ�B����V�%�\r��槖�}��D1�\000;P��)�B2��/򎣪�X�*w.�_J����7�N���3���v��N�\rt�R��ĩc+�Quڊ`�O�΋r��~��sJ�Jf�1N\000[�+\\Ʒ׭B��d!q��ظqi|4�YOþ|��̹A-\\��*����-	�o4G���;�d����V*�\"*��#\$��+6�I]1��\"����Y�-��L��8 �2����!�u������H\n�.�6���vG���\n�<0�R����ҧ,4��0xS\n����!���>�գ�Pq\n�c4�\r\\9])��d��9�2 �1���C8uA�:�� iA�1��9\"�{��������i�[����p��Zhg���Y@�ռ�+����``c�?��Y���%ruj��?@�PN�m��\rĮ9tDe�Ɨұ�-���ʄ,\r��3Tk�݋�Ɂ��ƿ������F��q��xSR7&�^�Z����5LƓ:3�zEy�51\\f����.��KE���9�R2��̏įx2Ķ�6g&�<�\"(�U)�+Z+GUTjh�(��ޔ��)�*MDS�1T��BIEA]�2p)���A�L?�a<Dމ]�C�2g����@D\r��1��l\r!�5���F#b�`st���,��t���P7� �2���_r���E=*��,�M�O\n�%\"��V�MJ�k�v�:�A�o	e�HT��Y���\$7.��1t���\$J��&�:���`�\"k1���Ύ�V.=�m0lS�eP�� �\$d�j��u�:��,\r��OZ�&�,p�7Yw����Ԩ�� 3�,\\kw��1V�SH�TM4\n|���6�]��(������\000PL'�E�mu��F��[!�S�6/]�k게���̄2x�*���8X�{9!윝ռ�W�d�u��\n58L9=hC[���ZaKd��-�6vO��C���^�G6��v��	޺\r<�";break;case"bn":$i="�S)\nt]\000_� 	XD)L��@�4l5���P\\}\000C�P�4U\"���\nt1L��C�h�[\000VC�1i��7Câ\nh��ISL���dz\000��%a�XB	4Sʔ�h�H\$S*r�B�N�2��`�٥\n{:�[)���5<V]�P�*5!-eYB){�`��)�p\n<.��'�jjj�c��d8Qe\"oaS-�Ԋn5L��@'z��##ZTC��e6j���k�Y���M�Z�����9��ݷ�\n˃�h)z��7?���JdL9������2��JA@0��r���F�z���;�S�zz�/�{>�5�b���JB���Ě\000�;��\\J�;��P[�_��B�կj����\n� �,�*��8�{��ZʥB�;}'�\n�Ĕĺć��qJ�G�\000�H�3�TBL���\r�<�5Rk��/��\"q�n�E�����#���L�7��S\000�o�L\\�C��9�Cp���\\�8b�2��8�6����*J{%���<��S\$�	���'�T.��z0�/����\000E�J��:�Y)\\jȐ�l�Ԡd�7=R*�;*N�D���,RL��)&Nr:�a\000P�HʹM\"�L�j,���T�#���Ӕ�m3v�\"��sZmE�O+7d�F�Fʔ��L��@�	�ht)�`P�\r�p�5c�P�!�J� 4�SW�loՒ�^��t��:T܀�4����9�9���)��/`4*2��'�rI�1�=�k:�D�� �?\000[q[B�7.����B���\r-<)rVa��0J1.��}���+��<[:%t�(u���)L�L�<��`wz�ov��_���K�ě�I��ǖ,h�:�IJmXV�;��:��.;T�t��@(	���m���uI�����P�ߏn�/n�j?F�F\\I̵�����)��w�����������ؖ0��J��e�P纨k)f�Fޡ�긍E�o2D���g�iYXH-.��:��pK�4�j�j{tM��;_'��@��X�Q�[f&��:�\000��2Z�	z�5�R��z/�S�E��adle�7�T��!�>��'t�\"Q�l�=��j�0�X�0�ذ(�J�x	h��v�\n�J!����E��\n� ]f�Ȯ�ěR1�u���N��܇�T�-��N�S�d����r)5Бs���a��]��j���81���!��%�=1JF+_�s�t�F�!]4�7�&'E����y6O\$��#V��*���M��|�W�F��*'���0���TS��*Ɍ-q�M���>v���j�X6���#<��M�yJ\\Qrt�ɶ�,��=E��F2���z#�I���C�Y=���&�����\$��>M����5�k��Kmq�θ����k��F^�j)�PL\r�2����;M��7� � a����Y�c�_F��+Š\\��Hx'	i�I��&ٗ���u�����<ф�L��U���Sd�Y���cS1+ ";break;case"ar":$i="�C�P���l*�\r�,&\n�A���*�.�(�����Eб�u��l.c�N.6��d2W.�����aj�D��(�\000��B�6\$�\n3���h��f���I�Q���cK�Ϥ(���UU��(\"�%J�@����̺l*n�������\"�44.P�����[����D��,2S��*���I��gQz�֯YCZ�W��T�Wd���5�ó+��D�\\g����[�`�\n�=mMP�6��DB���\"w��ej���|l�c��ҜY,����ʢ�c��MQP)�M\\��Oª��k{�D?��Ę�Aj��ez�W�)�P��)��̺�����!P�#� �2�`P�7�A j���`�1fU��\n6��J���Ϻ����Bb��x��,cc\"+o�X�\$��^�1(s胣l��f��)�*�:l�C/%�C6�\$��<���<6�>鱱:��Z�����T�9E/�@t&��Ц)�CP���h^-�4��.�O�7�\r��A��l���䀭����67-�3	6b�)�\000�7�c(܂VF�nl�t|«LB\\�,%��=�-c(ƭ(kv��(kV�9+�BA� �+L��ż���46�Ύj�C�7c��e��LLJ��ҺO\\��\000+)Ah�\$���>��׳z4�#�\"���̶0��(P�4���E����J�\"w,�%�uX\nx�*!h�R�C0��c;��F���r8Z���jB�Ofr�M�z��꒡d�Vo�����3\r�?�R����()6��l	ԧ����=5�\r?��X�z�����X��[ԅ�@�*΄�Kt�y9ɢ�V�E�̙s��~������\\������&�B���\n��&U*'�p.k3����*����5)�;��s�d�4��p��l�3ӶД�h�՞�6����<�����\"�[).74)F������~?-\000q�L��A�k�9p�b@OL۟=f\000����� E��@DB�3�{L1z7Q|��d[���\r�P<�}@>�z`o!�4�����3�7� � a�����[��\$����+�{G�h�T���m��7,\\�1q�)����`ۦYd";break;case"fa":$i="�B����6P텛aT�F6��)��l)�M������G���j&��,[(�J3+l�!(i\\25W��S�\n<����(6®9�!�-����.�\"�1j��d�D6���Ζ���\n�z!b�-f6z�J�kFBk5�ʾ��X'\"�?/CZ&ʪ|�_\n�! XU8� �T�)�J�o�a�j|�2!G�Fixu�H���#Jl��y|�D&0�-r�]�CUV�=r4�d%7��	sK��o9�u�=M��lV��	�ذ�Z�B��Td1�\$Mg�DwP��Y��g\"+I4r-J�!a4K�V�i�\000��:@����T��KDϰ���W��ԗ�!D�8�(ȑ#0�D�#(�\r�x!hH�A��V0jҰ�!e����H��T�,;�(�%,E�����\000Ҭ��P�2��FB8R,���J�нl��ګ%��\\�M	Y.6J̼�H.��TI��d�OK*<��?@PT\r��m��D-hD �P�\$Bh�\nb�-�5(�.��h���\"ĲAj�x�H�̌�1��6,Hmc�#�\"�h�r������0\"\\�T�Z\n�x�2��\000�)�B2�f6�y���R=[,e�K	��:�%�f7�bHY+ά���,V���3�]�U�2�}ڤ�8[\n�!k�bŪR�f#�r���Ԛ�v�-�K�X�:����#�؏����ʽ��n\"u�����w��9��g��7c<�*�Y�l��'�J=\"����l(\n�%�3L�����\"��2mՓ�GZ��?�ai��Ü���1�#�{B��l�`�,	�{(Ir�~�kvې�t �'��`��nL��1c|M;Jnܚo�]<���P�z�#��l�.�+��s��q�f����z\"�������v��D�ؠq��E�ܪ	\"�J5�DQH���zi'��c=�ù�8���H�!��֛��4����D�]���3�[�����^�6�u��DE�1�\$]+�SNG���6i���*w]��xF�����t�9�we{���A�\\n��(�_�H6M\000ھB��I�Ppϱ\n��.��V��:�c\000_��	��0�@��8\n�q4���( ��:x�\n��3�̇!V|�C��9�R�p�ҙ-���ְ��Ƃ%�>�8���xtp�Ҳ.@";break;}$ke=array();foreach(explode("\n",lzw_decompress($i))as$X)$ke[]=(strpos($X,"\t")?explode("\t",$X):$X);}if(extension_loaded('pdo')){class
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
as$y=>$X){$y=bracket_escape($y,1);$P[]=idf_escape($y)." = ".(ereg('char|text',$q[$y]["type"])||$X!=""?$c->processInput($q[$y],$X):"NULL");}$I=table($b)." SET ".implode(", ",$P);$Ge=" WHERE ".where_check($te).($Z?" AND ".implode(" AND ",$Z):"");$J=queries("UPDATE".($lc?" $I$Ge":limit1($I,$Ge)));if(!$J)break;$la+=$j->affected_rows;}queries_redirect(remove_from_uri(),lang(68,$la),$J);}}elseif(is_string($Db=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$J=true;$La=array_keys($q);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Db,$Cc);$la=count($Cc[0]);begin();$Hd=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($Cc[0]as$y=>$X){preg_match_all("~((\"[^\"]*\")+|[^$Hd]*)$Hd~",$X.$Hd,$Dc);if(!$y&&!array_diff($Dc[1],$La)){$La=$Dc[1];$la--;}else{$P=array();foreach($Dc[1]as$t=>$Ja)$P[idf_escape($La[$t])]=($Ja==""&&$q[$La[$t]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ja))));$J=insert_update($b,$P,$ld);if(!$J)break;}}if($J)queries("COMMIT");queries_redirect(remove_from_uri("page"),lang(70,$la),$J);queries("ROLLBACK");}else$o=upload_error($Db);}}$Wd=$c->tableName($S);if(is_ajax())ob_start();page_header(lang(36).": $Wd",$o);$P=null;if(isset($_d["insert"])){$P="";foreach((array)$_GET["where"]as$X){if(count($Mb[$X["col"]])==1&&($X["op"]=="="||(!$X["op"]&&!ereg('[_%]',$X["val"]))))$P.="&set".urlencode("[".bracket_escape($X["col"])."]")."=".urlencode($X["val"]);}}$c->selectLinks($S,$P);if(!$h)echo"<p class='error'>".lang(71).($q?".":": ".error())."\n";else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($N,$h);$c->selectSearchPrint($Z,$h,$x);$c->selectOrderPrint($Zc,$h,$x);$c->selectLimitPrint($z);$c->selectLengthPrint($ae);$c->selectActionPrint($x);echo"</form>\n";$F=$_GET["page"];if($F=="last"){$Pb=$j->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$F=floor(max(0,$Pb-1)/$z);}$I=$c->selectQueryBuild($N,$Z,$Tb,$Zc,$z,$F);if(!$I)$I="SELECT".limit((+$z&&$Tb&&$lc&&$nc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Rb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Ub,($z!=""?+$z:null),($F?$z*$F:0),"\n");echo$c->selectQuery($I);$J=$j->query($I);if(!$J)echo"<p class='error'>".error()."\n";else{if($nc=="mssql")$J->seek($z*$F);$nb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$M=array();while($L=$J->fetch_assoc()){if($F&&$nc=="oracle")unset($L["RNUM"]);$M[]=$L;}if($_GET["page"]!="last")$Pb=(+$z&&$Tb&&$lc?($nc=="sql"?$j->result(" SELECT FOUND_ROWS()"):$j->result("SELECT COUNT(*) FROM ($I) x")):count($M));if(!$M)echo"<p class='message'>".lang(63)."\n";else{$ya=$c->backwardKeys($b,$Wd);echo"<table id='table' cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Tb&&$N?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(72)."</a>");$Nc=array();$Sb=array();reset($N);$sd=1;foreach($M[0]as$y=>$X){if($y!=$Pc){$X=$_GET["columns"][key($N)];$p=$q[$N?($X?$X["col"]:current($N)):$y];$C=($p?$c->fieldName($p,$sd):"*");if($C!=""){$sd++;$Nc[$y]=$C;$g=idf_escape($y);$bc=remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($y);$Xa="&desc%5B0%5D=1";echo'<th onmouseover="columnMouse(this);" onmouseout="columnMouse(this, \' hidden\');">','<a href="'.h($bc.($Zc[0]==$g||$Zc[0]==$y||(!$Zc&&$lc&&$Tb[0]==$g)?$Xa:'')).'">';echo(!$N||$X?apply_sql_function($X["fun"],$C):h(current($N)))."</a>";echo"<span class='column hidden'>","<a href='".h($bc.$Xa)."' title='".lang(73)."' class='text'> ↓</a>";if(!$X["fun"])echo'<a href="#fieldset-search" onclick="selectSearch(\''.h(js_escape($y)).'\'); return false;" title="'.lang(31).'" class="text jsonly"> =</a>';echo"</span>";}$Sb[$y]=$X["fun"];next($N);}}$yc=array();if($_GET["modify"]){foreach($M
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