<?
//phpexif v0.1
//wangjia 2008-04-03
//http://wangjia.net


class TAG_DATA
{
	var $TAG = array(
		0x010F => "Maker",
		0x0110 => "Model" ,
		0x829A => "ExposureTime",
		0x829D => "FNumber",
		0x8822 => "ExposureProgram",
		0x9207 => "MeteringMode",
		0x9003 => "DateTimeOriginal",
		0x8827 => "ISOSpeedRatings",
		0x9209 => "FlashMode",
		0x920A => "FocalLength",
		0x9204 => "ExposureBiasValue",
		0xA403 => "WhiteBalance",
		0xA405 => "FocalLengthIn35mmFilm",
		0x0002 => "NikonISO",
		0x8769 => "ExifIFDOffset",
		0x927C => "MakerNoteOffset"
	);

	var $TAG_CNAME = array(
		0x010F => "�������",
		0x0110 => "����ͺ�",
		0x829A => "����",
		0x829D => "��Ȧ",
		0x8822 => "�ع����",
		0x9207 => "���ģʽ",
		0x9003 => "����ʱ��",
		0x8827 => "�й��",
		0x9209 => "�����",
		0x920A => "����",
		0x9204 => "�عⲹ��",
		0xA403 => "��ƽ��",
		0xA405 => "�ȼ�35mm����",
		0x0002 => "�й��",
		0x8769 => "ExifIFDOffset",
		0x927C => "MakerNoteOffset"
	);

	var $TAG_CUSTOM_TYPE = array(
		0x010F => 2,
		0x0110 => 2,
		0x829A => 5,
		0x829D => 501,
		0x8822 => 3,
		0x9207 => 3,
		0x9003 => 201,
		0x8827 => 3,
		0x9209 => 3,
		0x920A => 5,
		0x9204 => 1001,
		0xA403 => 3,
		0xA405 => 3,
		0x0002 => 301,
		0x8769 => 4,
		0x927C => 4
	);

	var $EXPOSURE_PROGRAM = array(
		0 => "δ֪",
		1 => "�ֶ�ģʽ",
		2 => "����ģʽ",
		3 => "��Ȧ����",
		4 => "��������",
		5 => "��������",
		6 => "�˶�ģʽ",
		7 => "����ģʽ",
		8 => "�羰ģʽ"
	);

	var $METERING_MODE = array(
		0 => "δ֪",
		1 => "ƽ��",
		2 => "�����ص�",
		3 => "���",
		4 => "���",
		5 => "����",
		6 => "����",
		255 => "����"
	);
	
	var $FLASH_MODE = array(
		0x00 => "�ر�",
		0x01 => "����",
		0x05 => "��(��̽�ⷵ�ع���)",
		0x07 => "��(̽�ⷵ�ع���)",
		0x09 => "��(ǿ��)",
		0x0D => "��(ǿ��/��̽�ⷵ�ع���)",
		0x0F => "��(ǿ��/̽�ⷵ�ع���)",
		0x10 => "�ر�(ǿ��)",
		0x18 => "�ر�(�Զ�)",
		0x19 => "��(�Զ�)",
		0x1D => "��(�Զ�/��̽�ⷵ�ع���)",
		0x1F => "��(�Զ�/̽�ⷵ�ع���)",
		0x20 => "û�����⹦��",
		0x41 => "��(������)",
		0x45 => "��(������/��̽�ⷵ�ع���)",
		0x47 => "��(������/̽�ⷵ�ع���)",
		0x49 => "��(ǿ��/������)",
		0x4D => "��(ǿ��/������/��̽�ⷵ�ع���)",
		0x4F => "��(ǿ��/������/̽�ⷵ�ع���)",
		0x59 => "��(�Զ�/������)",
		0x5D => "��(�Զ�/������/��̽�ⷵ�ع���)",
		0x5F => "��(�Զ�/������/̽�ⷵ�ع���)"
	);

