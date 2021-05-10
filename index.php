<?PHP
	 require_once "app/model/classes.php";
	 
	 
	 $testecampos = new GenericaCamposBD();
	 
	 $testecampos->setConteudoHTML("input", "", "teste");
	 //$teste = new GenericaTabelaBD();
	
/////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////	
/////////////////////////////////////////////////////////////////	
	
	
	
	 
	 
	class LoteGalinhas{
		
		 public $precoAve;
		 public $precoVacinasAve;
		 public $precoKgInicial;
		 public $consumoTotalInicial;
		 
		 public $precoKgCrescimento;
		 public $consumoTotalCrescimento;
		 
		 public $precoKgPostura;
		 
		 public $loteProducao;
		 public $loteProducaoAcumulado;
		 public $loteConsumo;
		 public $loteConsumoAcumulado;
		 
		 
		public function __construct($custoAve, $custoVacinasAve, $custoInicial, $custoCresc, $custoPostura){
			
			 $this->precoAve = $custoAve;
			 $this->precoVacinasAve = $custoVacinasAve;
			 $this->precoKgInicial = $custoInicial;
			 $this->precoKgCrescimento = $custoCresc;
			 $this->precoKgPostura = $custoPostura;
			 
			
			 
			 $this->loteProducao = array();
			 $this->loteProducao[0] = 0.0;
			 $this->loteProducao[1] = 0.0;
			 $this->loteProducao[2] = 0.0;
			 $this->loteProducao[3] = 0.0;
			 $this->loteProducao[4] = 0.0;
			 $this->loteProducao[5] = 0.0;
			 $this->loteProducao[6] = 0.0;
			 $this->loteProducao[7] = 0.0;
			 $this->loteProducao[8] = 0.0;
			 $this->loteProducao[9] = 0.0;
			 $this->loteProducao[10] = 0.0;
			 $this->loteProducao[11] = 0.0;
			 $this->loteProducao[12] = 0.0;
			 $this->loteProducao[13] = 0.0;
			 $this->loteProducao[14] = 0.0;
			 $this->loteProducao[15] = 0.0;
			 $this->loteProducao[16] = 0.0;
			 $this->loteProducao[17] = 0.1;
			 $this->loteProducao[18] = 0.3;
			 $this->loteProducao[19] = 0.6;
			 $this->loteProducao[20] = 0.8;
			 $this->loteProducao[21] = 0.9;
			 $this->loteProducao[22] = 0.91;
			 $this->loteProducao[23] = 0.92;
			 $this->loteProducao[24] = 0.93;
			 $this->loteProducao[25] = 0.94;
			 $this->loteProducao[26] = 0.95;
			 $this->loteProducao[27] = 0.95;
			 $this->loteProducao[28] = 0.95;
			 $this->loteProducao[29] = 0.95;
			 $this->loteProducao[30] = 0.95;
			 $this->loteProducao[31] = 0.94;
			 $this->loteProducao[32] = 0.94;
			 $this->loteProducao[33] = 0.94;
			 $this->loteProducao[34] = 0.94;
			 $this->loteProducao[35] = 0.93;
			 $this->loteProducao[36] = 0.93;
			 $this->loteProducao[37] = 0.93;
			 $this->loteProducao[38] = 0.93;
			 $this->loteProducao[39] = 0.92;
			 $this->loteProducao[40] = 0.92;
			 $this->loteProducao[41] = 0.92;
			 $this->loteProducao[42] = 0.92;
			 $this->loteProducao[43] = 0.91;
			 $this->loteProducao[44] = 0.91;
			 $this->loteProducao[45] = 0.91;
			 $this->loteProducao[46] = 0.91;
			 $this->loteProducao[47] = 0.9;
			 $this->loteProducao[48] = 0.9;
			 $this->loteProducao[49] = 0.89;
			 $this->loteProducao[50] = 0.89;
			 $this->loteProducao[51] = 0.89;
			 $this->loteProducao[52] = 0.88;
			 $this->loteProducao[53] = 0.88;
			 $this->loteProducao[54] = 0.87;
			 $this->loteProducao[55] = 0.87;
			 $this->loteProducao[56] = 0.87;
			 $this->loteProducao[57] = 0.86;
			 $this->loteProducao[58] = 0.86;
			 $this->loteProducao[59] = 0.85;
			 $this->loteProducao[60] = 0.85;
			 $this->loteProducao[61] = 0.85;
			 $this->loteProducao[62] = 0.84;
			 $this->loteProducao[63] = 0.84;
			 $this->loteProducao[64] = 0.83;
			 $this->loteProducao[65] = 0.83;
			 $this->loteProducao[66] = 0.83;
			 $this->loteProducao[67] = 0.82;
			 $this->loteProducao[68] = 0.82;
			 $this->loteProducao[69] = 0.81;
			 $this->loteProducao[70] = 0.81;
			 $this->loteProducao[71] = 0.8;
			 $this->loteProducao[72] = 0.8;
			 $this->loteProducao[73] = 0.79;
			 $this->loteProducao[74] = 0.78;
			 $this->loteProducao[75] = 0.77;
			 $this->loteProducao[76] = 0.76;
			 $this->loteProducao[77] = 0.75;
			 $this->loteProducao[78] = 0.74;
			 $this->loteProducao[79] = 0.73;
			 $this->loteProducao[80] = 0.72;
			 $this->loteProducao[81] = 0.72;
			 $this->loteProducao[82] = 0.72;
			 $this->loteProducao[83] = 0.72;
			 $this->loteProducao[84] = 0.72;
			 $this->loteProducao[85] = 0.71;
			 $this->loteProducao[86] = 0.71;
			 $this->loteProducao[87] = 0.71;
			 $this->loteProducao[88] = 0.71;
			 $this->loteProducao[89] = 0.7;
			 //---------------------------------------------------------------
			 $this->loteProducaoAcumulado = array();//Aqui é acumulação de producao em porcentagem, basta multiplicar pelo numero de galinhas para saber quanto ovos já foram produzidos na semana tal.
			 $this->loteProducaoAcumulado[0] = 0;
			$this->loteProducaoAcumulado[1] = 0;
			$this->loteProducaoAcumulado[2] = 0;
			$this->loteProducaoAcumulado[3] = 0;
			$this->loteProducaoAcumulado[4] = 0;
			$this->loteProducaoAcumulado[5] = 0;
			$this->loteProducaoAcumulado[6] = 0;
			$this->loteProducaoAcumulado[7] = 0;
			$this->loteProducaoAcumulado[8] = 0;
			$this->loteProducaoAcumulado[9] = 0;
			$this->loteProducaoAcumulado[10] = 0;
			$this->loteProducaoAcumulado[11] = 0;
			$this->loteProducaoAcumulado[12] = 0;
			$this->loteProducaoAcumulado[13] = 0;
			$this->loteProducaoAcumulado[14] = 0;
			$this->loteProducaoAcumulado[15] = 0;
			$this->loteProducaoAcumulado[16] = 0;
			$this->loteProducaoAcumulado[17] = 0.7;
			$this->loteProducaoAcumulado[18] = 2.8;
			$this->loteProducaoAcumulado[19] = 7;
			$this->loteProducaoAcumulado[20] = 12.6;
			$this->loteProducaoAcumulado[21] = 18.9;
			$this->loteProducaoAcumulado[22] = 25.27;
			$this->loteProducaoAcumulado[23] = 31.71;
			$this->loteProducaoAcumulado[24] = 38.22;
			$this->loteProducaoAcumulado[25] = 44.8;
			$this->loteProducaoAcumulado[26] = 51.45;
			$this->loteProducaoAcumulado[27] = 58.1;
			$this->loteProducaoAcumulado[28] = 64.75;
			$this->loteProducaoAcumulado[29] = 71.4;
			$this->loteProducaoAcumulado[30] = 78.05;
			$this->loteProducaoAcumulado[31] = 84.63;
			$this->loteProducaoAcumulado[32] = 91.21;
			$this->loteProducaoAcumulado[33] = 97.79;
			$this->loteProducaoAcumulado[34] = 104.37;
			$this->loteProducaoAcumulado[35] = 110.88;
			$this->loteProducaoAcumulado[36] = 117.39;
			$this->loteProducaoAcumulado[37] = 123.9;
			$this->loteProducaoAcumulado[38] = 130.41;
			$this->loteProducaoAcumulado[39] = 136.85;
			$this->loteProducaoAcumulado[40] = 143.29;
			$this->loteProducaoAcumulado[41] = 149.73;
			$this->loteProducaoAcumulado[42] = 156.17;
			$this->loteProducaoAcumulado[43] = 162.54;
			$this->loteProducaoAcumulado[44] = 168.91;
			$this->loteProducaoAcumulado[45] = 175.28;
			$this->loteProducaoAcumulado[46] = 181.65;
			$this->loteProducaoAcumulado[47] = 187.95;
			$this->loteProducaoAcumulado[48] = 194.25;
			$this->loteProducaoAcumulado[49] = 200.48;
			$this->loteProducaoAcumulado[50] = 206.71;
			$this->loteProducaoAcumulado[51] = 212.94;
			$this->loteProducaoAcumulado[52] = 219.1;
			$this->loteProducaoAcumulado[53] = 225.26;
			$this->loteProducaoAcumulado[54] = 231.35;
			$this->loteProducaoAcumulado[55] = 237.44;
			$this->loteProducaoAcumulado[56] = 243.53;
			$this->loteProducaoAcumulado[57] = 249.55;
			$this->loteProducaoAcumulado[58] = 255.57;
			$this->loteProducaoAcumulado[59] = 261.52;
			$this->loteProducaoAcumulado[60] = 267.47;
			$this->loteProducaoAcumulado[61] = 273.42;
			$this->loteProducaoAcumulado[62] = 279.3;
			$this->loteProducaoAcumulado[63] = 285.18;
			$this->loteProducaoAcumulado[64] = 290.99;
			$this->loteProducaoAcumulado[65] = 296.8;
			$this->loteProducaoAcumulado[66] = 302.61;
			$this->loteProducaoAcumulado[67] = 308.35;
			$this->loteProducaoAcumulado[68] = 314.09;
			$this->loteProducaoAcumulado[69] = 319.76;
			$this->loteProducaoAcumulado[70] = 325.43;
			$this->loteProducaoAcumulado[71] = 331.03;
			$this->loteProducaoAcumulado[72] = 336.63;
			$this->loteProducaoAcumulado[73] = 342.16;
			$this->loteProducaoAcumulado[74] = 347.62;
			$this->loteProducaoAcumulado[75] = 353.01;
			$this->loteProducaoAcumulado[76] = 358.33;
			$this->loteProducaoAcumulado[77] = 363.58;
			$this->loteProducaoAcumulado[78] = 368.76;
			$this->loteProducaoAcumulado[79] = 373.87;
			$this->loteProducaoAcumulado[80] = 378.91;
			$this->loteProducaoAcumulado[81] = 383.95;
			$this->loteProducaoAcumulado[82] = 388.99;
			$this->loteProducaoAcumulado[83] = 394.03;
			$this->loteProducaoAcumulado[84] = 399.07;
			$this->loteProducaoAcumulado[85] = 404.04;
			$this->loteProducaoAcumulado[86] = 409.01;
			$this->loteProducaoAcumulado[87] = 413.98;
			$this->loteProducaoAcumulado[88] = 418.95;
			$this->loteProducaoAcumulado[89] = 423.85;
			 
			 //---------------------------------------------------------------
			 //---------------------------------------------------------------
			 //---------------------------------------------------------------
			 
			 $this->loteConsumo = array();
			 $this->loteConsumo[0] = 14;
			 $this->loteConsumo[1] = 19;
			 $this->loteConsumo[2] = 24;
			 $this->loteConsumo[3] = 28;
			 $this->loteConsumo[4] = 35;
			 $this->loteConsumo[5] = 39;
			 $this->loteConsumo[6] = 42;
			 $this->loteConsumo[7] = 46;
			 $this->loteConsumo[8] = 50;
			 $this->loteConsumo[9] = 54;
			 $this->loteConsumo[10] = 60;
			 $this->loteConsumo[11] = 64;
			 $this->loteConsumo[12] = 70;
			 $this->loteConsumo[13] = 73;
			 $this->loteConsumo[14] = 76;
			 $this->loteConsumo[15] = 79;
			 $this->loteConsumo[16] = 81;
			 $this->loteConsumo[17] = 85;
			 $this->loteConsumo[18] = 89;
			 $this->loteConsumo[19] = 93;
			 $this->loteConsumo[20] = 98;
			 $this->loteConsumo[21] = 102;
			 $this->loteConsumo[22] = 105;
			 $this->loteConsumo[23] = 108;
			 $this->loteConsumo[24] = 110;
			 $this->loteConsumo[25] = 111;
			 $this->loteConsumo[26] = 111;
			 $this->loteConsumo[27] = 111;
			 $this->loteConsumo[28] = 111;
			 $this->loteConsumo[29] = 111;
			 $this->loteConsumo[30] = 112;
			 $this->loteConsumo[31] = 112;
			 $this->loteConsumo[32] = 112;
			 $this->loteConsumo[33] = 112;
			 $this->loteConsumo[34] = 112;
			 $this->loteConsumo[35] = 112;
			 $this->loteConsumo[36] = 112;
			 $this->loteConsumo[37] = 112;
			 $this->loteConsumo[38] = 112;
			 $this->loteConsumo[39] = 112;
			 $this->loteConsumo[40] = 112;
			 $this->loteConsumo[41] = 112;
			 $this->loteConsumo[42] = 112;
			 $this->loteConsumo[43] = 112;
			 $this->loteConsumo[44] = 111;
			 $this->loteConsumo[45] = 111;
			 $this->loteConsumo[46] = 111;
			 $this->loteConsumo[47] = 111;
			 $this->loteConsumo[48] = 111;
			 $this->loteConsumo[49] = 111;
			 $this->loteConsumo[50] = 111;
			 $this->loteConsumo[51] = 111;
			 $this->loteConsumo[52] = 110;
			 $this->loteConsumo[53] = 110;
			 $this->loteConsumo[54] = 110;
			 $this->loteConsumo[55] = 110;
			 $this->loteConsumo[56] = 110;
			 $this->loteConsumo[57] = 110;
			 $this->loteConsumo[58] = 110;
			 $this->loteConsumo[59] = 110;
			 $this->loteConsumo[60] = 110;
			 $this->loteConsumo[61] = 110;
			 $this->loteConsumo[62] = 110;
			 $this->loteConsumo[63] = 110;
			 $this->loteConsumo[64] = 110;
			 $this->loteConsumo[65] = 110;
			 $this->loteConsumo[66] = 110;
			 $this->loteConsumo[67] = 110;
			 $this->loteConsumo[68] = 110;
			 $this->loteConsumo[69] = 110;
			 $this->loteConsumo[70] = 110;
			 $this->loteConsumo[71] = 110;
			 $this->loteConsumo[72] = 110;
			 $this->loteConsumo[73] = 110;
			 $this->loteConsumo[74] = 110;
			 $this->loteConsumo[75] = 110;
			 $this->loteConsumo[76] = 110;
			 $this->loteConsumo[77] = 110;
			 $this->loteConsumo[78] = 110;
			 $this->loteConsumo[79] = 110;
			 $this->loteConsumo[80] = 110;
			 $this->loteConsumo[81] = 110;
			 $this->loteConsumo[82] = 110;
			 $this->loteConsumo[83] = 110;
			 $this->loteConsumo[84] = 110;
			 $this->loteConsumo[85] = 110;
			 $this->loteConsumo[86] = 110;
			 $this->loteConsumo[87] = 110;
			 $this->loteConsumo[88] = 110;
			 $this->loteConsumo[89] = 110;
			 
			 //---------------------------------------------------------------
			 $this->loteConsumoAcumulado = array();
			 $this->loteConsumoAcumulado[0] = 98;
			$this->loteConsumoAcumulado[1] = 231;
			$this->loteConsumoAcumulado[2] = 399;
			$this->loteConsumoAcumulado[3] = 595;
			$this->loteConsumoAcumulado[4] = 840;
			$this->loteConsumoAcumulado[5] = 1113;
			$this->loteConsumoAcumulado[6] = 1407;
			$this->loteConsumoAcumulado[7] = 1729;
			$this->loteConsumoAcumulado[8] = 2079;
			$this->loteConsumoAcumulado[9] = 2457;
			$this->loteConsumoAcumulado[10] = 2877;
			$this->loteConsumoAcumulado[11] = 3325;
			$this->loteConsumoAcumulado[12] = 3815;
			$this->loteConsumoAcumulado[13] = 4326;
			$this->loteConsumoAcumulado[14] = 4858;
			$this->loteConsumoAcumulado[15] = 5411;
			$this->loteConsumoAcumulado[16] = 5978;
			$this->loteConsumoAcumulado[17] = 6573;
			$this->loteConsumoAcumulado[18] = 7196;
			$this->loteConsumoAcumulado[19] = 7847;
			$this->loteConsumoAcumulado[20] = 8533;
			$this->loteConsumoAcumulado[21] = 9247;
			$this->loteConsumoAcumulado[22] = 9982;
			$this->loteConsumoAcumulado[23] = 10738;
			$this->loteConsumoAcumulado[24] = 11508;
			$this->loteConsumoAcumulado[25] = 12285;
			$this->loteConsumoAcumulado[26] = 13062;
			$this->loteConsumoAcumulado[27] = 13839;
			$this->loteConsumoAcumulado[28] = 14616;
			$this->loteConsumoAcumulado[29] = 15393;
			$this->loteConsumoAcumulado[30] = 16177;
			$this->loteConsumoAcumulado[31] = 16961;
			$this->loteConsumoAcumulado[32] = 17745;
			$this->loteConsumoAcumulado[33] = 18529;
			$this->loteConsumoAcumulado[34] = 19313;
			$this->loteConsumoAcumulado[35] = 20097;
			$this->loteConsumoAcumulado[36] = 20881;
			$this->loteConsumoAcumulado[37] = 21665;
			$this->loteConsumoAcumulado[38] = 22449;
			$this->loteConsumoAcumulado[39] = 23233;
			$this->loteConsumoAcumulado[40] = 24017;
			$this->loteConsumoAcumulado[41] = 24801;
			$this->loteConsumoAcumulado[42] = 25585;
			$this->loteConsumoAcumulado[43] = 26369;
			$this->loteConsumoAcumulado[44] = 27146;
			$this->loteConsumoAcumulado[45] = 27923;
			$this->loteConsumoAcumulado[46] = 28700;
			$this->loteConsumoAcumulado[47] = 29477;
			$this->loteConsumoAcumulado[48] = 30254;
			$this->loteConsumoAcumulado[49] = 31031;
			$this->loteConsumoAcumulado[50] = 31808;
			$this->loteConsumoAcumulado[51] = 32585;
			$this->loteConsumoAcumulado[52] = 33355;
			$this->loteConsumoAcumulado[53] = 34125;
			$this->loteConsumoAcumulado[54] = 34895;
			$this->loteConsumoAcumulado[55] = 35665;
			$this->loteConsumoAcumulado[56] = 36435;
			$this->loteConsumoAcumulado[57] = 37205;
			$this->loteConsumoAcumulado[58] = 37975;
			$this->loteConsumoAcumulado[59] = 38745;
			$this->loteConsumoAcumulado[60] = 39515;
			$this->loteConsumoAcumulado[61] = 40285;
			$this->loteConsumoAcumulado[62] = 41055;
			$this->loteConsumoAcumulado[63] = 41825;
			$this->loteConsumoAcumulado[64] = 42595;
			$this->loteConsumoAcumulado[65] = 43365;
			$this->loteConsumoAcumulado[66] = 44135;
			$this->loteConsumoAcumulado[67] = 44905;
			$this->loteConsumoAcumulado[68] = 45675;
			$this->loteConsumoAcumulado[69] = 46445;
			$this->loteConsumoAcumulado[70] = 47215;
			$this->loteConsumoAcumulado[71] = 47985;
			$this->loteConsumoAcumulado[72] = 48755;
			$this->loteConsumoAcumulado[73] = 49525;
			$this->loteConsumoAcumulado[74] = 50295;
			$this->loteConsumoAcumulado[75] = 51065;
			$this->loteConsumoAcumulado[76] = 51835;
			$this->loteConsumoAcumulado[77] = 52605;
			$this->loteConsumoAcumulado[78] = 53375;
			$this->loteConsumoAcumulado[79] = 54145;
			$this->loteConsumoAcumulado[80] = 54915;
			$this->loteConsumoAcumulado[81] = 55685;
			$this->loteConsumoAcumulado[82] = 56455;
			$this->loteConsumoAcumulado[83] = 57225;
			$this->loteConsumoAcumulado[84] = 57995;
			$this->loteConsumoAcumulado[85] = 58765;
			$this->loteConsumoAcumulado[86] = 59535;
			$this->loteConsumoAcumulado[87] = 60305;
			$this->loteConsumoAcumulado[88] = 61075;
			$this->loteConsumoAcumulado[89] = 61845;
		//---------------------------------------------------------------	

	 
		}
		
		public function getProducao($numAves, $semana){
			 
			 return ($this->loteProducao[$semana-1] * $numAves);
			
		}
		public function getProducaoTotal($numAves, $semana){
			 
			 return ($this->loteProducaoAcumulado[$semana-1] * $numAves);
			
		}
		
		
		public function getConsumoTotal($numAves, $semana){
			 
			 return ($this->loteConsumoAcumulado[$semana-1] * $numAves);
			
		}
		
		public function getConsumo($numAves, $semana){
			 
			 return ($this->loteConsumo[$semana-1] * $numAves);
			
		}
		
	
		
		 
	}
	 
	 
	 $custoAve = 3.5;
	 $custoVacinasAve = 1.0;
	 $custoInicial = 2.07;
	 $custoCresc = 1.84;
	 $custoPostura = 1.84;
	 
	 $lote1 = new LoteGalinhas($custoAve, $custoVacinasAve, $custoInicial, $custoCresc, $custoPostura);
	 $nAves = 2000;
	 $semana = 88;
	 
	 echo "<br>Qtde Aves =  ". $nAves;
	 echo "<br>SEMANA =  ". $semana;
	 echo"<Br>";
	 
	 $producaoCXTotal = $lote1->getProducaoTotal($nAves, $semana)/360;
	 echo "<br>Acumulado ". $producaoCXTotal ." CXs";
	 echo "<br>Na semana ". ($lote1->getProducao($nAves, $semana)/360)*7 ." CXs";
	 echo "<br>Taxa Producao Dia ". ($lote1->loteProducao[$semana-1])*100 ."%";
	 echo "<br>Acumulado ". $lote1->getConsumoTotal($nAves, $semana)/1000 ." KG";
	 echo "<br>Na semana ". ($lote1->getConsumo($nAves, $semana)/1000)*7 ." KG";
	 echo "<br>Consumo Dia ". ($lote1->loteConsumo[$semana-1])/1000*$nAves ." KG";
	 echo "<br>Consumo/CX ". ($lote1->getConsumoTotal($nAves, $semana)/1000)/($lote1->getProducaoTotal($nAves, $semana)/360);
	 
	 
	 
			
	 echo"<br>";
	 $consumoInicial = ($lote1->getConsumoTotal($nAves, 8)/1000);
	 $consumoCrescimento = ($lote1->getConsumoTotal($nAves, 17)/1000)-$consumoInicial;
	 $consumoPostura = (($lote1->getConsumoTotal($nAves, $semana)/1000) - $consumoInicial - $consumoCrescimento);
	 
	 echo "<br>Consumo Inicial ". $consumoInicial ." KG";
	 echo "<br>Consumo Crescimento ". $consumoCrescimento ." KG";
	 echo "<br>Consumo Postura ". $consumoPostura ." KG";
	 
	 echo"<br>";
	 $custoAveTotal = $custoAve * $nAves;
	 $custoVacinasTotal = $custoVacinasAve * $nAves;
	 $custoInicialTotal = $custoInicial * $consumoInicial;
	 $custoCrescimentoTotal = $custoCresc * $consumoCrescimento ;
	 $custoPosturaTotal = $custoPostura * $consumoPostura;
	 
	 echo "<br>Custo Pintinhas = R$ ". $custoAveTotal ."";
	 echo "<br>Custo Vacinas = R$ ". $custoVacinasTotal ."";
	 echo "<br>Custo Inicial = R$ ". $custoInicialTotal ."";
	 echo "<br>Custo Crescimento = R$ ". $custoCrescimentoTotal ."";
	 echo "<br>Custo Postura = R$ ". $custoPosturaTotal ."";
	 
	 echo"<br>";
	 $custoTotalLote = $custoAveTotal + $custoVacinasTotal + $custoVacinasTotal + $custoInicialTotal + $custoCrescimentoTotal +$custoPosturaTotal;
	 echo "<br>Custo Total Lote = R$ ". $custoTotalLote;

	 echo"<br>";
	 echo "<br>Custo/CX = R$ ". $custoTotalLote / $producaoCXTotal ;
	 echo"<br>";
	 echo"<br>";
	 echo"<br>/////////////////////////////////////////////////////////";
	 echo"<br>";
	 
	
	$alojamento = "2021-02-23";
	$descarte = date('Y-m-d', strtotime($alojamento. ' + '. 88 .' weeks'));
		 
		 
		 
	 echo "<br> Lote1 Alojamento [". date('d/m/Y', strtotime($alojamento)) ."] === Descarte [". date('d/m/Y', strtotime($descarte)) ."]";	
	 
	 
		 //echo "<br> ". date('d/m/Y', $dia) ." - ". date('m', $dia);	
				 
		
	
		 
 
	
	
	
	


?>