	var $WHITE_BALANCE_MODE = array(
		0 => "�Զ�",
		1 => "�ֶ�"
	);

	var $IFD_TYPE_BYTE = 1;				//An 8-bit unsigned integer.,
	var $IFD_TYPE_ASCII = 2;			//An 8-bit byte containing one 7-bit ASCII code. The final byte is terminated with NULL.,
	var $IFD_TYPE_SHORT = 3;			//A 16-bit (2-byte) unsigned integer,
	var $IFD_TYPE_LONG = 4;				//A 32-bit (4-byte) unsigned integer,
	var $IFD_TYPE_RATIONAL = 5;			//Two LONGs. The first LONG is the numerator and the second LONG expresses the denominator.,
	var $IFD_TYPE_SBYTE = 6;			//*A 8-bit (1-byte) signed integer, 
	var $IFD_TYPE_UNDEFINED = 7;		//An 8-bit byte that can take any value depending on the field definition,
	var $IFD_TYPE_SSHORT = 8;			//*A 16-bit (2-byte) signed integer
	var $IFD_TYPE_SLONG = 9;			//A 32-bit (4-byte) signed integer (2's complement notation),
	var $IFD_TYPE_SRATIONAL = 10;		//Two SLONGs. The first SLONG is the numerator and the second SLONG is the denominator.

	var $IFD_TYPE_RATIONAL_FLOAT = 501;
	var $IFD_TYPE_SRATIONAL_FLOAT = 1001;
	var $IFD_TYPE_SHORT_SPECIAL_ENDIAN = 301;
	var $IFD_TYPE_DATETIME = 201;


	var $ENDIAN_II = 1;				//0x4949 little endian
	var $ENDIAN_MM = 2;				//0x4D4D big endian


	function TAG_DATA()
	{
		$this->clear_all_value();
	}

	function clear_all_value()
	{
		foreach ($this->TAG as $k => $v)
		{
			$this->TAG_VALUE[$k] = "δ��¼";
		}
	}

	function get_tag_custom_type($tag)
	{
		$ct = $this->TAG_CUSTOM_TYPE[$tag];
		if ($ct == "")
		{
			return -1;
		}
		else
		{
			return $ct;
		}
	}

	function set_tag_value($tag, $value)
	{
		//translate value to chinese
		switch($tag)
		{
			case 0x8822:	//ExposureProgram
				
				$value = $this->EXPOSURE_PROGRAM[$value];
				if ($value == "")
				{
					$value = "δ֪";
				}
				break;

			case 0x9207:	//MeteringMode

				$value = $this->METERING_MODE[$value];
				if ($value == "")
				{
					$value = "δ֪";
				}
				break;

			case 0x9209:	//FlashMode

				$value = $this->FLASH_MODE[$value];
				if ($value == "")
				{
					$value = "δ֪";
				}
				break;

			case 0xA403:	//WhiteBalance

				$value = $this->WHITE_BALANCE_MODE[$value];
				if ($value == "")
				{
					$value = "δ֪";
				}
				break;

		}

		$this->TAG_VALUE[$tag] = $value;
	}

	function to_line($tags)
	{
		$s = "";
		$first = true;

		foreach ($tags as $tag)
		{
			$value = $this->TAG_VALUE[$tag];

			switch ($tag)
			{
				case 0x8827:	//ISOSpeedRatings

					if (strcmp($value, "δ��¼") == 0)
					{
						$value = $this->TAG_VALUE[0x0002];	//NikonISO
					}
					break;

					case 0x920A:	//FocalLength
					case 0xA405:	//FocalLengthIn35mmFilm
						
						if (!is_int($value))	//is not a int
						{
							$value = "δ��¼";
						}
						break;
			}

			if (strcmp($value, "δ��¼") != 0)
			{
				if ($first)
				{
					$first = false;
				}
				else
				{
					$s .= "&nbsp;&nbsp;";
				}

				switch ($tag)
				{
					case 0x920A:	//FocalLength
					case 0xA405:	//FocalLengthIn35mmFilm
						
						$value .= "mm";
						break;

					case 0x829D:	//FNumber

						$value = "F".$value;
						break;

					case 0x829A:	//ExposureTime

						$value .= "\"";
						break;

					case 0x9204:	//ExposureBiasValue

						if ($value == 0)
						{
							$value = "��".$value."EV";
						}
						else if ($value > 0)
						{
							$value = "+".$value."EV";
						}
						else
						{
							$value .= "EV";
						}
						break;
				}

				$s .= "<font color=red>".$this->TAG_CNAME[$tag]."��</font>".$value;
			}
		}

		if (strlen($s) > 0)
		{
			$s .= "<br>";
		}

		return $s;
	}

	function to_string()
	{
		$s = $this->to_line(array(0x9003));	//DateTimeOriginal
		$s .= $this->to_line(array(0x0110, 0x920A, 0xA405));	//Model, FocalLength, FocalLengthIn35mmFilm
		$s .= $this->to_line(array(0x8822, 0x9207, 0xA403, 0x9209));	//ExposureProgram, MeteringMode, WhiteBalance, FlashMode
		$s .= $this->to_line(array(0x8827, 0x829A, 0x829D, 0x9204));	//ISO, ExposureTime, FNumber, ExposureBiasValue

		return $s."<br>";
	}

	function print_all_tag()
	{
		foreach ($this->TAG as $k => $v)
		{
			echo sprintf("tag:0x%04x|name:%s|cname:%s|type:%s|value:%s<br>", $k, $v, $this->TAG_CNAME[$k], $this->TAG_CUSTOM_TYPE[$k], $this->TAG_VALUE[$k]);
		}
	}
}

class EXIF
{
	var $APP1_POS;					//Application Market Segment
	var $APP1_len;
	var $TIFF_HEADER_POS;
	var $TIFF_HEADER_ENDIAN;
	var $IFD0_POS;					//0th Image File Directory
	var $IFD0_ENTRY;

	var $IFD_EXIF_POS;
	var $IFD_EXIF_ENTRY;

	var $MAKERNOTE_TIFF_HEADER_POS;
	var $MAKERNOTE_TIFF_HEADER_ENDIAN;
	var $MAKERNOTE_IFD0_POS;
	var $MAKERNOTE_IFD0_ENTRY;
	var $MARKERNOTE_MAKER;

	var $MAKER_NOTE_POS;
	var $MAKER_NOTE_ENTRY;

	var $FP;
	var $ERR;
	var $CURRENT_ENDIAN;

	var $TAG;


	function EXIF()
	{
		$ERR = "";

		$this->TAG = new TAG_DATA();
	}

	function hecho($v)
	{
		echo sprintf("0x%04x<br>", $v);
	}

	function die_err($ERR)
	{
		$this->ERR = $ERR;
		if ($FP != null)
		{
			fclose($FP);
		}
	}

	function cal($a, $b)
	{
		if ($a < $b)
		{
			$t = $a;
			$a = $b;
			$b = $t;
		}
		
		$aa = $a;
		$bb = $b;

		do
		{
			$temp = $aa % $bb;
			$aa = $bb;
			$bb = $temp;
		} while ($bb <> 0);

		//���Լ��$aa
		//��С������$a * $b / $aa

		return $aa;
	}

	function skip_n_byte($n)
	{
		fseek($this->FP, $n, SEEK_CUR);
	}
	
	function get_1b_byte()
	{
		return ord(fgetc($this->FP));
	}

	function get_nb_ascii()
	{
		$s = "";
		while (($b1 = $this->get_1b_byte()) != 0)
		{
			$s .= chr($b1);
		}

		return $s;
	}

	function get_nb_datetime()
	{
		$v = $this->get_nb_ascii();
		$v = str_replace(":", "-", $v);
		return $v;
	}

	function get_2b_short()
	{
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();

		if ($this->CURRENT_ENDIAN == $this->TAG->ENDIAN_II)
		{
			$v = $b1 + ($b2 << 8);
		}
		else
		{
			$v = $b2 + ($b1 << 8);
		}

		return $v;
	}

	function get_4b_long()
	{
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();
		$b3 = $this->get_1b_byte();
		$b4 = $this->get_1b_byte();

		if ($this->CURRENT_ENDIAN == $this->TAG->ENDIAN_II)
		{
			$v = $b1 + ($b2 << 8) + ($b3 << 16) + ($b4 << 24);
		}
		else
		{
			$v = $b4 + ($b3 << 8) + ($b2 << 16) + ($b1 << 24);
		}

		return $v;
	}

	function get_4b_slong()
	{
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();
		$b3 = $this->get_1b_byte();
		$b4 = $this->get_1b_byte();

		if ($this->CURRENT_ENDIAN == $this->TAG->ENDIAN_II)
		{
			if ($b4 & 0x80 == 0x80)	//����
			{
				$v = (2147483648 - ($b1 + ($b2 << 8) + ($b3 << 16) + (($b4 & 0x7F) << 24))) * -1;
			}
			else
			{
				$v = $b1 + ($b2 << 8) + ($b3 << 16) + (($b4 & 0x7F) << 24);
			}
		}
		else
		{
			if ($b4 & 0x80 == 0x80)	//����
			{
				$v = (2147483648 - ($b4 + ($b3 << 8) + ($b2 << 16) + (($b1 & 0x7F) << 24))) * -1;
			}
			else
			{
				$v = $b4 + ($b3 << 8) + ($b2 << 16) + (($b1 & 0x7F) << 24);
			}
		}

		return $v;
	}

	function get_8b_rational()
	{
		$v1 = $this->get_4b_long();
		$v2 = $this->get_4b_long();

		$t = $this->cal($v1, $v2);
		$v1 = $v1 / $t;
		$v2 = $v2 / $t;

		if ($v1 == $v2)
		{
			$v = 1;
		}
		else if ($v1 == 1)
		{
			$v = "1/".$v2;
		}
		else if ($v2 == 1)
		{
			$v = $v1;
		}
		else
		{
			$v = $v1."/".$v2;
		}

		return $v;
	}

	function get_8b_rational_float($n)
	{
		$v1 = $this->get_4b_long();
		$v2 = $this->get_4b_long();

		$v = ($v1 * pow(10, $n)) / $v2 * pow(0.1, $n);

		return $v;
	}

	function get_1b_sbyte()
	{
		$b1 = ord(fgetc($this->FP));

		if ($b1 & 0x8 == 0x8)	//����
		{
			$v = (128 - $b1) * -1;
		}
		else
		{
			$v = $b1;
		}

		return $v;
	}

	function get_1b_undefined()
	{
		return get_4b_long();
	}

	function get_2b_sshort()
	{
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();

		if ($this->CURRENT_ENDIAN == $this->TAG->ENDIAN_II)
		{
			if ($b2 & 0x80 == 0x80)	//����
			{
				$v = (32768 - ($b1 + ($b2 << 8))) * -1;
			}
			else
			{
				$v = $b1 + ($b2 << 8);
			}
		}
		else
		{
			if ($b2 & 0x80 == 0x80)	//����
			{
				$v = (32768 - ($b2 + ($b1 << 8))) * -1;
			}
			else
			{
				$v = $b2 + ($b1 << 8);
			}
		}

		return $v;
	}

	function get_8b_srational()
	{
		$v1 = $this->get_4b_slong();
		$v2 = $this->get_4b_slong();

		//get signed mark
		if ($v1 / $v2 >= 0)
		{
			$s = "";
		}
		else
		{
			$s = "-";

			//convert all to positive number
			if ($v1 < 0)
			{
				$v1 = $v1 * -1;
			}

			if ($v2 < 0)
			{
				$v2 = $v2 * -1;
			}
		}

		$t = $this->cal($v1, $v2);
		$v1 = $v1 / $t;
		$v2 = $v2 / $t;

		if ($v1 == $v2)
		{
			$v = 1;
		}
		else if ($v1 == 1)
		{
			$v = "1/".$v2;
		}
		else if ($v2 == 1)
		{
			$v = $v1;
		}
		else
		{
			$t = $this->cal($v1, $v2);
			$v = $v1."/".$v2;
		}

		$v = $s.$v;

		return $v;
	}

	function get_8b_srational_float($n)
	{
		$v1 = $this->get_4b_slong();
		$v2 = $this->get_4b_slong();

		$v = (round($v1 / $v2 * pow(10, $n)) / pow(10, $n));

		return $v;
	}

	function get_exif($filefullpath)
	{
		//init pos
		$this->IFD_EXIF_POS = 0;
		$this->MAKER_NOTE_POS = 0;
		
		$this->TAG->clear_all_value();

		//open jpeg file
		if (!($this->FP = @fopen($filefullpath, "rb")))
		{
			$this->die_err("could not open photo file or file not exist");
			return -1;
		}

		//SOI/////////////////////////////////////////////////////

		//whether JPEG
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();
		if (!($b1 == 0xFF && $b2 == 0xD8))	//jpeg
		{
			$this->die_err("not jpeg file");
			return -2;
		}

	
		//have APP1?
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();
		if (!($b1 == 0xFF && $b2 == 0xE1))	//APP1
		{
			$this->die_err("not exif");
			return 0;
		}

		
		//APP1/////////////////////////////////////////////////////

		$this->APP1_POS = ftell($this->FP);

		//get APP1 length
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();
		$this->APP1_len = $b1 + ($b2 << 8);

		//0x457869660000 "Exif.."(fixed)
		$this->skip_n_byte(6);


		//APP1.TIFF HEADER/////////////////////////////////////////////////////

		//get TIFF_HEADER_POS
		$this->TIFF_HEADER_POS = ftell($this->FP);
		
		//endian type II:little-endian or MM:big-endian
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();
		if($b1 == 0x49 && $b2 == 0x49)
		{
			$this->TIFF_HEADER_ENDIAN = $this->TAG->ENDIAN_II;
		}
		else if($b1 == 0x4D && $b2 == 0x4D)
		{
			$this->TIFF_HEADER_ENDIAN = $this->TAG->ENDIAN_MM;
		}
		else
		{
			$this->die_err("unkonwn tiff header endian mark (".ftell($this->FP).")");
			return -3;
		}

		//set current segment endian
		$this->CURRENT_ENDIAN = $this->TIFF_HEADER_ENDIAN;

		//0x002A(fixed)
		$this->skip_n_byte(2);

		//get IFD0 offset
		$offset = $this->get_4b_long();

		//cal IFDO_POS and jump
		$this->IFD0_POS = $this->TIFF_HEADER_POS + $offset;

		
		//APP1.IFD0/////////////////////////////////////////////////////
		$ret = $this->get_ifd_segment_tag("0IFD", $this->IFD0_POS);
		if ($ret < 0)
		{
			return $ret;
		}

		//APP1.EXIF IFD/////////////////////////////////////////////////////
		$ret = $this->get_ifd_segment_tag("ExifIFD", $this->IFD_EXIF_POS);
		if ($ret < 0)
		{
			return $ret;
		}

		//APP1.EXIF IFD/////////////////////////////////////////////////////
		$ret = $this->get_nikon_marker_note_segment_tag($this->MAKER_NOTE_POS);
		if ($ret < 0)
		{
			return $ret;
		}

		fclose($this->FP);
//$this->TAG->print_all_tag();

		return 1;
	}

	function get_ifd_segment_tag($segment, $pos)
	{
		//jump to segment start
		fseek($this->FP, $pos, SEEK_SET);

		//get tag number
		$entry = $this->get_2b_short();

		//get each tag
		for ($i = 0; $i < $entry; ++$i)
		{
			//according to type, get data
			$ret = $this->get_tag_data($segment, $this->TIFF_HEADER_POS);
			if ($ret < 0)
			{
				return $ret;
			}
		}

	}

	function get_tag_data($segment, $pos)
	{
		$tag = $this->get_2b_short();
		$type = $this->get_2b_short();
		$count = $this->get_4b_long();

		$custom_type = $this->TAG->get_tag_custom_type($tag);

		switch($custom_type)
		{
			case $this->TAG->IFD_TYPE_BYTE:

				$value = $this->get_1b_byte();
				$this->skip_n_byte(3);

				$this->TAG->set_tag_value($tag, $value);
				break;

			case $this->TAG->IFD_TYPE_ASCII:

				$value = $this->get_4b_long();
				$old_pos = ftell($this->FP);
				fseek($this->FP, $pos + $value, SEEK_SET);
				$buf = $this->get_nb_ascii();
				fseek($this->FP, $old_pos, SEEK_SET);
				
				$this->TAG->set_tag_value($tag, $buf);
				break;

			case $this->TAG->IFD_TYPE_SHORT:

				$value = $this->get_2b_short();
				$this->skip_n_byte(2);

				$this->TAG->set_tag_value($tag, $value);
				break;

			case $this->TAG->IFD_TYPE_LONG:
			case $this->TAG->IFD_TYPE_UNDEFINED:

				$value = $this->get_4b_long();

				$this->TAG->set_tag_value($tag, $value);
				break;
				
			case $this->TAG->IFD_TYPE_RATIONAL:

				$value = $this->get_4b_long();

				$old_pos = ftell($this->FP);
				fseek($this->FP, $pos + $value, SEEK_SET);
				$n = $this->get_8b_rational();
				fseek($this->FP, $old_pos, SEEK_SET);

				$this->TAG->set_tag_value($tag, $n);
				break;

			case $this->TAG->IFD_TYPE_RATIONAL_FLOAT:

				$value = $this->get_4b_long();

				$old_pos = ftell($this->FP);
				fseek($this->FP, $pos + $value, SEEK_SET);
				$n = $this->get_8b_rational_float(2);
				fseek($this->FP, $old_pos, SEEK_SET);

				$this->TAG->set_tag_value($tag, $n);
				break;

			case $this->TAG->IFD_TYPE_SBYTE:

				$value = $this->get_1b_sbyte();
				$this->skip_n_byte(3);

				$this->TAG->set_tag_value($tag, $value);
				break;
			
			case $this->TAG->IFD_TYPE_SSHORT:

				$value = $this->get_2b_sshort();
				$this->skip_n_byte(2);

				$this->TAG->set_tag_value($tag, $value);
				break;

			case $this->TAG->IFD_TYPE_SLONG:

				$value = $this->get_4b_slong();

				$this->TAG->set_tag_value($tag, $value);
				break;
				
			case $this->TAG->IFD_TYPE_SRATIONAL:

				$value = $this->get_4b_long();

				$old_pos = ftell($this->FP);
				fseek($this->FP, $pos + $value, SEEK_SET);
				$n = $this->get_8b_srational();
				fseek($this->FP, $old_pos, SEEK_SET);

				$this->TAG->set_tag_value($tag, $n);
				break;

			case $this->TAG->IFD_TYPE_SRATIONAL_FLOAT:

				$value = $this->get_4b_long();

				$old_pos = ftell($this->FP);
				fseek($this->FP, $pos + $value, SEEK_SET);
				$n = $this->get_8b_srational_float(2);
				fseek($this->FP, $old_pos, SEEK_SET);

				$this->TAG->set_tag_value($tag, $n);
				break;

			case $this->TAG->IFD_TYPE_SHORT_SPECIAL_ENDIAN:

				//special: skip byte first and then read data
				$this->skip_n_byte(2);
				$value = $this->get_2b_short();

				$this->TAG->set_tag_value($tag, $value);
				break;

			case $this->TAG->IFD_TYPE_DATETIME:
			
				$value = $this->get_4b_long();
				$old_pos = ftell($this->FP);
				fseek($this->FP, $pos + $value, SEEK_SET);
				$buf = $this->get_nb_ascii();
				fseek($this->FP, $old_pos, SEEK_SET);

				//convert datetime format
				if (($p = strpos($buf, " ")) != false)
				{
					$buf = str_replace(":", "-", substr($buf, 0, $p)).substr($buf, $p, strlen($buf) - $p);
				}
				
				$this->TAG->set_tag_value($tag, $buf);

				break;

			case -1:
				$this->skip_n_byte(4);
				break;

			default:
				
				$this->die_err(sprintf("unkonwn tag type (tag:0x%04x|type:%s|custom_type:%s|count:%d)", $tag, $type, $custom_type, $count));
				return -5;
				break;
		}

		if ($tag == 0x8769)	//Exif IFD Pointer
		{
			$this->IFD_EXIF_POS = $value + $this->TIFF_HEADER_POS;
		}
		else if ($tag == 0x927C)	//Maker Note Pointer
		{
			$this->MAKER_NOTE_POS = $value + $this->TIFF_HEADER_POS;
		}	
	}


	function get_nikon_marker_note_segment_tag($pos)
	{
		//jump to segment start
		fseek($this->FP, $pos, SEEK_SET);

		//get maker name
		$this->MARKERNOTE_MAKER = $this->get_nb_ascii();

		if (!stristr($this->MARKERNOTE_MAKER, "NIKON"))
		{
			return 1;
		}

		//skip 4b
		$this->get_4b_long();

		//get MAKERNOTE_TIFF_HEADER_POS
		$this->MAKERNOTE_TIFF_HEADER_POS = ftell($this->FP);

		//endian type II:little-endian or MM:big-endian
		$b1 = $this->get_1b_byte();
		$b2 = $this->get_1b_byte();
		if($b1 == 0x49 && $b2 == 0x49)
		{
			$this->MAKERNOTE_TIFF_HEADER_ENDIAN = $this->TAG->ENDIAN_II;
		}
		else if($b1 == 0x4D && $b2 == 0x4D)
		{
			$this->MAKERNOTE_TIFF_HEADER_ENDIAN = $this->TAG->ENDIAN_MM;
		}
		else
		{
			$this->die_err("unkonwn maker note endian mark (".ftell($this->FP).")");
			return -4;
		}

		//set makernote segment endian
		$this->CURRENT_ENDIAN = $this->MAKERNOTE_TIFF_HEADER_ENDIAN;

		//0x002A(fixed)
		$this->skip_n_byte(2);

		//get MakerNote IFD0 offset
		$offset = $this->get_4b_long();

		//cal MAKERNOTE_IFD0_POS
		$this->MAKERNOTE_IFD0_POS = $this->MAKERNOTE_TIFF_HEADER_POS + $offset;

		//jump to makernote segment start
		fseek($this->FP, $this->MAKERNOTE_IFD0_POS, SEEK_SET);

		//get tag number
		$entry = $this->get_2b_short();

		//get each tag
		for ($i = 0; $i < $entry; ++$i)
		{
			//according to type, get data
			$ret = $this->get_tag_data("MakerNote", $this->MAKERNOTE_TIFF_HEADER_POS);
			if ($ret < 0)
			{
				return $ret;
			}
		}

		//set back tiff header segment endian
		$this->CURRENT_ENDIAN = $this->TIFF_HEADER_ENDIAN;

		return 1;
	}
}

?>