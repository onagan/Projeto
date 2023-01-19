<!DOCTYPE html>
<p lang="PT-BR">
<?php
include "config.php";
?>
<html>
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comparar_Controlador_Fotovoltaico_Final</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Comparar_Controlador_Fotovoltaico_Final;
		--web-view-id: Comparar_Controlador_Fotovoltaico_Final;
		--web-scale-on-resize: true;
		--web-application: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Comparar_Controlador_Fotovoltaico_Final;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Comparar_Controlador_Fotovoltaico_Final {
		position: absolute;
		width: 1920px;
		height: 2461px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Comparar_Controlador_Fotovoltaico_Final;
		--web-view-id: Comparar_Controlador_Fotovoltaico_Final;
		--web-scale-on-resize: true;
		--web-application: true;
		--web-enable-deep-linking: true;
	}
	@keyframes fadein {
	
		0% {
			opacity: 0;
		}
		100% {
			opacity: 1;
		}
	
	}
	#capa {
		position: absolute;
		width: 1920px;
		height: 1080px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Retngulo_47 {
		fill: rgba(250,255,94,1);
	}
	.Retngulo_47 {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 2051px;
		left: 0px;
		top: 344px;
	}
	#Retngulo_1 {
		fill: rgba(6,29,128,1);
	}
	.Retngulo_1 {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 50px;
		left: 0px;
		top: 0px;
	}
	#COMPARAR {
		left: 95px;
		top: 12px;
		position: absolute;
		overflow: visible;
		width: 117px;
		height: 21px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Equipamento_equipamento_comparar.html;
		cursor: pointer;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(0,0,0,1);
	}
	#EQUIPAMENTOS {
		left: 231px;
		top: 12px;
		position: absolute;
		overflow: visible;
		width: 163px;
		height: 21px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Equipamento.html;
		cursor: pointer;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#QUEM_SOMOS {
		left: 413px;
		top: 12px;
		position: absolute;
		overflow: visible;
		width: 144px;
		height: 21px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: quem_somos.html;
		cursor: pointer;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#SUPORTE {
		left: 576px;
		top: 12px;
		position: absolute;
		overflow: visible;
		width: 98px;
		height: 21px;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Suporte.html;
		cursor: pointer;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Retngulo_7 {
		fill: rgba(6,29,128,1);
	}
	.Retngulo_7 {
		position: absolute;
		overflow: visible;
		width: 1920px;
		height: 66px;
		left: 0px;
		top: 2395px;
	}
	#Grupo_4 {
		position: absolute;
		width: 278px;
		height: 52px;
		left: 821px;
		top: 2409px;
		overflow: visible;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Contato.html;
		cursor: pointer;
	}
	#Imagem_1 {
		mix-blend-mode: darken;
		position: absolute;
		width: 48px;
		height: 38px;
		left: 0px;
		top: 7px;
		overflow: visible;
	}
	#Imagem_4 {
		mix-blend-mode: darken;
		position: absolute;
		width: 47px;
		height: 51px;
		left: 231px;
		top: 1px;
		overflow: visible;
	}
	#Imagem_7 {
		mix-blend-mode: darken;
		position: absolute;
		width: 52px;
		height: 51px;
		left: 58px;
		top: 0px;
		overflow: visible;
	}
	#Imagem_8 {
		mix-blend-mode: darken;
		position: absolute;
		width: 48px;
		height: 46px;
		left: 120px;
		top: 2px;
		overflow: visible;
	}
	#Imagem_9 {
		mix-blend-mode: darken;
		position: absolute;
		width: 43px;
		height: 51px;
		left: 178px;
		top: 0px;
		overflow: visible;
	}
	#Retngulo_11 {
		fill: rgba(6,29,128,1);
	}
	.Retngulo_11 {
		position: absolute;
		overflow: visible;
		width: 25px;
		height: 2358px;
		left: 948px;
		top: 37px;
	}
	#Grupo_51 {
		position: absolute;
		width: 711px;
		height: 77px;
		left: 110px;
		top: 95px;
		overflow: visible;
	}
	#Grupo_29 {
		position: absolute;
		width: 543px;
		height: 77px;
		left: 91px;
		top: 0px;
		overflow: visible;
	}
	#Grupo_12 {
		position: absolute;
		width: 543px;
		height: 77px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Grupo_6 {
		position: absolute;
		width: 543px;
		height: 77px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Caminho_1 {
		fill: rgba(72,67,67,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Caminho_1 {
		overflow: visible;
		position: absolute;
		width: 543px;
		height: 77px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Painel_1_controlador {
		left: 0px;
		top: 14px;
		position: absolute;
		overflow: visible;
		width: 712px;
		height: 58px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Grupo_52 {
		position: absolute;
		width: 711px;
		height: 77px;
		left: 1100px;
		top: 95px;
		overflow: visible;
	}
	#Grupo_29_bg {
		position: absolute;
		width: 543px;
		height: 77px;
		left: 91px;
		top: 0px;
		overflow: visible;
	}
	#Grupo_12_bh {
		position: absolute;
		width: 543px;
		height: 77px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Grupo_6_bi {
		position: absolute;
		width: 543px;
		height: 77px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Caminho_1_bj {
		fill: rgba(72,67,67,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Caminho_1_bj {
		overflow: visible;
		position: absolute;
		width: 543px;
		height: 77px;
		left: 0px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Painel_3_controlador {
		left: 0px;
		top: 14px;
		position: absolute;
		overflow: visible;
		width: 712px;
		height: 58px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Grupo_39 {
		position: absolute;
		width: 127px;
		height: 128px;
		left: -15px;
		top: -41px;
		overflow: visible;
		--web-animation: fadein 0.30000001192092896s ease-out;
		--web-action-type: page;
		--web-action-target: Main.php;
		cursor: pointer;
	}
	#Logo_COS_White {
		position: absolute;
		width: 127px;
		height: 128px;
		left: 0px;
		top: 0px;
		overflow: visible;
	}
	#Logo_COS {
		display: none;
		position: absolute;
		width: 129px;
		height: 129px;
		left: -1px;
		top: -1px;
		overflow: visible;
	}
	#Main {
		fill: transparent;
	}
	.Main {
		position: absolute;
		overflow: visible;
		width: 86px;
		height: 31px;
		left: 19px;
		top: 48px;
	}
	#Grupo_57 {
		position: absolute;
		width: 525px;
		height: 1924px;
		left: 215px;
		top: 390px;
		overflow: visible;
	}
	#Retngulo_57 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_57 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Retngulo_137 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_137 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 962px;
	}
	#Retngulo_91 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_91 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 74px;
	}
	#Retngulo_139 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_139 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1036px;
	}
	#Retngulo_95 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_95 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 148px;
	}
	#Retngulo_145 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_145 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1110px;
	}
	#Retngulo_99 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_99 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 222px;
	}
	#Retngulo_149 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_149 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1184px;
	}
	#Retngulo_103 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_103 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 296px;
	}
	#Retngulo_150 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_150 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1258px;
	}
	#Retngulo_107 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_107 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 370px;
	}
	#Retngulo_151 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_151 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1332px;
	}
	#Retngulo_111 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_111 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 444px;
	}
	#Retngulo_152 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_152 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1406px;
	}
	#Retngulo_115 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_115 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 518px;
	}
	#Retngulo_153 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_153 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1480px;
	}
	#Retngulo_119 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_119 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 592px;
	}
	#Retngulo_169 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_169 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1554px;
	}
	#Retngulo_123 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_123 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_173 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_173 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1628px;
	}
	#Retngulo_127 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_127 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_177 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_177 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_131 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_131 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 814px;
	}
	#Retngulo_178 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_178 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_135 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_135 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 888px;
	}
	#Retngulo_185 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_185 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1850px;
	}
	#Retngulo_58 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_58 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 37px;
	}
	#Retngulo_140 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_140 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 999px;
	}
	#Retngulo_89 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_89 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 111px;
	}
	#Retngulo_141 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_141 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1073px;
	}
	#Retngulo_93 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_93 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 185px;
	}
	#Retngulo_146 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_146 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1147px;
	}
	#Retngulo_97 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_97 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 259px;
	}
	#Retngulo_154 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_154 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1221px;
	}
	#Retngulo_101 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_101 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 333px;
	}
	#Retngulo_155 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_155 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1295px;
	}
	#Retngulo_105 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_105 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 407px;
	}
	#Retngulo_156 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_156 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1369px;
	}
	#Retngulo_109 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_109 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 481px;
	}
	#Retngulo_157 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_157 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1443px;
	}
	#Retngulo_113 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_113 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 555px;
	}
	#Retngulo_158 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_158 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1517px;
	}
	#Retngulo_117 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_117 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 629px;
	}
	#Retngulo_170 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_170 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1591px;
	}
	#Retngulo_121 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_121 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_175 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_175 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1665px;
	}
	#Retngulo_125 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_125 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_179 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_179 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_129 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_129 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 851px;
	}
	#Retngulo_180 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_180 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_133 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_133 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 925px;
	}
	#Retngulo_186 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_186 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1887px;
	}
	#Retngulo_72 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_72 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Retngulo_138 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_138 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 962px;
	}
	#Retngulo_92 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_92 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 74px;
	}
	#Retngulo_142 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_142 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1036px;
	}
	#Retngulo_96 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_96 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 148px;
	}
	#Retngulo_147 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_147 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1110px;
	}
	#Retngulo_100 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_100 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 222px;
	}
	#Retngulo_159 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_159 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1184px;
	}
	#Retngulo_104 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_104 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 296px;
	}
	#Retngulo_160 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_160 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1258px;
	}
	#Retngulo_108 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_108 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 370px;
	}
	#Retngulo_161 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_161 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1332px;
	}
	#Retngulo_112 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_112 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 444px;
	}
	#Retngulo_162 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_162 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1406px;
	}
	#Retngulo_116 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_116 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 518px;
	}
	#Retngulo_163 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_163 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1480px;
	}
	#Retngulo_120 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_120 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 592px;
	}
	#Retngulo_171 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_171 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1554px;
	}
	#Retngulo_124 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_124 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_174 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_174 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1628px;
	}
	#Retngulo_128 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_128 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_181 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_181 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_132 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_132 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 814px;
	}
	#Retngulo_182 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_182 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_136 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_136 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 888px;
	}
	#Retngulo_187 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_187 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1850px;
	}
	#Retngulo_73 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_73 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 37px;
	}
	#Retngulo_143 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_143 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 999px;
	}
	#Retngulo_90 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_90 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 111px;
	}
	#Retngulo_144 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_144 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1073px;
	}
	#Retngulo_94 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_94 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 185px;
	}
	#Retngulo_148 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_148 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1147px;
	}
	#Retngulo_98 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_98 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 259px;
	}
	#Retngulo_164 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_164 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1221px;
	}
	#Retngulo_102 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_102 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 333px;
	}
	#Retngulo_165 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_165 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1295px;
	}
	#Retngulo_106 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_106 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 407px;
	}
	#Retngulo_166 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_166 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1369px;
	}
	#Retngulo_110 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_110 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 481px;
	}
	#Retngulo_167 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_167 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1443px;
	}
	#Retngulo_114 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_114 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 555px;
	}
	#Retngulo_168 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_168 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1517px;
	}
	#Retngulo_118 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_118 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 629px;
	}
	#Retngulo_172 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_172 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1591px;
	}
	#Retngulo_122 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_122 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_176 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_176 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1665px;
	}
	#Retngulo_126 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_126 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_183 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_183 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_130 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_130 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 851px;
	}
	#Retngulo_184 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_184 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_134 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_134 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 925px;
	}
	#Retngulo_188 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_188 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1887px;
	}
	#Fabricante {
		left: 12px;
		top: 8px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x {
		left: 12px;
		top: 45px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_eo {
		left: 12px;
		top: 119px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ep {
		left: 12px;
		top: 193px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_eq {
		left: 12px;
		top: 267px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_er {
		left: 12px;
		top: 341px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_es {
		left: 12px;
		top: 415px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_et {
		left: 12px;
		top: 489px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_eu {
		left: 12px;
		top: 563px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ev {
		left: 12px;
		top: 637px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ew {
		left: 12px;
		top: 711px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ex {
		left: 12px;
		top: 785px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ey {
		left: 12px;
		top: 859px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ez {
		left: 12px;
		top: 933px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_e {
		left: 12px;
		top: 1007px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fa {
		left: 12px;
		top: 1081px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fb {
		left: 12px;
		top: 1155px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fc {
		left: 12px;
		top: 1229px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fd {
		left: 12px;
		top: 1303px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fe {
		left: 12px;
		top: 1377px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ff {
		left: 12px;
		top: 1451px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fg {
		left: 12px;
		top: 1525px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fh {
		left: 12px;
		top: 1599px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fi {
		left: 12px;
		top: 1673px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fj {
		left: 12px;
		top: 1747px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fk {
		left: 12px;
		top: 1821px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_fl {
		left: 12px;
		top: 1895px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Voltagem_nominal_do_sistema_mi {
		left: 12px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Voltagem_nominal_do_sistema_ma {
		left: 12px;
		top: 156px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Corrente_nominal_de_carga {
		left: 2px;
		top: 230px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Corrente_nominal_de_descarga {
		left: 12px;
		top: 304px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_entrada_de_bateria {
		left: 12px;
		top: 378px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Max_tenso_de_circuito_aberto_d {
		left: 12px;
		top: 452px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Max_potencia_de_entrada_painel {
		left: 12px;
		top: 526px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_equali {
		left: 2px;
		top: 600px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_equali_fl {
		left: 12px;
		top: 674px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-__Boost {
		left: 12px;
		top: 748px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-__Boost_fn {
		left: 12px;
		top: 822px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_Boost_ {
		left: 12px;
		top: 896px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_Flutua {
		left: 12px;
		top: 970px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_reconexo_por_baixa_vo {
		left: 12px;
		top: 1044px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_desconexo_por_baixa_t {
		left: 2px;
		top: 1118px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Eficincia_de_converso_de_pico {
		left: 12px;
		top: 1192px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#MPPT_preciso {
		left: 12px;
		top: 1266px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Temperatura_de_trabalho {
		left: 12px;
		top: 1340px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Grau_de_proteo {
		left: 12px;
		top: 1414px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Terminais_de_potencia {
		left: 12px;
		top: 1488px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Peso {
		left: 12px;
		top: 1562px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Garantia {
		left: 12px;
		top: 1636px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Interface_de_comunicao {
		left: 12px;
		top: 1710px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Modelo_de_bateria {
		left: 12px;
		top: 1784px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Link {
		left: 12px;
		top: 1858px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Grupo_61 {
		position: absolute;
		width: 525px;
		height: 1924px;
		left: 1201px;
		top: 390px;
		overflow: visible;
	}
	#Retngulo_57_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_57_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Retngulo_137_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_137_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 962px;
	}
	#Retngulo_91_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_91_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 74px;
	}
	#Retngulo_139_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_139_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1036px;
	}
	#Retngulo_95_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_95_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 148px;
	}
	#Retngulo_145_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_145_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1110px;
	}
	#Retngulo_99_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_99_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 222px;
	}
	#Retngulo_149_ga {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_149_ga {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1184px;
	}
	#Retngulo_103_gb {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_103_gb {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 296px;
	}
	#Retngulo_150_gc {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_150_gc {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1258px;
	}
	#Retngulo_107_gd {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_107_gd {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 370px;
	}
	#Retngulo_151_ge {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_151_ge {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1332px;
	}
	#Retngulo_111_gf {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_111_gf {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 444px;
	}
	#Retngulo_152_gg {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_152_gg {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1406px;
	}
	#Retngulo_115_gh {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_115_gh {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 518px;
	}
	#Retngulo_153_gi {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_153_gi {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1480px;
	}
	#Retngulo_119_gj {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_119_gj {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 592px;
	}
	#Retngulo_169_gk {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_169_gk {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1554px;
	}
	#Retngulo_123_gl {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_123_gl {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_173_gm {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_173_gm {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1628px;
	}
	#Retngulo_127_gn {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_127_gn {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_177_go {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_177_go {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_131_gp {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_131_gp {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 814px;
	}
	#Retngulo_178_gq {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_178_gq {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_135_gr {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_135_gr {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 888px;
	}
	#Retngulo_185_gs {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_185_gs {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1850px;
	}
	#Retngulo_58_gt {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_58_gt {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 37px;
	}
	#Retngulo_140_gu {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_140_gu {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 999px;
	}
	#Retngulo_89_gv {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_89_gv {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 111px;
	}
	#Retngulo_141_gw {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_141_gw {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1073px;
	}
	#Retngulo_93_gx {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_93_gx {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 185px;
	}
	#Retngulo_146_gy {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_146_gy {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1147px;
	}
	#Retngulo_97_gz {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_97_gz {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 259px;
	}
	#Retngulo_154_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_154_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1221px;
	}
	#Retngulo_101_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_101_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 333px;
	}
	#Retngulo_155_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_155_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1295px;
	}
	#Retngulo_105_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_105_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 407px;
	}
	#Retngulo_156_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_156_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1369px;
	}
	#Retngulo_109_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_109_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 481px;
	}
	#Retngulo_157_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_157_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1443px;
	}
	#Retngulo_113_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_113_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 555px;
	}
	#Retngulo_158_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_158_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1517px;
	}
	#Retngulo_117_g {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_117_g {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 629px;
	}
	#Retngulo_170_ha {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_170_ha {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1591px;
	}
	#Retngulo_121_hb {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_121_hb {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_175_hc {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_175_hc {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1665px;
	}
	#Retngulo_125_hd {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_125_hd {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_179_he {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_179_he {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_129_hf {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_129_hf {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 851px;
	}
	#Retngulo_180_hg {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_180_hg {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_133_hh {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_133_hh {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 925px;
	}
	#Retngulo_186_hi {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_186_hi {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1887px;
	}
	#Retngulo_72_hj {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_72_hj {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Retngulo_138_hk {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_138_hk {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 962px;
	}
	#Retngulo_92_hl {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_92_hl {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 74px;
	}
	#Retngulo_142_hm {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_142_hm {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1036px;
	}
	#Retngulo_96_hn {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_96_hn {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 148px;
	}
	#Retngulo_147_ho {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_147_ho {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1110px;
	}
	#Retngulo_100_hp {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_100_hp {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 222px;
	}
	#Retngulo_159_hq {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_159_hq {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1184px;
	}
	#Retngulo_104_hr {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_104_hr {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 296px;
	}
	#Retngulo_160_hs {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_160_hs {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1258px;
	}
	#Retngulo_108_ht {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_108_ht {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 370px;
	}
	#Retngulo_161_hu {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_161_hu {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1332px;
	}
	#Retngulo_112_hv {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_112_hv {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 444px;
	}
	#Retngulo_162_hw {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_162_hw {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1406px;
	}
	#Retngulo_116_hx {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_116_hx {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 518px;
	}
	#Retngulo_163_hy {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_163_hy {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1480px;
	}
	#Retngulo_120_hz {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_120_hz {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 592px;
	}
	#Retngulo_171_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_171_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1554px;
	}
	#Retngulo_124_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_124_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_174_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_174_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1628px;
	}
	#Retngulo_128_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_128_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_181_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_181_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_132_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_132_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 814px;
	}
	#Retngulo_182_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_182_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_136_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_136_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 888px;
	}
	#Retngulo_187_h {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_187_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1850px;
	}
	#Retngulo_73_h {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_73_h {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 37px;
	}
	#Retngulo_143_ia {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_143_ia {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 999px;
	}
	#Retngulo_90_ib {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_90_ib {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 111px;
	}
	#Retngulo_144_ic {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_144_ic {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1073px;
	}
	#Retngulo_94_id {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_94_id {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 185px;
	}
	#Retngulo_148_ie {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_148_ie {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1147px;
	}
	#Retngulo_98_if {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_98_if {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 259px;
	}
	#Retngulo_164_ig {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_164_ig {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1221px;
	}
	#Retngulo_102_ih {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_102_ih {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 333px;
	}
	#Retngulo_165_ii {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_165_ii {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1295px;
	}
	#Retngulo_106_ij {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_106_ij {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 407px;
	}
	#Retngulo_166_ik {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_166_ik {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1369px;
	}
	#Retngulo_110_il {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_110_il {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 481px;
	}
	#Retngulo_167_im {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_167_im {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1443px;
	}
	#Retngulo_114_in {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_114_in {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 555px;
	}
	#Retngulo_168_io {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_168_io {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1517px;
	}
	#Retngulo_118_ip {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_118_ip {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 629px;
	}
	#Retngulo_172_iq {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_172_iq {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1591px;
	}
	#Retngulo_122_ir {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_122_ir {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_176_is {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_176_is {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1665px;
	}
	#Retngulo_126_it {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_126_it {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_183_iu {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_183_iu {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_130_iv {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_130_iv {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 851px;
	}
	#Retngulo_184_iw {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_184_iw {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_134_ix {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_134_ix {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 925px;
	}
	#Retngulo_188_iy {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_188_iy {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1887px;
	}
	#Fabricante_iz {
		left: 12px;
		top: 8px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_i {
		left: 12px;
		top: 45px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ja {
		left: 12px;
		top: 119px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jb {
		left: 12px;
		top: 193px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jc {
		left: 12px;
		top: 267px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jd {
		left: 12px;
		top: 341px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_je {
		left: 12px;
		top: 415px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jf {
		left: 12px;
		top: 489px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jg {
		left: 12px;
		top: 563px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jh {
		left: 12px;
		top: 637px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ji {
		left: 12px;
		top: 711px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jj {
		left: 12px;
		top: 785px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jk {
		left: 12px;
		top: 859px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jl {
		left: 12px;
		top: 933px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jm {
		left: 12px;
		top: 1007px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jn {
		left: 12px;
		top: 1081px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jo {
		left: 12px;
		top: 1155px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jp {
		left: 12px;
		top: 1229px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jq {
		left: 12px;
		top: 1303px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jr {
		left: 12px;
		top: 1377px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_js {
		left: 12px;
		top: 1451px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jt {
		left: 12px;
		top: 1525px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_ju {
		left: 12px;
		top: 1599px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jv {
		left: 12px;
		top: 1673px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jw {
		left: 12px;
		top: 1747px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jx {
		left: 12px;
		top: 1821px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#x_jy {
		left: 12px;
		top: 1895px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Voltagem_nominal_do_sistema_mi_jq {
		left: 12px;
		top: 82px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Voltagem_nominal_do_sistema_ma_jr {
		left: 12px;
		top: 156px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Corrente_nominal_de_carga_js {
		left: 2px;
		top: 230px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Corrente_nominal_de_descarga_jt {
		left: 12px;
		top: 304px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_entrada_de_bateria_ju {
		left: 12px;
		top: 378px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Max_tenso_de_circuito_aberto_d_jv {
		left: 12px;
		top: 452px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Max_potencia_de_entrada_painel_jw {
		left: 12px;
		top: 526px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_equali_jx {
		left: 2px;
		top: 600px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_equali_jy {
		left: 12px;
		top: 674px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-__Boost_jz {
		left: 12px;
		top: 748px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-__Boost_j {
		left: 12px;
		top: 822px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_Boost__j {
		left: 12px;
		top: 896px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_carregamento_-_Flutua_j {
		left: 12px;
		top: 970px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_reconexo_por_baixa_vo_j {
		left: 12px;
		top: 1044px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Tenso_de_desconexo_por_baixa_t_j {
		left: 2px;
		top: 1118px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Eficincia_de_converso_de_pico_j {
		left: 12px;
		top: 1192px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#MPPT_preciso_j {
		left: 12px;
		top: 1266px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Temperatura_de_trabalho_j {
		left: 12px;
		top: 1340px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Grau_de_proteo_j {
		left: 12px;
		top: 1414px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Terminais_de_potencia_j {
		left: 12px;
		top: 1488px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Peso_ka {
		left: 12px;
		top: 1562px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Garantia_kb {
		left: 12px;
		top: 1636px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Interface_de_comunicao_kc {
		left: 12px;
		top: 1710px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Modelo_de_bateria_kd {
		left: 12px;
		top: 1784px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#Link_ke {
		left: 12px;
		top: 1858px;
		position: absolute;
		overflow: visible;
		width: 502px;
		height: 21px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 20px;
		color: rgba(255,255,255,1);
	}
	#MELHOR2 {
		left: 1171px;
		top: 206px;
		position: absolute;
		overflow: visible;
		width: 586px;
		height: 72px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 67px;
		color: rgba(0,0,0,1);
	}
	#MELHOR1 {
		left: 199px;
		top: 206px;
		position: absolute;
		overflow: visible;
		width: 586px;
		height: 72px;
		text-align: center;
		font-family: Mongolian Baiti;
		font-style: normal;
		font-weight: normal;
		font-size: 67px;
		color: rgba(0,0,0,1);
	}
</style>
<script id="applicationScript">
///////////////////////////////////////
// INITIALIZATION
///////////////////////////////////////

/**
 * Functionality for scaling, showing by media query, and navigation between multiple pages on a single page. 
 * Code subject to change.
 **/

if (window.console==null) { window["console"] = { log : function() {} } }; // some browsers do not set console

var Application = function() {
	// event constants
	this.prefix = "--web-";
	this.NAVIGATION_CHANGE = "viewChange";
	this.VIEW_NOT_FOUND = "viewNotFound";
	this.VIEW_CHANGE = "viewChange";
	this.VIEW_CHANGING = "viewChanging";
	this.STATE_NOT_FOUND = "stateNotFound";
	this.APPLICATION_COMPLETE = "applicationComplete";
	this.APPLICATION_RESIZE = "applicationResize";
	this.SIZE_STATE_NAME = "data-is-view-scaled";
	this.STATE_NAME = this.prefix + "state";

	this.lastTrigger = null;
	this.lastView = null;
	this.lastState = null;
	this.lastOverlay = null;
	this.currentView = null;
	this.currentState = null;
	this.currentOverlay = null;
	this.currentQuery = {index: 0, rule: null, mediaText: null, id: null};
	this.inclusionQuery = "(min-width: 0px)";
	this.exclusionQuery = "none and (min-width: 99999px)";
	this.LastModifiedDateLabelName = "LastModifiedDateLabel";
	this.viewScaleSliderId = "ViewScaleSliderInput";
	this.pageRefreshedName = "showPageRefreshedNotification";
	this.application = null;
	this.applicationStylesheet = null;
	this.showByMediaQuery = null;
	this.mediaQueryDictionary = {};
	this.viewsDictionary = {};
	this.addedViews = [];
	this.viewStates = [];
	this.views = [];
	this.viewIds = [];
	this.viewQueries = {};
	this.overlays = {};
	this.overlayIds = [];
	this.numberOfViews = 0;
	this.verticalPadding = 0;
	this.horizontalPadding = 0;
	this.stateName = null;
	this.viewScale = 1;
	this.viewLeft = 0;
	this.viewTop = 0;
	this.horizontalScrollbarsNeeded = false;
	this.verticalScrollbarsNeeded = false;

	// view settings
	this.showUpdateNotification = false;
	this.showNavigationControls = false;
	this.scaleViewsToFit = false;
	this.scaleToFitOnDoubleClick = false;
	this.actualSizeOnDoubleClick = false;
	this.scaleViewsOnResize = false;
	this.navigationOnKeypress = false;
	this.showViewName = false;
	this.enableDeepLinking = true;
	this.refreshPageForChanges = false;
	this.showRefreshNotifications = true;

	// view controls
	this.scaleViewSlider = null;
	this.lastModifiedLabel = null;
	this.supportsPopState = false; // window.history.pushState!=null;
	this.initialized = false;

	// refresh properties
	this.refreshDuration = 250;
	this.lastModifiedDate = null;
	this.refreshRequest = null;
	this.refreshInterval = null;
	this.refreshContent = null;
	this.refreshContentSize = null;
	this.refreshCheckContent = false;
	this.refreshCheckContentSize = false;

	var self = this;

	self.initialize = function(event) {
		var view = self.getVisibleView();
		var views = self.getVisibleViews();
		if (view==null) view = self.getInitialView();
		self.collectViews();
		self.collectOverlays();
		self.collectMediaQueries();

		for (let index = 0; index < views.length; index++) {
			var view = views[index];
			self.setViewOptions(view);
			self.setViewVariables(view);
			self.centerView(view);
		}

		// sometimes the body size is 0 so we call this now and again later
		if (self.initialized) {
			window.addEventListener(self.NAVIGATION_CHANGE, self.viewChangeHandler);
			window.addEventListener("keyup", self.keypressHandler);
			window.addEventListener("keypress", self.keypressHandler);
			window.addEventListener("resize", self.resizeHandler);
			window.document.addEventListener("dblclick", self.doubleClickHandler);

			if (self.supportsPopState) {
				window.addEventListener('popstate', self.popStateHandler);
			}
			else {
				window.addEventListener('hashchange', self.hashChangeHandler);
			}

			// we are ready to go
			window.dispatchEvent(new Event(self.APPLICATION_COMPLETE));
		}

		if (self.initialized==false) {
			if (self.enableDeepLinking) {
				self.syncronizeViewToURL();
			} 
	
			if (self.refreshPageForChanges) {
				self.setupRefreshForChanges();
			}
	
			self.initialized = true;
		}
		
		if (self.scaleViewsToFit) {
			self.viewScale = self.scaleViewToFit(view);
			
			if (self.viewScale<0) {
				setTimeout(self.scaleViewToFit, 500, view);
			}
		}
		else if (view) {
			self.viewScale = self.getViewScaleValue(view);
			self.centerView(view);
			self.updateSliderValue(self.viewScale);
		}
		else {
			// no view found
		}
	
		if (self.showUpdateNotification) {
			self.showNotification();
		}

		//"addEventListener" in window ? null : window.addEventListener = window.attachEvent;
		//"addEventListener" in document ? null : document.addEventListener = document.attachEvent;
	}


	///////////////////////////////////////
	// AUTO REFRESH 
	///////////////////////////////////////

	self.setupRefreshForChanges = function() {
		self.refreshRequest = new XMLHttpRequest();

		if (!self.refreshRequest) {
			return false;
		}

		// get document start values immediately
		self.requestRefreshUpdate();
	}

	/**
	 * Attempt to check the last modified date by the headers 
	 * or the last modified property from the byte array (experimental)
	 **/
	self.requestRefreshUpdate = function() {
		var url = document.location.href;
		var protocol = window.location.protocol;
		var method;
		
		try {

			if (self.refreshCheckContentSize) {
				self.refreshRequest.open('HEAD', url, true);
			}
			else if (self.refreshCheckContent) {
				self.refreshContent = document.documentElement.outerHTML;
				self.refreshRequest.open('GET', url, true);
				self.refreshRequest.responseType = "text";
			}
			else {

				// get page last modified date for the first call to compare to later
				if (self.lastModifiedDate==null) {

					// File system does not send headers in FF so get blob if possible
					if (protocol=="file:") {
						self.refreshRequest.open("GET", url, true);
						self.refreshRequest.responseType = "blob";
					}
					else {
						self.refreshRequest.open("HEAD", url, true);
						self.refreshRequest.responseType = "blob";
					}

					self.refreshRequest.onload = self.refreshOnLoadOnceHandler;

					// In some browsers (Chrome & Safari) this error occurs at send: 
					// 
					// Chrome - Access to XMLHttpRequest at 'file:///index.html' from origin 'null' 
					// has been blocked by CORS policy: 
					// Cross origin requests are only supported for protocol schemes: 
					// http, data, chrome, chrome-extension, https.
					// 
					// Safari - XMLHttpRequest cannot load file:///Users/user/Public/index.html. Cross origin requests are only supported for HTTP.
					// 
					// Solution is to run a local server, set local permissions or test in another browser
					self.refreshRequest.send(null);

					// In MS browsers the following behavior occurs possibly due to an AJAX call to check last modified date: 
					// 
					// DOM7011: The code on this page disabled back and forward caching.

					// In Brave (Chrome) error when on the server
					// index.js:221 HEAD https://www.example.com/ net::ERR_INSUFFICIENT_RESOURCES
					// self.refreshRequest.send(null);

				}
				else {
					self.refreshRequest = new XMLHttpRequest();
					self.refreshRequest.onreadystatechange = self.refreshHandler;
					self.refreshRequest.ontimeout = function() {
						self.log("Couldn't find page to check for updates");
					}
					
					var method;
					if (protocol=="file:") {
						method = "GET";
					}
					else {
						method = "HEAD";
					}

					//refreshRequest.open('HEAD', url, true);
					self.refreshRequest.open(method, url, true);
					self.refreshRequest.responseType = "blob";
					self.refreshRequest.send(null);
				}
			}
		}
		catch (error) {
			self.log("Refresh failed for the following reason:")
			self.log(error);
		}
	}

	self.refreshHandler = function() {
		var contentSize;

		try {

			if (self.refreshRequest.readyState === XMLHttpRequest.DONE) {
				
				if (self.refreshRequest.status === 2 || 
					self.refreshRequest.status === 200) {
					var pageChanged = false;

					self.updateLastModifiedLabel();

					if (self.refreshCheckContentSize) {
						var lastModifiedHeader = self.refreshRequest.getResponseHeader("Last-Modified");
						contentSize = self.refreshRequest.getResponseHeader("Content-Length");
						//lastModifiedDate = refreshRequest.getResponseHeader("Last-Modified");
						var headers = self.refreshRequest.getAllResponseHeaders();
						var hasContentHeader = headers.indexOf("Content-Length")!=-1;
						
						if (hasContentHeader) {
							contentSize = self.refreshRequest.getResponseHeader("Content-Length");

							// size has not been set yet
							if (self.refreshContentSize==null) {
								self.refreshContentSize = contentSize;
								// exit and let interval call this method again
								return;
							}

							if (contentSize!=self.refreshContentSize) {
								pageChanged = true;
							}
						}
					}
					else if (self.refreshCheckContent) {

						if (self.refreshRequest.responseText!=self.refreshContent) {
							pageChanged = true;
						}
					}
					else {
						lastModifiedHeader = self.getLastModified(self.refreshRequest);

						if (self.lastModifiedDate!=lastModifiedHeader) {
							self.log("lastModifiedDate:" + self.lastModifiedDate + ",lastModifiedHeader:" +lastModifiedHeader);
							pageChanged = true;
						}

					}

					
					if (pageChanged) {
						clearInterval(self.refreshInterval);
						self.refreshUpdatedPage();
						return;
					}

				}
				else {
					self.log('There was a problem with the request.');
				}

			}
		}
		catch( error ) {
			//console.log('Caught Exception: ' + error);
		}
	}

	self.refreshOnLoadOnceHandler = function(event) {

		// get the last modified date
		if (self.refreshRequest.response) {
			self.lastModifiedDate = self.getLastModified(self.refreshRequest);

			if (self.lastModifiedDate!=null) {

				if (self.refreshInterval==null) {
					self.refreshInterval = setInterval(self.requestRefreshUpdate, self.refreshDuration);
				}
			}
			else {
				self.log("Could not get last modified date from the server");
			}
		}
	}

	self.refreshUpdatedPage = function() {
		if (self.showRefreshNotifications) {
			var date = new Date().setTime((new Date().getTime()+10000));
			document.cookie = encodeURIComponent(self.pageRefreshedName) + "=true" + "; max-age=6000;" + " path=/";
		}

		document.location.reload(true);
	}

	self.showNotification = function(duration) {
		var notificationID = self.pageRefreshedName+"ID";
		var notification = document.getElementById(notificationID);
		if (duration==null) duration = 4000;

		if (notification!=null) {return;}

		notification = document.createElement("div");
		notification.id = notificationID;
		notification.textContent = "PAGE UPDATED";
		var styleRule = ""
		styleRule = "position: fixed; padding: 7px 16px 6px 16px; font-family: Arial, sans-serif; font-size: 10px; font-weight: bold; left: 50%;";
		styleRule += "top: 20px; background-color: rgba(0,0,0,.5); border-radius: 12px; color:rgb(235, 235, 235); transition: all 2s linear;";
		styleRule += "transform: translateX(-50%); letter-spacing: .5px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, .1)); cursor: pointer";
		notification.setAttribute("style", styleRule);

		notification.className = "PageRefreshedClass";
		notification.addEventListener("click", function() {
			notification.parentNode.removeChild(notification);
		});
		
		document.body.appendChild(notification);

		setTimeout(function() {
			notification.style.opacity = "0";
			notification.style.filter = "drop-shadow( 0px 0px 0px rgba(0,0,0, .5))";
			setTimeout(function() {
				try {
					notification.parentNode.removeChild(notification);
				} catch(error) {}
			}, duration)
		}, duration);

		document.cookie = encodeURIComponent(self.pageRefreshedName) + "=; max-age=1; path=/";
	}

	/**
	 * Get the last modified date from the header 
	 * or file object after request has been received
	 **/
	self.getLastModified = function(request) {
		var date;

		// file protocol - FILE object with last modified property
		if (request.response && request.response.lastModified) {
			date = request.response.lastModified;
		}
		
		// http protocol - check headers
		if (date==null) {
			date = request.getResponseHeader("Last-Modified");
		}

		return date;
	}

	self.updateLastModifiedLabel = function() {
		var labelValue = "";
		
		if (self.lastModifiedLabel==null) {
			self.lastModifiedLabel = document.getElementById("LastModifiedLabel");
		}

		if (self.lastModifiedLabel) {
			var seconds = parseInt(((new Date().getTime() - Date.parse(document.lastModified)) / 1000 / 60) * 100 + "");
			var minutes = 0;
			var hours = 0;

			if (seconds < 60) {
				seconds = Math.floor(seconds/10)*10;
				labelValue = seconds + " seconds";
			}
			else {
				minutes = parseInt((seconds/60) + "");

				if (minutes>60) {
					hours = parseInt((seconds/60/60) +"");
					labelValue += hours==1 ? " hour" : " hours";
				}
				else {
					labelValue = minutes+"";
					labelValue += minutes==1 ? " minute" : " minutes";
				}
			}
			
			if (seconds<10) {
				labelValue = "Updated now";
			}
			else {
				labelValue = "Updated " + labelValue + " ago";
			}

			if (self.lastModifiedLabel.firstElementChild) {
				self.lastModifiedLabel.firstElementChild.textContent = labelValue;

			}
			else if ("textContent" in self.lastModifiedLabel) {
				self.lastModifiedLabel.textContent = labelValue;
			}
		}
	}

	self.getShortString = function(string, length) {
		if (length==null) length = 30;
		string = string!=null ? string.substr(0, length).replace(/\n/g, "") : "[String is null]";
		return string;
	}

	self.getShortNumber = function(value, places) {
		if (places==null || places<1) places = 4;
		value = Math.round(value * Math.pow(10,places)) / Math.pow(10, places);
		return value;
	}

	///////////////////////////////////////
	// NAVIGATION CONTROLS
	///////////////////////////////////////

	self.updateViewLabel = function() {
		var viewNavigationLabel = document.getElementById("ViewNavigationLabel");
		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;
		var viewName = view ? self.getViewPreferenceValue(view, self.prefix + "view-name") : null;
		var viewId = view ? view.id : null;

		if (viewNavigationLabel && view) {
			if (viewName && viewName.indexOf('"')!=-1) {
				viewName = viewName.replace(/"/g, "");
			}

			if (self.showViewName) {
				viewNavigationLabel.textContent = viewName;
				self.setTooltip(viewNavigationLabel, viewIndex + 1 + " of " + self.numberOfViews);
			}
			else {
				viewNavigationLabel.textContent = viewIndex + 1 + " of " + self.numberOfViews;
				self.setTooltip(viewNavigationLabel, viewName);
			}

		}
	}

	self.updateURL = function(view) {
		view = view == null ? self.getVisibleView() : view;
		var viewId = view ? view.id : null
		var viewFragment = view ? "#"+ viewId : null;

		if (viewId && self.viewIds.length>1 && self.enableDeepLinking) {

			if (self.supportsPopState==false) {
				self.setFragment(viewId);
			}
			else {
				if (viewFragment!=window.location.hash) {

					if (window.location.hash==null) {
						window.history.replaceState({name:viewId}, null, viewFragment);
					}
					else {
						window.history.pushState({name:viewId}, null, viewFragment);
					}
				}
			}
		}
	}

	self.updateURLState = function(view, stateName) {
		stateName = view && (stateName=="" || stateName==null) ? self.getStateNameByViewId(view.id) : stateName;

		if (self.supportsPopState==false) {
			self.setFragment(stateName);
		}
		else {
			if (stateName!=window.location.hash) {

				if (window.location.hash==null) {
					window.history.replaceState({name:view.viewId}, null, stateName);
				}
				else {
					window.history.pushState({name:view.viewId}, null, stateName);
				}
			}
		}
	}

	self.setFragment = function(value) {
		window.location.hash = "#" + value;
	}

	self.setTooltip = function(element, value) {
		// setting the tooltip in edge causes a page crash on hover
		if (/Edge/.test(navigator.userAgent)) { return; }

		if ("title" in element) {
			element.title = value;
		}
	}

	self.getStylesheetRules = function(styleSheet) {
		try {
			if (styleSheet) return styleSheet.cssRules || styleSheet.rules;
	
			return document.styleSheets[0]["cssRules"] || document.styleSheets[0]["rules"];
		}
		catch (error) {
			// ERRORS:
			// SecurityError: The operation is insecure.
			// Errors happen when script loads before stylesheet or loading an external css locally

			// InvalidAccessError: A parameter or an operation is not supported by the underlying object
			// Place script after stylesheet

			console.log(error);
			if (error.toString().indexOf("The operation is insecure")!=-1) {
				console.log("Load the stylesheet before the script or load the stylesheet inline until it can be loaded on a server")
			}
			return [];
		}
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {Number} selectedIndex if provided shows the view at index provided
	 **/
	self.hideViews = function(selectedIndex, animation) {
		var rules = self.getStylesheetRules();
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			var cssText = rule && rule.cssText;

			if (rule.media!=null && cssText.match("--web-view-name:")) {

				if (queryIndex==selectedIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = selectedIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
				}
				else {
					if (animation) {
						self.fadeOut(rule)
					}
					else {
						self.disableMediaQuery(rule);
					}
				}
				
				queryIndex++;
			}
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();

		self.dispatchViewChange();

		var view = self.getVisibleView();
		var viewIndex = view ? self.getViewIndex(view) : -1;

		return viewIndex==selectedIndex ? view : null;
	}

	/**
	 * If single page application hide all of the views. 
	 * @param {HTMLElement} selectedView if provided shows the view passed in
	 **/
	 self.hideAllViews = function(selectedView, animation) {
		var views = self.views;
		var queryIndex = 0;
		var numberOfViews = views!=null ? views.length : 0;

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfViews;i++) {
			var viewData = views[i];
			var view = viewData && viewData.view;
			var mediaRule = viewData && viewData.mediaRule;
			
			if (view==selectedView) {
				self.currentQuery.mediaText = mediaRule.conditionText;
				self.currentQuery.index = queryIndex;
				self.currentQuery.rule = mediaRule;
				self.enableMediaQuery(mediaRule);
			}
			else {
				if (animation) {
					self.fadeOut(mediaRule)
				}
				else {
					self.disableMediaQuery(mediaRule);
				}
			}
			
			queryIndex++;
		}

		self.numberOfViews = queryIndex;
		self.updateViewLabel();
		self.updateURL();
		self.dispatchViewChange();

		var visibleView = self.getVisibleView();

		return visibleView==selectedView ? selectedView : null;
	}

	/**
	 * Hide view
	 * @param {Object} view element to hide
	 **/
	self.hideView = function(view) {
		var rule = view ? self.mediaQueryDictionary[view.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);
		}
	}

	/**
	 * Hide overlay
	 * @param {Object} overlay element to hide
	 **/
	self.hideOverlay = function(overlay) {
		var rule = overlay ? self.mediaQueryDictionary[overlay.id] : null;

		if (rule) {
			self.disableMediaQuery(rule);

			//if (self.showByMediaQuery) {
				overlay.style.display = "none";
			//}
		}
	}

	/**
	 * Show the view by media query. Does not hide current views
	 * Sets view options by default
	 * @param {Object} view element to show
	 * @param {Boolean} setViewOptions sets view options if null or true
	 */
	self.showViewByMediaQuery = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var isOverlay = view ? self.isOverlay(view) : false;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);

			if (isOverlay && view && setViewOptions) {
				self.setViewVariables(null, view);
			}
			else {
				if (view && setViewOptions) self.setViewOptions(view);
				if (view && setViewOptions) self.setViewVariables(view);
			}
		}
	}

	/**
	 * Show the view. Does not hide current views
	 */
	self.showView = function(view, setViewOptions) {
		var id = view ? view.id : null;
		var query = id ? self.mediaQueryDictionary[id] : null;
		var display = null;
		setViewOptions = setViewOptions==null ? true : setViewOptions;

		if (query) {
			self.enableMediaQuery(query);
			if (view==null) view =self.getVisibleView();
			if (view && setViewOptions) self.setViewOptions(view);
		}
		else if (id) {
			display = window.getComputedStyle(view).getPropertyValue("display");
			if (display=="" || display=="none") {
				view.style.display = "block";
			}
		}

		if (view) {
			if (self.currentView!=null) {
				self.lastView = self.currentView;
			}

			self.currentView = view;
		}
	}

	self.showViewById = function(id, setViewOptions) {
		var view = id ? self.getViewById(id) : null;

		if (view) {
			self.showView(view);
			return;
		}

		self.log("View not found '" + id + "'");
	}

	self.getElementView = function(element) {
		var view = element;
		var viewFound = false;

		while (viewFound==false || view==null) {
			if (view && self.viewsDictionary[view.id]) {
				return view;
			}
			view = view.parentNode;
		}
	}

	/**
	 * Show overlay over view
	 * @param {Event | HTMLElement} event event or html element with styles applied
	 * @param {String} id id of view or view reference
	 * @param {Number} x x location
	 * @param {Number} y y location
	 */
	self.showOverlay = function(event, id, x, y) {
		var overlay = id && typeof id === 'string' ? self.getViewById(id) : id ? id : null;
		var query = overlay ? self.mediaQueryDictionary[overlay.id] : null;
		var centerHorizontally = false;
		var centerVertically = false;
		var anchorLeft = false;
		var anchorTop = false;
		var anchorRight = false;
		var anchorBottom = false;
		var display = null;
		var reparent = true;
		var view = null;
		
		if (overlay==null || overlay==false) {
			self.log("Overlay not found, '"+ id + "'");
			return;
		}

		// get enter animation - event target must have css variables declared
		if (event) {
			var button = event.currentTarget || event; // can be event or htmlelement
			var buttonComputedStyles = getComputedStyle(button);
			var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
			var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
			var isAnimated = animation!="";
			var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
			var actionTarget = self.application ? null : self.getElement(actionTargetValue);
			var actionTargetStyles = actionTarget ? actionTarget.style : null;

			if (actionTargetStyles) {
				actionTargetStyles.setProperty("animation", animation);
			}

			if ("stopImmediatePropagation" in event) {
				event.stopImmediatePropagation();
			}
		}
		
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// remove any current overlays
		if (self.currentOverlay) {

			// act as switch if same button
			if (self.currentOverlay==actionTarget || self.currentOverlay==null) {
				if (self.lastTrigger==button) {
					self.removeOverlay(isAnimated);
					return;
				}
			}
			else {
				self.removeOverlay(isAnimated);
			}
		}

		if (reparent) {
			view = self.getElementView(button);
			if (view) {
				view.appendChild(overlay);
			}
		}

		if (query) {
			//self.setElementAnimation(overlay, null);
			//overlay.style.animation = animation;
			self.enableMediaQuery(query);
			
			var display = overlay && overlay.style.display;
			
			if (overlay && display=="" || display=="none") {
				overlay.style.display = "block";
				//self.setViewOptions(overlay);
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}
		else if (id) {

			display = window.getComputedStyle(overlay).getPropertyValue("display");

			if (display=="" || display=="none") {
				overlay.style.display = "block";
			}

			// add animation defined in event target style declaration
			if (animation && self.supportAnimations) {
				self.fadeIn(overlay, false, animation);
			}
		}

		// do not set x or y position if centering
		var horizontal = self.prefix + "center-horizontally";
		var vertical = self.prefix + "center-vertically";
		var style = overlay.style;
		var transform = [];

		centerHorizontally = self.getIsStyleDefined(id, horizontal) ? self.getViewPreferenceBoolean(overlay, horizontal) : false;
		centerVertically = self.getIsStyleDefined(id, vertical) ? self.getViewPreferenceBoolean(overlay, vertical) : false;
		anchorLeft = self.getIsStyleDefined(id, "left");
		anchorRight = self.getIsStyleDefined(id, "right");
		anchorTop = self.getIsStyleDefined(id, "top");
		anchorBottom = self.getIsStyleDefined(id, "bottom");

		
		if (self.viewsDictionary[overlay.id] && self.viewsDictionary[overlay.id].styleDeclaration) {
			style = self.viewsDictionary[overlay.id].styleDeclaration.style;
		}
		
		if (centerHorizontally) {
			style.left = "50%";
			style.transformOrigin = "0 0";
			transform.push("translateX(-50%)");
		}
		else if (anchorRight && anchorLeft) {
			style.left = x + "px";
		}
		else if (anchorRight) {
			//style.right = x + "px";
		}
		else {
			style.left = x + "px";
		}
		
		if (centerVertically) {
			style.top = "50%";
			transform.push("translateY(-50%)");
			style.transformOrigin = "0 0";
		}
		else if (anchorTop && anchorBottom) {
			style.top = y + "px";
		}
		else if (anchorBottom) {
			//style.bottom = y + "px";
		}
		else {
			style.top = y + "px";
		}

		if (transform.length) {
			style.transform = transform.join(" ");
		}

		self.currentOverlay = overlay;
		self.lastTrigger = button;
	}

	self.goBack = function() {
		if (self.currentOverlay) {
			self.removeOverlay();
		}
		else if (self.lastView) {
			self.goToView(self.lastView.id);
		}
	}

	self.removeOverlay = function(animate) {
		var overlay = self.currentOverlay;
		animate = animate===false ? false : true;

		if (overlay) {
			var style = overlay.style;
			
			if (style.animation && self.supportAnimations && animate) {
				self.reverseAnimation(overlay, true);

				var duration = self.getAnimationDuration(style.animation, true);
		
				setTimeout(function() {
					self.setElementAnimation(overlay, null);
					self.hideOverlay(overlay);
					self.currentOverlay = null;
				}, duration);
			}
			else {
				self.setElementAnimation(overlay, null);
				self.hideOverlay(overlay);
				self.currentOverlay = null;
			}
		}
	}

	/**
	 * Reverse the animation and hide after
	 * @param {Object} target element with animation
	 * @param {Boolean} hide hide after animation ends
	 */
	self.reverseAnimation = function(target, hide) {
		var lastAnimation = null;
		var style = target.style;

		style.animationPlayState = "paused";
		lastAnimation = style.animation;
		style.animation = null;
		style.animationPlayState = "paused";

		if (hide) {
			//target.addEventListener("animationend", self.animationEndHideHandler);
	
			var duration = self.getAnimationDuration(lastAnimation, true);
			var isOverlay = self.isOverlay(target);
	
			setTimeout(function() {
				self.setElementAnimation(target, null);

				if (isOverlay) {
					self.hideOverlay(target);
				}
				else {
					self.hideView(target);
				}
			}, duration);
		}

		setTimeout(function() {
			style.animation = lastAnimation;
			style.animationPlayState = "paused";
			style.animationDirection = "reverse";
			style.animationPlayState = "running";
		}, 30);
	}

	self.animationEndHandler = function(event) {
		var target = event.currentTarget;
		self.dispatchEvent(new Event(event.type));
	}

	self.isOverlay = function(view) {
		var result = view ? self.getViewPreferenceBoolean(view, self.prefix + "is-overlay") : false;

		return result;
	}

	self.animationEndHideHandler = function(event) {
		var target = event.currentTarget;
		self.setViewVariables(null, target);
		self.hideView(target);
		target.removeEventListener("animationend", self.animationEndHideHandler);
	}

	self.animationEndShowHandler = function(event) {
		var target = event.currentTarget;
		target.removeEventListener("animationend", self.animationEndShowHandler);
	}

	self.setViewOptions = function(view) {

		if (view) {
			self.minimumScale = self.getViewPreferenceValue(view, self.prefix + "minimum-scale");
			self.maximumScale = self.getViewPreferenceValue(view, self.prefix + "maximum-scale");
			self.scaleViewsToFit = self.getViewPreferenceBoolean(view, self.prefix + "scale-to-fit");
			self.scaleToFitType = self.getViewPreferenceValue(view, self.prefix + "scale-to-fit-type");
			self.scaleToFitOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-double-click");
			self.actualSizeOnDoubleClick = self.getViewPreferenceBoolean(view, self.prefix + "actual-size-on-double-click");
			self.scaleViewsOnResize = self.getViewPreferenceBoolean(view, self.prefix + "scale-on-resize");
			self.enableScaleUp = self.getViewPreferenceBoolean(view, self.prefix + "enable-scale-up");
			self.centerHorizontally = self.getViewPreferenceBoolean(view, self.prefix + "center-horizontally");
			self.centerVertically = self.getViewPreferenceBoolean(view, self.prefix + "center-vertically");
			self.navigationOnKeypress = self.getViewPreferenceBoolean(view, self.prefix + "navigate-on-keypress");
			self.showViewName = self.getViewPreferenceBoolean(view, self.prefix + "show-view-name");
			self.refreshPageForChanges = self.getViewPreferenceBoolean(view, self.prefix + "refresh-for-changes");
			self.refreshPageForChangesInterval = self.getViewPreferenceValue(view, self.prefix + "refresh-interval");
			self.showNavigationControls = self.getViewPreferenceBoolean(view, self.prefix + "show-navigation-controls");
			self.scaleViewSlider = self.getViewPreferenceBoolean(view, self.prefix + "show-scale-controls");
			self.enableDeepLinking = self.getViewPreferenceBoolean(view, self.prefix + "enable-deep-linking");
			self.singlePageApplication = self.getViewPreferenceBoolean(view, self.prefix + "application");
			self.showByMediaQuery = self.getViewPreferenceBoolean(view, self.prefix + "show-by-media-query");
			self.showUpdateNotification = document.cookie!="" ? document.cookie.indexOf(self.pageRefreshedName)!=-1 : false;
			self.imageComparisonDuration = self.getViewPreferenceValue(view, self.prefix + "image-comparison-duration");
			self.supportAnimations = self.getViewPreferenceBoolean(view, self.prefix + "enable-animations", true);

			if (self.scaleViewsToFit) {
				var newScaleValue = self.scaleViewToFit(view);
				
				if (newScaleValue<0) {
					setTimeout(self.scaleViewToFit, 500, view);
				}
			}
			else {
				self.viewScale = self.getViewScaleValue(view);
				self.viewToFitWidthScale = self.getViewFitToViewportWidthScale(view, self.enableScaleUp)
				self.viewToFitHeightScale = self.getViewFitToViewportScale(view, self.enableScaleUp);
				self.updateSliderValue(self.viewScale);
			}

			if (self.imageComparisonDuration!=null) {
				// todo
			}

			if (self.refreshPageForChangesInterval!=null) {
				self.refreshDuration = Number(self.refreshPageForChangesInterval);
			}
		}
	}

	self.previousView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView()
		var index = view ? self.getViewIndex(view) : -1;
		var prevQueryIndex = index!=-1 ? index-1 : self.currentQuery.index-1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;

		if (event) {
			event.stopImmediatePropagation();
		}

		if (prevQueryIndex<0) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==prevQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = prevQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	self.nextView = function(event) {
		var rules = self.getStylesheetRules();
		var view = self.getVisibleView();
		var index = view ? self.getViewIndex(view) : -1;
		var nextQueryIndex = index!=-1 ? index+1 : self.currentQuery.index+1;
		var queryIndex = 0;
		var numberOfRules = rules!=null ? rules.length : 0;
		var numberOfMediaQueries = self.getNumberOfMediaRules();

		if (event) {
			event.stopImmediatePropagation();
		}

		if (nextQueryIndex>=numberOfMediaQueries) {
			return;
		}

		// loop through rules and hide media queries except selected
		for (var i=0;i<numberOfRules;i++) {
			var rule = rules[i];
			
			if (rule.media!=null) {

				if (queryIndex==nextQueryIndex) {
					self.currentQuery.mediaText = rule.conditionText;
					self.currentQuery.index = nextQueryIndex;
					self.currentQuery.rule = rule;
					self.enableMediaQuery(rule);
					self.updateViewLabel();
					self.updateURL();
					self.dispatchViewChange();
				}
				else {
					self.disableMediaQuery(rule);
				}

				queryIndex++;
			}
		}
	}

	/**
	 * Enables a view via media query
	 */
	self.enableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.inclusionQuery;
		}
		catch(error) {
			//self.log(error);
			rule.conditionText = self.inclusionQuery;
		}
	}

	self.disableMediaQuery = function(rule) {

		try {
			rule.media.mediaText = self.exclusionQuery;
		}
		catch(error) {
			rule.conditionText = self.exclusionQuery;
		}
	}

	self.dispatchViewChange = function() {
		try {
			var event = new Event(self.NAVIGATION_CHANGE);
			window.dispatchEvent(event);
		}
		catch (error) {
			// In IE 11: Object doesn't support this action
		}
	}

	self.getNumberOfMediaRules = function() {
		var rules = self.getStylesheetRules();
		var numberOfRules = rules ? rules.length : 0;
		var numberOfQueries = 0;

		for (var i=0;i<numberOfRules;i++) {
			if (rules[i].media!=null) { numberOfQueries++; }
		}
		
		return numberOfQueries;
	}

	/////////////////////////////////////////
	// VIEW SCALE 
	/////////////////////////////////////////

	self.sliderChangeHandler = function(event) {
		var value = self.getShortNumber(event.currentTarget.value/100);
		var view = self.getVisibleView();
		self.setViewScaleValue(view, false, value, true);
	}

	self.updateSliderValue = function(scale) {
		var slider = document.getElementById(self.viewScaleSliderId);
		var tooltip = parseInt(scale * 100 + "") + "%";
		var inputType;
		var inputValue;
		
		if (slider) {
			inputValue = self.getShortNumber(scale * 100);
			if (inputValue!=slider["value"]) {
				slider["value"] = inputValue;
			}
			inputType = slider.getAttributeNS(null, "type");

			if (inputType!="range") {
				// input range is not supported
				slider.style.display = "none";
			}

			self.setTooltip(slider, tooltip);
		}
	}

	self.viewChangeHandler = function(event) {
		var view = self.getVisibleView();
		var matrix = view ? getComputedStyle(view).transform : null;
		
		if (matrix) {
			self.viewScale = self.getViewScaleValue(view);
			
			var scaleNeededToFit = self.getViewFitToViewportScale(view);
			var isViewLargerThanViewport = scaleNeededToFit<1;
			
			// scale large view to fit if scale to fit is enabled
			if (self.scaleViewsToFit) {
				self.scaleViewToFit(view);
			}
			else {
				self.updateSliderValue(self.viewScale);
			}
		}
	}

	self.getViewScaleValue = function(view) {
		var matrix = getComputedStyle(view).transform;

		if (matrix) {
			var matrixArray = matrix.replace("matrix(", "").split(",");
			var scaleX = parseFloat(matrixArray[0]);
			var scaleY = parseFloat(matrixArray[3]);
			var scale = Math.min(scaleX, scaleY);
		}

		return scale;
	}

	/**
	 * Scales view to scale. 
	 * @param {Object} view view to scale. views are in views array
	 * @param {Boolean} scaleToFit set to true to scale to fit. set false to use desired scale value
	 * @param {Number} desiredScale scale to define. not used if scale to fit is false
	 * @param {Boolean} isSliderChange indicates if slider is callee
	 */
	self.setViewScaleValue = function(view, scaleToFit, desiredScale, isSliderChange) {
		var enableScaleUp = self.enableScaleUp;
		var scaleToFitType = self.scaleToFitType;
		var minimumScale = self.minimumScale;
		var maximumScale = self.maximumScale;
		var hasMinimumScale = !isNaN(minimumScale) && minimumScale!="";
		var hasMaximumScale = !isNaN(maximumScale) && maximumScale!="";
		var scaleNeededToFit = self.getViewFitToViewportScale(view, enableScaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, enableScaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, enableScaleUp);
		var scaleToFitFull = self.getViewFitToViewportScale(view, true);
		var scaleToFitFullWidth = self.getViewFitToViewportWidthScale(view, true);
		var scaleToFitFullHeight = self.getViewFitToViewportHeightScale(view, true);
		var scaleToWidth = scaleToFitType=="width";
		var scaleToHeight = scaleToFitType=="height";
		var shrunkToFit = false;
		var topPosition = null;
		var leftPosition = null;
		var translateY = null;
		var translateX = null;
		var transformValue = "";
		var canCenterVertically = true;
		var canCenterHorizontally = true;
		var style = view.style;

		if (view && self.viewsDictionary[view.id] && self.viewsDictionary[view.id].styleDeclaration) {
			style = self.viewsDictionary[view.id].styleDeclaration.style;
		}

		if (scaleToFit && isSliderChange!=true) {
			if (scaleToFitType=="fit" || scaleToFitType=="") {
				desiredScale = scaleNeededToFit;
			}
			else if (scaleToFitType=="width") {
				desiredScale = scaleNeededToFitWidth;
			}
			else if (scaleToFitType=="height") {
				desiredScale = scaleNeededToFitHeight;
			}
		}
		else {
			if (isNaN(desiredScale)) {
				desiredScale = 1;
			}
		}

		self.updateSliderValue(desiredScale);
		
		// scale to fit width
		if (scaleToWidth && scaleToHeight==false) {
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;

			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitWidth;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "width", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return desiredScale;
		}

		// scale to fit height
		if (scaleToHeight && scaleToWidth==false) {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitHeight<=scaleNeededToFitWidth && enableScaleUp==false;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			canCenterHorizontally = scaleNeededToFitWidth>=1 && enableScaleUp==false;
			
			if (isSliderChange) {
				canCenterHorizontally = desiredScale<scaleToFitFullHeight;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFitHeight;
			}

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
				//canCenterVertically = desiredScale>=scaleNeededToFitHeight && enableScaleUp==false;
			}

			desiredScale = self.getShortNumber(desiredScale);

			canCenterHorizontally = self.canCenterHorizontally(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "height", enableScaleUp, desiredScale, minimumScale, maximumScale);

			if (desiredScale>1 && (enableScaleUp || isSliderChange)) {
				transformValue = "scale(" + desiredScale + ")";
			}
			else if (desiredScale>=1 && enableScaleUp==false) {
				transformValue = "scale(" + 1 + ")";
			}
			else {
				transformValue = "scale(" + desiredScale + ")";
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			return scaleNeededToFitHeight;
		}

		if (scaleToFitType=="fit") {
			//canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFitWidth;
			//canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFitHeight;
			canCenterVertically = scaleNeededToFitHeight>=scaleNeededToFit;
			canCenterHorizontally = scaleNeededToFitWidth>=scaleNeededToFit;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}

			desiredScale = self.getShortNumber(desiredScale);

			if (isSliderChange || scaleToFit==false) {
				canCenterVertically = scaleToFitFullHeight>=desiredScale;
				canCenterHorizontally = desiredScale<scaleToFitFullWidth;
			}
			else if (scaleToFit) {
				desiredScale = scaleNeededToFit;
			}

			transformValue = "scale(" + desiredScale + ")";

			//canCenterHorizontally = self.canCenterHorizontally(view, "fit", false, desiredScale);
			//canCenterVertically = self.canCenterVertically(view, "fit", false, desiredScale);
			
			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;

			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}

		if (scaleToFitType=="default" || scaleToFitType=="") {
			desiredScale = 1;

			if (hasMinimumScale) {
				desiredScale = Math.max(desiredScale, Number(minimumScale));
			}
			if (hasMaximumScale) {
				desiredScale = Math.min(desiredScale, Number(maximumScale));
			}

			canCenterHorizontally = self.canCenterHorizontally(view, "none", false, desiredScale, minimumScale, maximumScale);
			canCenterVertically = self.canCenterVertically(view, "none", false, desiredScale, minimumScale, maximumScale);

			if (self.centerVertically) {
				if (canCenterVertically) {
					translateY = "-50%";
					topPosition = "50%";
				}
				else {
					translateY = "0";
					topPosition = "0";
				}
				
				if (style.top != topPosition) {
					style.top = topPosition + "";
				}

				if (canCenterVertically) {
					transformValue += " translateY(" + translateY+ ")";
				}
			}

			if (self.centerHorizontally) {
				if (canCenterHorizontally) {
					translateX = "-50%";
					leftPosition = "50%";
				}
				else {
					translateX = "0";
					leftPosition = "0";
				}

				if (style.left != leftPosition) {
					style.left = leftPosition + "";
				}

				if (canCenterHorizontally) {
					transformValue += " translateX(" + translateX+ ")";
				}
				else {
					transformValue += " translateX(" + 0 + ")";
				}
			}

			style.transformOrigin = "0 0";
			style.transform = transformValue;


			self.viewScale = desiredScale;
			self.viewToFitWidthScale = scaleNeededToFitWidth;
			self.viewToFitHeightScale = scaleNeededToFitHeight;
			self.viewLeft = leftPosition;
			self.viewTop = topPosition;

			self.updateSliderValue(desiredScale);
			
			return desiredScale;
		}
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view
	 * @param {String} type type of scaling - width, height, all, none
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterHorizontally = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? scale : scaleNeededToFitWidth;
		scaleUp = scaleUp == null ? false : scaleUp;

		if (type=="width") {
	
			if (scaleUp && maximumScale==null) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}
		else if (type=="height") {
			minScale = Math.min(1, scaleNeededToFitHeight);
			if (minimumScale!="" && maximumScale!="") {
				minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
			}
			else {
				if (minimumScale!="") {
					minScale = Math.max(minimumScale, scaleNeededToFitHeight);
				}
				if (maximumScale!="") {
					minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFitHeight));
				}
			}
	
			if (scaleUp && maximumScale=="") {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=minScale) {
				canCenter = true;
			}
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitWidth>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitWidth>=1) {
				canCenter = true;
			}
		}

		self.horizontalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	/**
	 * Returns true if view can be centered horizontally
	 * @param {HTMLElement} view view to scale
	 * @param {String} type type of scaling
	 * @param {Boolean} scaleUp if scale up enabled 
	 * @param {Number} scale target scale value 
	 */
	self.canCenterVertically = function(view, type, scaleUp, scale, minimumScale, maximumScale) {
		var scaleNeededToFit = self.getViewFitToViewportScale(view, scaleUp);
		var scaleNeededToFitWidth = self.getViewFitToViewportWidthScale(view, scaleUp);
		var scaleNeededToFitHeight = self.getViewFitToViewportHeightScale(view, scaleUp);
		var canCenter = false;
		var minScale;

		type = type==null ? "none" : type;
		scale = scale==null ? 1 : scale;
		scaleUp = scaleUp == null ? false : scaleUp;
	
		if (type=="width") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFitWidth;
		}
		else if (type=="height") {
			minScale = Math.max(minimumScale, Math.min(maximumScale, scaleNeededToFit));
			canCenter = scaleNeededToFitHeight>=minScale;
		}
		else if (type=="fit") {
			canCenter = scaleNeededToFitHeight>=scaleNeededToFit;
		}
		else {
			if (scaleUp) {
				canCenter = false;
			}
			else if (scaleNeededToFitHeight>=1) {
				canCenter = true;
			}
		}

		self.verticalScrollbarsNeeded = canCenter;
		
		return canCenter;
	}

	self.getViewFitToViewportScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth) || isNaN(elementHeight)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;
		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		else if (elementWidth > availableWidth || elementHeight > availableHeight) {
			newScale = Math.min(availableHeight/elementHeight, availableWidth/elementWidth);
		}
		
		return newScale;
	}

	self.getViewFitToViewportWidthScale = function(view, scaleUp) {
		// need to get browser viewport width when element
		var isParentWindow = view && view.parentNode && view.parentNode===document.body;
		var enableScaleUp = scaleUp;
		var availableWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		var elementWidth = parseFloat(getComputedStyle(view, "style").width);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementWidth)) {
			return newScale;
		}

		availableWidth -= self.horizontalPadding;

		if (enableScaleUp) {
			newScale = availableWidth/elementWidth;
		}
		else if (elementWidth > availableWidth) {
			newScale = availableWidth/elementWidth;
		}
		
		return newScale;
	}

	self.getViewFitToViewportHeightScale = function(view, scaleUp) {
		var enableScaleUp = scaleUp;
		var availableHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
		var elementHeight = parseFloat(getComputedStyle(view, "style").height);
		var newScale = 1;

		// if element is not added to the document computed values are NaN
		if (isNaN(elementHeight)) {
			return newScale;
		}

		availableHeight -= self.verticalPadding;

		if (enableScaleUp) {
			newScale = availableHeight/elementHeight;
		}
		else if (elementHeight > availableHeight) {
			newScale = availableHeight/elementHeight;
		}
		
		return newScale;
	}

	self.keypressHandler = function(event) {
		var rightKey = 39;
		var leftKey = 37;
		
		// listen for both events 
		if (event.type=="keypress") {
			window.removeEventListener("keyup", self.keypressHandler);
		}
		else {
			window.removeEventListener("keypress", self.keypressHandler);
		}
		
		if (self.showNavigationControls) {
			if (self.navigationOnKeypress) {
				if (event.keyCode==rightKey) {
					self.nextView();
				}
				if (event.keyCode==leftKey) {
					self.previousView();
				}
			}
		}
		else if (self.navigationOnKeypress) {
			if (event.keyCode==rightKey) {
				self.nextView();
			}
			if (event.keyCode==leftKey) {
				self.previousView();
			}
		}
	}

	///////////////////////////////////
	// GENERAL FUNCTIONS
	///////////////////////////////////

	self.getViewById = function(id) {
		id = id ? id.replace("#", "") : "";
		var view = self.viewIds.indexOf(id)!=-1 && self.getElement(id);
		return view;
	}

	self.getViewIds = function() {
		var viewIds = self.getViewPreferenceValue(document.body, self.prefix + "view-ids");
		var viewId = null;

		viewIds = viewIds!=null && viewIds!="" ? viewIds.split(",") : [];

		if (viewIds.length==0) {
			viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
			viewIds = viewId ? [viewId] : [];
		}

		return viewIds;
	}

	self.getInitialViewId = function() {
		var viewId = self.getViewPreferenceValue(document.body, self.prefix + "view-id");
		return viewId;
	}

	self.getApplicationStylesheet = function() {
		var stylesheetId = self.getViewPreferenceValue(document.body, self.prefix + "stylesheet-id");
		self.applicationStylesheet = document.getElementById("applicationStylesheet");
		return self.applicationStylesheet.sheet;
	}

	self.getVisibleView = function() {
		var viewIds = self.getViewIds();
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
		
				if (display=="block" || display=="flex") {
					return view;
				}
			}
		}

		return null;
	}

	self.getVisibleViews = function() {
		var viewIds = self.getViewIds();
		var views = [];
		
		for (var i=0;i<viewIds.length;i++) {
			var viewId = viewIds[i].replace(/[\#?\.?](.*)/, "$" + "1");
			var view = self.getElement(viewId);
			var postName = "_Class";

			if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
				view = self.getElement(viewId.replace(postName, ""));
			}
			
			if (view) {
				var display = getComputedStyle(view).display;
				
				if (display=="none") {
					continue;
				}

				if (display=="block" || display=="flex") {
					views.push(view);
				}
			}
		}

		return views;
	}

	self.getStateNameByViewId = function(id) {
		var state = self.viewsDictionary[id];
		return state && state.stateName;
	}

	self.getMatchingViews = function(ids) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state && state.rule; 
				var matchResults = window.matchMedia(rule.conditionText);
				var view = self.views[viewId];
				
				if (matchResults.matches) {
					if (ids==true) {
						matchingViews.push(viewId);
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.ruleMatchesQuery = function(rule) {
		var result = window.matchMedia(rule.conditionText);
		return result.matches;
	}

	self.getViewsByStateName = function(stateName, matchQuery) {
		var views = self.addedViews.slice(0);
		var matchingViews = [];

		if (self.showByMediaQuery) {

			// find state name
			for (let index = 0; index < views.length; index++) {
				var viewId = views[index];
				var state = self.viewsDictionary[viewId];
				var rule = state.rule;
				var mediaRule = state.mediaRule;
				var view = self.views[viewId];
				var viewStateName = self.getStyleRuleValue(mediaRule, self.STATE_NAME, state);
				var stateFoundAtt = view.getAttribute(self.STATE_NAME)==state;
				var matchesResults = false;
				
				if (viewStateName==stateName) {
					if (matchQuery) {
						matchesResults = self.ruleMatchesQuery(rule);

						if (matchesResults) {
							matchingViews.push(view);
						}
					}
					else {
						matchingViews.push(view);
					}
				}
			}
		}

		return matchingViews;
	}

	self.getInitialView = function() {
		var viewId = self.getInitialViewId();
		viewId = viewId.replace(/[\#?\.?](.*)/, "$" + "1");
		var view = self.getElement(viewId);
		var postName = "_Class";

		if (view==null && viewId && viewId.lastIndexOf(postName)!=-1) {
			view = self.getElement(viewId.replace(postName, ""));
		}

		return view;
	}

	self.getViewIndex = function(view) {
		var viewIds = self.getViewIds();
		var id = view ? view.id : null;
		var index = id && viewIds ? viewIds.indexOf(id) : -1;

		return index;
	}

	self.syncronizeViewToURL = function() {
		var fragment = self.getHashFragment();

		if (self.showByMediaQuery) {
			var stateName = fragment;
			
			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			
			self.showMediaQueryViewsByState(stateName);
			return;
		}

		var view = self.getViewById(fragment);
		var index = view ? self.getViewIndex(view) : 0;
		if (index==-1) index = 0;
		var currentView = self.hideViews(index);

		if (self.supportsPopState && currentView) {

			if (fragment==null) {
				window.history.replaceState({name:currentView.id}, null, "#"+ currentView.id);
			}
			else {
				window.history.pushState({name:currentView.id}, null, "#"+ currentView.id);
			}
		}
		
		self.setViewVariables(view);
		return view;
	}

	/**
	 * Set the currentView or currentOverlay properties and set the lastView or lastOverlay properties
	 */
	self.setViewVariables = function(view, overlay, parentView) {
		if (view) {
			if (self.currentView) {
				self.lastView = self.currentView;
			}
			self.currentView = view;
		}

		if (overlay) {
			if (self.currentOverlay) {
				self.lastOverlay = self.currentOverlay;
			}
			self.currentOverlay = overlay;
		}
	}

	self.getViewPreferenceBoolean = function(view, property, altValue) {
		var computedStyle = window.getComputedStyle(view);
		var value = computedStyle.getPropertyValue(property);
		var type = typeof value;
		
		if (value=="true" || (type=="string" && value.indexOf("true")!=-1)) {
			return true;
		}
		else if (value=="" && arguments.length==3) {
			return altValue;
		}

		return false;
	}

	self.getViewPreferenceValue = function(view, property, defaultValue) {
		var value = window.getComputedStyle(view).getPropertyValue(property);

		if (value===undefined) {
			return defaultValue;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	self.getStyleRuleValue = function(cssRule, property) {
		var value = cssRule ? cssRule.style.getPropertyValue(property) : null;

		if (value===undefined) {
			return null;
		}
		
		value = value.replace(/^[\s\"]*/, "");
		value = value.replace(/[\s\"]*$/, "");
		value = value.replace(/^[\s"]*(.*?)[\s"]*$/, function (match, capture) { 
			return capture;
		});

		return value;
	}

	/**
	 * Get the first defined value of property. Returns empty string if not defined
	 * @param {String} id id of element
	 * @param {String} property 
	 */
	self.getCSSPropertyValueForElement = function(id, property) {
		var styleSheets = document.styleSheets;
		var numOfStylesheets = styleSheets.length;
		var values = [];
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var value;

		for(var i=0;i<numOfStylesheets;i++) {
			var styleSheet = styleSheets[i];
			var cssRules = self.getStylesheetRules(styleSheet);
			var numOfCSSRules = cssRules.length;
			var cssRule;
			
			for (var j=0;j<numOfCSSRules;j++) {
				cssRule = cssRules[j];
				
				if (cssRule.media) {
					var mediaRules = cssRule.cssRules;
					var numOfMediaRules = mediaRules ? mediaRules.length : 0;
					
					for(var k=0;k<numOfMediaRules;k++) {
						var mediaRule = mediaRules[k];
						
						if (mediaRule.selectorText==selectorIDText || mediaRule.selectorText==selectorClassText) {
							
							if (mediaRule.style && mediaRule.style.getPropertyValue(property)!="") {
								value = mediaRule.style.getPropertyValue(property);
								values.push(value);
							}
						}
					}
				}
				else {

					if (cssRule.selectorText==selectorIDText || cssRule.selectorText==selectorClassText) {
						if (cssRule.style && cssRule.style.getPropertyValue(property)!="") {
							value = cssRule.style.getPropertyValue(property);
							values.push(value);
						}
					}
				}
			}
		}

		return values.pop();
	}

	self.getIsStyleDefined = function(id, property) {
		var value = self.getCSSPropertyValueForElement(id, property);
		return value!==undefined && value!="";
	}

	self.collectViews = function() {
		var viewIds = self.getViewIds();

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getElement(id);
			self.views[id] = view;
		}
		
		self.viewIds = viewIds;
	}

	self.collectOverlays = function() {
		var viewIds = self.getViewIds();
		var ids = [];

		for (let index = 0; index < viewIds.length; index++) {
			const id = viewIds[index];
			const view = self.getViewById(id);
			const isOverlay = view && self.isOverlay(view);
			
			if (isOverlay) {
				ids.push(id);
				self.overlays[id] = view;
			}
		}
		
		self.overlayIds = ids;
	}

	self.collectMediaQueries = function() {
		var viewIds = self.getViewIds();
		var styleSheet = self.getApplicationStylesheet();
		var cssRules = self.getStylesheetRules(styleSheet);
		var numOfCSSRules = cssRules ? cssRules.length : 0;
		var cssRule;
		var id = viewIds.length ? viewIds[0]: ""; // single view
		var selectorIDText = "#" + id;
		var selectorClassText = "." + id + "_Class";
		var viewsNotFound = viewIds.slice();
		var viewsFound = [];
		var selectorText = null;
		var property = self.prefix + "view-id";
		var stateName = self.prefix + "state";
		var stateValue = null;
		var view = null;
		
		for (var j=0;j<numOfCSSRules;j++) {
			cssRule = cssRules[j];
			
			if (cssRule.media) {
				var mediaRules = cssRule.cssRules;
				var numOfMediaRules = mediaRules ? mediaRules.length : 0;
				var mediaViewInfoFound = false;
				var mediaId = null;
				
				for(var k=0;k<numOfMediaRules;k++) {
					var mediaRule = mediaRules[k];

					selectorText = mediaRule.selectorText;
					
					if (selectorText==".mediaViewInfo" && mediaViewInfoFound==false) {

						mediaId = self.getStyleRuleValue(mediaRule, property);
						stateValue = self.getStyleRuleValue(mediaRule, stateName);

						selectorIDText = "#" + mediaId;
						selectorClassText = "." + mediaId + "_Class";
						view = self.getElement(mediaId);
						
						// prevent duplicates from load and domcontentloaded events
						if (self.addedViews.indexOf(mediaId)==-1) {
							self.addView(view, mediaId, cssRule, mediaRule, stateValue);
						}

						viewsFound.push(mediaId);

						if (viewsNotFound.indexOf(mediaId)!=-1) {
							viewsNotFound.splice(viewsNotFound.indexOf(mediaId));
						}

						mediaViewInfoFound = true;
					}

					if (selectorIDText==selectorText || selectorClassText==selectorText) {
						var styleObject = self.viewsDictionary[mediaId];
						if (styleObject) {
							styleObject.styleDeclaration = mediaRule;
						}
						break;
					}
				}
			}
			else {
				selectorText = cssRule.selectorText;
				
				if (selectorText==null) continue;

				selectorText = selectorText.replace(/[#|\s|*]?/g, "");

				if (viewIds.indexOf(selectorText)!=-1) {
					view = self.getElement(selectorText);
					self.addView(view, selectorText, cssRule, null, stateValue);

					if (viewsNotFound.indexOf(selectorText)!=-1) {
						viewsNotFound.splice(viewsNotFound.indexOf(selectorText));
					}

					break;
				}
			}
		}

		if (viewsNotFound.length) {
			console.log("Could not find the following views:" + viewsNotFound.join(",") + "");
			console.log("Views found:" + viewsFound.join(",") + "");
		}
	}

	/**
	 * Adds a view
	 * @param {HTMLElement} view view element
	 * @param {String} id id of view element
	 * @param {CSSRule} cssRule of view element
	 * @param {CSSMediaRule} mediaRule media rule of view element
	 * @param {String} stateName name of state if applicable
	 **/
	self.addView = function(view, viewId, cssRule, mediaRule, stateName) {
		var viewData = {};
		viewData.name = viewId;
		viewData.rule = cssRule;
		viewData.id = viewId;
		viewData.mediaRule = mediaRule;
		viewData.stateName = stateName;

		self.views.push(viewData);
		self.addedViews.push(viewId);
		self.viewsDictionary[viewId] = viewData;
		self.mediaQueryDictionary[viewId] = cssRule;
	}

	self.hasView = function(name) {

		if (self.addedViews.indexOf(name)!=-1) {
			return true;
		}
		return false;
	}

	/**
	 * Go to view by id. Views are added in addView()
	 * @param {String} id id of view in current
	 * @param {Boolean} maintainPreviousState if true then do not hide other views
	 * @param {String} parent id of parent view
	 **/
	self.goToView = function(id, maintainPreviousState, parent) {
		var state = self.viewsDictionary[id];

		if (state) {
			if (maintainPreviousState==false || maintainPreviousState==null) {
				self.hideViews();
			}
			self.enableMediaQuery(state.rule);
			self.updateViewLabel();
			self.updateURL();
		}
		else {
			var event = new Event(self.STATE_NOT_FOUND);
			self.stateName = id;
			window.dispatchEvent(event);
		}
	}

	/**
	 * Go to the view in the event targets CSS variable
	 **/
	self.goToTargetView = function(event) {
		var button = event.currentTarget;
		var buttonComputedStyles = getComputedStyle(button);
		var actionTargetValue = buttonComputedStyles.getPropertyValue(self.prefix+"action-target").trim();
		var animation = buttonComputedStyles.getPropertyValue(self.prefix+"animation").trim();
		var targetType = buttonComputedStyles.getPropertyValue(self.prefix+"action-type").trim();
		var targetView = self.application ? null : self.getElement(actionTargetValue);
		var targetState = targetView ? self.getStateNameByViewId(targetView.id) : null;
		var actionTargetStyles = targetView ? targetView.style : null;
		var state = self.viewsDictionary[actionTargetValue];
		
		// navigate to page
		if (self.application==false || targetType=="page") {
			document.location.href = "./" + actionTargetValue;
			return;
		}

		// if view is found
		if (targetView) {

			if (self.currentOverlay) {
				self.removeOverlay(false);
			}

			if (self.showByMediaQuery) {
				var stateName = targetState;
				
				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
				return;
			}

			// add animation set in event target style declaration
			if (animation && self.supportAnimations) {
				self.crossFade(self.currentView, targetView, false, animation);
			}
			else {
				self.setViewVariables(self.currentView);
				self.hideViews();
				self.enableMediaQuery(state.rule);
				self.scaleViewIfNeeded(targetView);
				self.centerView(targetView);
				self.updateViewLabel();
				self.updateURL();
			}
		}
		else {
			var stateEvent = new Event(self.STATE_NOT_FOUND);
			self.stateName = name;
			window.dispatchEvent(stateEvent);
		}

		event.stopImmediatePropagation();
	}

	/**
	 * Cross fade between views
	 **/
	self.crossFade = function(from, to, update, animation) {
		var targetIndex = to.parentNode
		var fromIndex = Array.prototype.slice.call(from.parentElement.children).indexOf(from);
		var toIndex = Array.prototype.slice.call(to.parentElement.children).indexOf(to);

		if (from.parentNode==to.parentNode) {
			var reverse = self.getReverseAnimation(animation);
			var duration = self.getAnimationDuration(animation, true);

			// if target view is above (higher index)
			// then fade in target view 
			// and after fade in then hide previous view instantly
			if (fromIndex<toIndex) {
				self.setElementAnimation(from, null);
				self.setElementAnimation(to, null);
				self.showViewByMediaQuery(to);
				self.fadeIn(to, update, animation);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
					self.updateViewLabel();
				}, duration)
			}
			// if target view is on bottom
			// then show target view instantly 
			// and fade out current view
			else if (fromIndex>toIndex) {
				self.setElementAnimation(to, null);
				self.setElementAnimation(from, null);
				self.showViewByMediaQuery(to);
				self.fadeOut(from, update, reverse);

				setTimeout(function() {
					self.setElementAnimation(to, null);
					self.setElementAnimation(from, null);
					self.hideView(from);
					self.updateURL();
					self.setViewVariables(to);
				}, duration)
			}
		}
	}

	self.fadeIn = function(element, update, animation) {
		self.showViewByMediaQuery(element);

		if (update) {
			self.updateURL(element);

			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.setViewVariables(element);
				self.updateViewLabel();
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		self.setElementAnimation(element, null);
		
		element.style.animation = animation;
	}

	self.fadeOutCurrentView = function(animation, update) {
		if (self.currentView) {
			self.fadeOut(self.currentView, update, animation);
		}
		if (self.currentOverlay) {
			self.fadeOut(self.currentOverlay, update, animation);
		}
	}

	self.fadeOut = function(element, update, animation) {
		if (update) {
			element.addEventListener("animationend", function(event) {
				element.style.animation = null;
				self.hideView(element);
				element.removeEventListener("animationend", arguments.callee);
			});
		}

		element.style.animationPlayState = "paused";
		element.style.animation = animation;
		element.style.animationPlayState = "running";
	}

	self.getReverseAnimation = function(animation) {
		if (animation && animation.indexOf("reverse")==-1) {
			animation += " reverse";
		}

		return animation;
	}

	/**
	 * Get duration in animation string
	 * @param {String} animation animation value
	 * @param {Boolean} inMilliseconds length in milliseconds if true
	 */
	self.getAnimationDuration = function(animation, inMilliseconds) {
		var duration = 0;
		var expression = /.+(\d\.\d)s.+/;

		if (animation && animation.match(expression)) {
			duration = parseFloat(animation.replace(expression, "$" + "1"));
			if (duration && inMilliseconds) duration = duration * 1000;
		}

		return duration;
	}

	self.setElementAnimation = function(element, animation, priority) {
		element.style.setProperty("animation", animation, "important");
	}

	self.getElement = function(id) {
		id = id ? id.trim() : id;
		var element = id ? document.getElementById(id) : null;

		return element;
	}

	self.getElementById = function(id) {
		id = id ? id.trim() : id;
		var element = id ? document.getElementById(id) : null;

		return element;
	}

	self.getElementByClass = function(className) {
		className = className ? className.trim() : className;
		var elements = document.getElementsByClassName(className);

		return elements.length ? elements[0] : null;
	}

	self.resizeHandler = function(event) {
		
		if (self.showByMediaQuery) {
			if (self.enableDeepLinking) {
				var stateName = self.getHashFragment();

				if (stateName==null || stateName=="") {
					var initialView = self.getInitialView();
					stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
				}
				self.showMediaQueryViewsByState(stateName, event);
			}
		}
		else {
			var visibleViews = self.getVisibleViews();

			for (let index = 0; index < visibleViews.length; index++) {	
				var view = visibleViews[index];
				self.scaleViewIfNeeded(view);
			}
		}

		window.dispatchEvent(new Event(self.APPLICATION_RESIZE));
	}

	self.scaleViewIfNeeded = function(view) {

		if (self.scaleViewsOnResize) {
			if (view==null) {
				view = self.getVisibleView();
			}

			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME)=="false" ? false : true;

			if (isViewScaled) {
				self.scaleViewToFit(view, true);
			}
			else {
				self.scaleViewToActualSize(view);
			}
		}
		else if (view) {
			self.centerView(view);
		}
	}

	self.centerView = function(view) {

		if (self.scaleViewsToFit) {
			self.scaleViewToFit(view, true);
		}
		else {
			self.scaleViewToActualSize(view);  // for centering support for now
		}
	}

	self.preventDoubleClick = function(event) {
		event.stopImmediatePropagation();
	}

	self.getHashFragment = function() {
		var value = window.location.hash ? window.location.hash.replace("#", "") : "";
		return value;
	}

	self.showBlockElement = function(view) {
		view.style.display = "block";
	}

	self.hideElement = function(view) {
		view.style.display = "none";
	}

	self.showStateFunction = null;

	self.showMediaQueryViewsByState = function(state, event) {
		// browser will hide and show by media query (small, medium, large)
		// but if multiple views exists at same size user may want specific view
		// if showStateFunction is defined that is called with state fragment and user can show or hide each media matching view by returning true or false
		// if showStateFunction is not defined and state is defined and view has a defined state that matches then show that and hide other matching views
		// if no state is defined show view 
		// an viewChanging event is dispatched before views are shown or hidden that can be prevented 

		// get all matched queries
		// if state name is specified then show that view and hide other views
		// if no state name is defined then show
		var matchedViews = self.getMatchingViews();
		var matchMediaQuery = true;
		var foundViews = self.getViewsByStateName(state, matchMediaQuery);
		var showViews = [];
		var hideViews = [];

		// loop views that match media query 
		for (let index = 0; index < matchedViews.length; index++) {
			var view = matchedViews[index];
			
			// let user determine visible view
			if (self.showStateFunction!=null) {
				if (self.showStateFunction(view, state)) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// state was defined so check if view matches state
			else if (foundViews.length) {

				if (foundViews.indexOf(view)!=-1) {
					showViews.push(view);
				}
				else {
					hideViews.push(view);
				}
			}
			// if no state names are defined show view (define unused state name to exclude)
			else if (state==null || state=="") {
				showViews.push(view);
			}
		}

		if (showViews.length) {
			var viewChangingEvent = new Event(self.VIEW_CHANGING);
			viewChangingEvent.showViews = showViews;
			viewChangingEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangingEvent);

			if (viewChangingEvent.defaultPrevented==false) {
				for (var index = 0; index < hideViews.length; index++) {
					var view = hideViews[index];

					if (self.isOverlay(view)) {
						self.removeOverlay(view);
					}
					else {
						self.hideElement(view);
					}
				}

				for (var index = 0; index < showViews.length; index++) {
					var view = showViews[index];

					if (index==showViews.length-1) {
						self.clearDisplay(view);
						self.setViewOptions(view);
						self.setViewVariables(view);
						self.centerView(view);
						self.updateURLState(view, state);
					}
				}
			}

			var viewChangeEvent = new Event(self.VIEW_CHANGE);
			viewChangeEvent.showViews = showViews;
			viewChangeEvent.hideViews = hideViews;
			window.dispatchEvent(viewChangeEvent);
		}
		
	}

	self.clearDisplay = function(view) {
		view.style.setProperty("display", null);
	}

	self.hashChangeHandler = function(event) {
		var fragment = self.getHashFragment();
		var view = self.getViewById(fragment);

		if (self.showByMediaQuery) {
			var stateName = fragment;

			if (stateName==null || stateName=="") {
				var initialView = self.getInitialView();
				stateName = initialView ? self.getStateNameByViewId(initialView.id) : null;
			}
			self.showMediaQueryViewsByState(stateName);
		}
		else {
			if (view) {
				self.hideViews();
				self.showView(view);
				self.setViewVariables(view);
				self.updateViewLabel();
				
				window.dispatchEvent(new Event(self.VIEW_CHANGE));
			}
			else {
				window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
			}
		}
	}

	self.popStateHandler = function(event) {
		var state = event.state;
		var fragment = state ? state.name : window.location.hash;
		var view = self.getViewById(fragment);

		if (view) {
			self.hideViews();
			self.showView(view);
			self.updateViewLabel();
		}
		else {
			window.dispatchEvent(new Event(self.VIEW_NOT_FOUND));
		}
	}

	self.doubleClickHandler = function(event) {
		var view = self.getVisibleView();
		var scaleValue = view ? self.getViewScaleValue(view) : 1;
		var scaleNeededToFit = view ? self.getViewFitToViewportScale(view) : 1;
		var scaleNeededToFitWidth = view ? self.getViewFitToViewportWidthScale(view) : 1;
		var scaleNeededToFitHeight = view ? self.getViewFitToViewportHeightScale(view) : 1;
		var scaleToFitType = self.scaleToFitType;

		// Three scenarios
		// - scale to fit on double click
		// - set scale to actual size on double click
		// - switch between scale to fit and actual page size

		if (scaleToFitType=="width") {
			scaleNeededToFit = scaleNeededToFitWidth;
		}
		else if (scaleToFitType=="height") {
			scaleNeededToFit = scaleNeededToFitHeight;
		}

		// if scale and actual size enabled then switch between
		if (self.scaleToFitOnDoubleClick && self.actualSizeOnDoubleClick) {
			var isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
			var isScaled = false;
			
			// if scale is not 1 then view needs scaling
			if (scaleNeededToFit!=1) {

				// if current scale is at 1 it is at actual size
				// scale it to fit
				if (scaleValue==1) {
					self.scaleViewToFit(view);
					isScaled = true;
				}
				else {
					// scale is not at 1 so switch to actual size
					self.scaleViewToActualSize(view);
					isScaled = false;
				}
			}
			else {
				// view is smaller than viewport 
				// so scale to fit() is scale actual size
				// actual size and scaled size are the same
				// but call scale to fit to retain centering
				self.scaleViewToFit(view);
				isScaled = false;
			}
			
			view.setAttributeNS(null, self.SIZE_STATE_NAME, isScaled+"");
			isViewScaled = view.getAttributeNS(null, self.SIZE_STATE_NAME);
		}
		else if (self.scaleToFitOnDoubleClick) {
			self.scaleViewToFit(view);
		}
		else if (self.actualSizeOnDoubleClick) {
			self.scaleViewToActualSize(view);
		}

	}

	self.scaleViewToFit = function(view) {
		return self.setViewScaleValue(view, true);
	}

	self.scaleViewToActualSize = function(view) {
		self.setViewScaleValue(view, false, 1);
	}

	self.onloadHandler = function(event) {
		self.initialize();
	}

	self.setElementHTML = function(id, value) {
		var element = self.getElement(id);
		element.innerHTML = value;
	}

	self.getStackArray = function(error) {
		var value = "";
		
		if (error==null) {
		  try {
			 error = new Error("Stack");
		  }
		  catch (e) {
			 
		  }
		}
		
		if ("stack" in error) {
		  value = error.stack;
		  var methods = value.split(/\n/g);
	 
		  var newArray = methods ? methods.map(function (value, index, array) {
			 value = value.replace(/\@.*/,"");
			 return value;
		  }) : null;
	 
		  if (newArray && newArray[0].includes("getStackTrace")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0].includes("getStackArray")) {
			 newArray.shift();
		  }
		  if (newArray && newArray[0]=="") {
			 newArray.shift();
		  }
	 
			return newArray;
		}
		
		return null;
	}

	self.log = function(value) {
		console.log.apply(this, [value]);
	}
	
	// initialize on load
	// sometimes the body size is 0 so we call this now and again later
	window.addEventListener("load", self.onloadHandler);
	window.document.addEventListener("DOMContentLoaded", self.onloadHandler);
}

window.application = new Application();
</script>
</head>
<body>
<div id="Comparar_Controlador_Fotovoltaico_Final">
	<img id="capa" src="capa.png" srcset="capa.png 1x, capa@2x.png 2x">
		
	<svg class="Retngulo_47">
		<rect id="Retngulo_47" rx="0" ry="0" x="0" y="0" width="1920" height="2051">
		</rect>
	</svg>
	<svg class="Retngulo_1">
		<rect id="Retngulo_1" rx="0" ry="0" x="0" y="0" width="1920" height="50">
		</rect>
	</svg>
	<div onclick="application.goToTargetView(event)" id="COMPARAR">
		<span>COMPARAR</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="EQUIPAMENTOS">
		<span>EQUIPAMENTOS</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="QUEM_SOMOS">
		<span>QUEM SOMOS</span>
	</div>
	<div onclick="application.goToTargetView(event)" id="SUPORTE">
		<span>SUPORTE</span>
	</div>
	<svg class="Retngulo_7">
		<rect id="Retngulo_7" rx="0" ry="0" x="0" y="0" width="1920" height="66">
		</rect>
	</svg>
	<div onclick="application.goToTargetView(event)" id="Grupo_4">
		<img id="Imagem_1" src="Imagem_1.png" srcset="Imagem_1.png 1x, Imagem_1@2x.png 2x">
			
		<img id="Imagem_4" src="Imagem_4.png" srcset="Imagem_4.png 1x, Imagem_4@2x.png 2x">
			
		<img id="Imagem_7" src="Imagem_7.png" srcset="Imagem_7.png 1x, Imagem_7@2x.png 2x">
			
		<img id="Imagem_8" src="Imagem_8.png" srcset="Imagem_8.png 1x, Imagem_8@2x.png 2x">
			
		<img id="Imagem_9" src="Imagem_9.png" srcset="Imagem_9.png 1x, Imagem_9@2x.png 2x">
			
	</div>
	<svg class="Retngulo_11">
		<rect id="Retngulo_11" rx="0" ry="0" x="0" y="0" width="25" height="2358">
		</rect>
	</svg>
	<div id="Grupo_51">
		<div id="Grupo_29">
			<div id="Grupo_12">
				<div id="Grupo_6">
					<svg class="Caminho_1" viewBox="0 0 543 77">
						<path id="Caminho_1" d="M 38.5 0 L 504.5 0 C 525.762939453125 0 543 17.23703575134277 543 38.5 C 543 59.76296234130859 525.762939453125 77 504.5 77 L 38.5 77 C 17.23703575134277 77 0 59.76296234130859 0 38.5 C 0 17.23703575134277 17.23703575134277 0 38.5 0 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Painel_1_controlador">
			<span>
			<?php
			$title = $_POST['titles'];
			echo $title;
			?>
			</span>
		</div>
	</div>
	<div id="Grupo_52">
		<div id="Grupo_29_bg">
			<div id="Grupo_12_bh">
				<div id="Grupo_6_bi">
					<svg class="Caminho_1_bj" viewBox="0 0 543 77">
						<path id="Caminho_1_bj" d="M 38.5 0 L 504.5 0 C 525.762939453125 0 543 17.23703575134277 543 38.5 C 543 59.76296234130859 525.762939453125 77 504.5 77 L 38.5 77 C 17.23703575134277 77 0 59.76296234130859 0 38.5 C 0 17.23703575134277 17.23703575134277 0 38.5 0 Z">
						</path>
					</svg>
				</div>
			</div>
		</div>
		<div id="Painel_3_controlador">
			<span><?php
			$title2 = $_POST['titles2'];
			echo $title2;
			?>
			</span>
		</div>
	</div>
	<div onclick="application.goToTargetView(event)" id="Grupo_39">
		<img id="Logo_COS_White" src="Logo_COS_White.png" srcset="Logo_COS_White.png 1x, Logo_COS_White@2x.png 2x">
			
		<img id="Logo_COS" src="Logo_COS.png" srcset="Logo_COS.png 1x, Logo_COS@2x.png 2x">
			
		<svg class="Main">
			<rect id="Main" rx="0" ry="0" x="0" y="0" width="86" height="31">
			</rect>
		</svg>
	</div>
	<div id="Grupo_57">
		<svg class="Retngulo_57">
			<rect id="Retngulo_57" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_137">
			<rect id="Retngulo_137" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_91">
			<rect id="Retngulo_91" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_139">
			<rect id="Retngulo_139" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_95">
			<rect id="Retngulo_95" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_145">
			<rect id="Retngulo_145" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_99">
			<rect id="Retngulo_99" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_149">
			<rect id="Retngulo_149" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_103">
			<rect id="Retngulo_103" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_150">
			<rect id="Retngulo_150" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_107">
			<rect id="Retngulo_107" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_151">
			<rect id="Retngulo_151" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_111">
			<rect id="Retngulo_111" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_152">
			<rect id="Retngulo_152" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_115">
			<rect id="Retngulo_115" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_153">
			<rect id="Retngulo_153" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_119">
			<rect id="Retngulo_119" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_169">
			<rect id="Retngulo_169" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_123">
			<rect id="Retngulo_123" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_173">
			<rect id="Retngulo_173" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_127">
			<rect id="Retngulo_127" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_177">
			<rect id="Retngulo_177" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_131">
			<rect id="Retngulo_131" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_178">
			<rect id="Retngulo_178" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_135">
			<rect id="Retngulo_135" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_185">
			<rect id="Retngulo_185" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_58">
			<rect id="Retngulo_58" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_140">
			<rect id="Retngulo_140" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_89">
			<rect id="Retngulo_89" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_141">
			<rect id="Retngulo_141" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_93">
			<rect id="Retngulo_93" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_146">
			<rect id="Retngulo_146" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_97">
			<rect id="Retngulo_97" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_154">
			<rect id="Retngulo_154" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_101">
			<rect id="Retngulo_101" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_155">
			<rect id="Retngulo_155" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_105">
			<rect id="Retngulo_105" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_156">
			<rect id="Retngulo_156" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_109">
			<rect id="Retngulo_109" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_157">
			<rect id="Retngulo_157" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_113">
			<rect id="Retngulo_113" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_158">
			<rect id="Retngulo_158" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_117">
			<rect id="Retngulo_117" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_170">
			<rect id="Retngulo_170" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_121">
			<rect id="Retngulo_121" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_175">
			<rect id="Retngulo_175" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_125">
			<rect id="Retngulo_125" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_179">
			<rect id="Retngulo_179" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_129">
			<rect id="Retngulo_129" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_180">
			<rect id="Retngulo_180" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_133">
			<rect id="Retngulo_133" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_186">
			<rect id="Retngulo_186" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_72">
			<rect id="Retngulo_72" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_138">
			<rect id="Retngulo_138" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_92">
			<rect id="Retngulo_92" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_142">
			<rect id="Retngulo_142" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_96">
			<rect id="Retngulo_96" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_147">
			<rect id="Retngulo_147" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_100">
			<rect id="Retngulo_100" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_159">
			<rect id="Retngulo_159" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_104">
			<rect id="Retngulo_104" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_160">
			<rect id="Retngulo_160" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_108">
			<rect id="Retngulo_108" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_161">
			<rect id="Retngulo_161" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_112">
			<rect id="Retngulo_112" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_162">
			<rect id="Retngulo_162" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_116">
			<rect id="Retngulo_116" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_163">
			<rect id="Retngulo_163" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_120">
			<rect id="Retngulo_120" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_171">
			<rect id="Retngulo_171" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_124">
			<rect id="Retngulo_124" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_174">
			<rect id="Retngulo_174" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_128">
			<rect id="Retngulo_128" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_181">
			<rect id="Retngulo_181" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_132">
			<rect id="Retngulo_132" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_182">
			<rect id="Retngulo_182" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_136">
			<rect id="Retngulo_136" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_187">
			<rect id="Retngulo_187" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_73">
			<rect id="Retngulo_73" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_143">
			<rect id="Retngulo_143" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_90">
			<rect id="Retngulo_90" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_144">
			<rect id="Retngulo_144" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_94">
			<rect id="Retngulo_94" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_148">
			<rect id="Retngulo_148" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_98">
			<rect id="Retngulo_98" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_164">
			<rect id="Retngulo_164" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_102">
			<rect id="Retngulo_102" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_165">
			<rect id="Retngulo_165" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_106">
			<rect id="Retngulo_106" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_166">
			<rect id="Retngulo_166" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_110">
			<rect id="Retngulo_110" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_167">
			<rect id="Retngulo_167" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_114">
			<rect id="Retngulo_114" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_168">
			<rect id="Retngulo_168" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_118">
			<rect id="Retngulo_118" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_172">
			<rect id="Retngulo_172" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_122">
			<rect id="Retngulo_122" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_176">
			<rect id="Retngulo_176" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_126">
			<rect id="Retngulo_126" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_183">
			<rect id="Retngulo_183" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_130">
			<rect id="Retngulo_130" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_184">
			<rect id="Retngulo_184" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_134">
			<rect id="Retngulo_134" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_188">
			<rect id="Retngulo_188" rx="0" ry="0" x="0" y="0" width="600" height="100">
			</rect>
		</svg>
		<div id="Fabricante">
			<span>Fabricante</span>
		</div>
		<div id="x">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['fabricante'];
			}
			?>
			</span>
		</div>
		<div id="x_eo">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['voltagem nominal do sistema min'];
			}
			?>
			</span>
		</div>
		<div id="x_ep">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['voltagem nominal do sistema max'];
			}
			?>
			</span>
		</div>
		<div id="x_eq">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['corrente nominal de carga'];
			}
			?>
			</span>
		</div>
		<div id="x_er">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['corrente nominal de descarga'];
			}
			?>
			</span>
		</div>
		<div id="x_es">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao entrada de bateria'];
			}
			?>
			</span>
		</div>
		<div id="x_et">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['max. tensao de circuito aberto de painel'];
			}
			?>
			</span>
		</div>
		<div id="x_eu">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['max. potencia de entrada painel (12V)(24V)'];
			}
			?>
			</span>
		</div>
		<div id="x_ev">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - equalizacao selada'];
			}
			?>
			</span>
		</div>
		<div id="x_ew">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - equalizacao inundada'];
			}
			?>
			</span>
		</div>
		<div id="x_ex">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - boost gel'];
			}
			?>
			</span>
		</div>
		<div id="x_ey">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - boost selada'];
			}
			?>
			</span>
		</div>
		<div id="x_ez">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - boost inundada'];
			}
			?>
			</span>
		</div>
		<div id="x_e">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - flutuacao'];
			}
			?>
			</span>
		</div>
		<div id="x_fa">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de reconexao por baixa voltagem'];
			}
			?>
			</span>
		</div>
		<div id="x_fb">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de desconexao por baixa tensao'];
			}
			?>
			</span>
		</div>
		<div id="x_fc">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['eficiencia de conversao de pico'];
			}
			?>
			</span>
		</div>
		<div id="x_fd">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['mppt precisao'];
			}
			?>
			</span>
		</div>
		<div id="x_fe">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['temperatura de trabalho'];
			}
			?>
			</span>
		</div>
		<div id="x_ff">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['grau de Protecao'];
			}
			?>
			</span>
		</div>
		<div id="x_fg">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['terminais de potencia'];
			}
			?>
			</span>
		</div>
		<div id="x_fh">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['peso'];
			}
			?>
			</span>
		</div>
		<div id="x_fi">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['garantia'];
			}
			?>
			</span>
		</div>
		<div id="x_fj">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['interface de comunicacao'];
			}
			?>
			</span>
		</div>
		<div id="x_fk">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['modelo de bateria'];
			}
			?>
			</span>
		</div>
		<div id="x_fl">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['link'];
			}
			?>
			</span>
		</div>
		<div id="Voltagem_nominal_do_sistema_mi">
			<span>Voltagem nominal do sistema min</span>
		</div>
		<div id="Voltagem_nominal_do_sistema_ma">
			<span>Voltagem nominal do sistema max</span>
		</div>
		<div id="Corrente_nominal_de_carga">
			<span>Corrente nominal de carga</span>
		</div>
		<div id="Corrente_nominal_de_descarga">
			<span>Corrente nominal de descarga</span>
		</div>
		<div id="Tenso_entrada_de_bateria">
			<span>Tensão entrada de bateria</span>
		</div>
		<div id="Max_tenso_de_circuito_aberto_d">
			<span>Max. tensão de circuito aberto de painel</span>
		</div>
		<div id="Max_potencia_de_entrada_painel">
			<span>Max. potencia de entrada painel(12V)(24V)</span>
		</div>
		<div id="Tenso_de_carregamento_-_equali">
			<span>Tensão de carregamento - equalização selada</span>
		</div>
		<div id="Tenso_de_carregamento_-_equali_fl">
			<span>Tensão de carregamento - equalização inundada</span>
		</div>
		<div id="Tenso_de_carregamento_-__Boost">
			<span>Tensão de carregamento -  Boost gel</span>
		</div>
		<div id="Tenso_de_carregamento_-__Boost_fn">
			<span>Tensão de carregamento -  Boost selada</span>
		</div>
		<div id="Tenso_de_carregamento_-_Boost_">
			<span>Tensão de carregamento - Boost inundada</span>
		</div>
		<div id="Tenso_de_carregamento_-_Flutua">
			<span>Tensão de carregamento - Flutuação</span>
		</div>
		<div id="Tenso_de_reconexo_por_baixa_vo">
			<span>Tensão de reconexão por baixa voltagem</span>
		</div>
		<div id="Tenso_de_desconexo_por_baixa_t">
			<span>Tensão de desconexão por baixa tensão</span>
		</div>
		<div id="Eficincia_de_converso_de_pico">
			<span>Eficiência de conversão de pico</span>
		</div>
		<div id="MPPT_preciso">
			<span>MPPT precisão</span>
		</div>
		<div id="Temperatura_de_trabalho">
			<span>Temperatura de trabalho</span>
		</div>
		<div id="Grau_de_proteo">
			<span>Grau de proteção</span>
		</div>
		<div id="Terminais_de_potencia">
			<span>Terminais de potencia</span>
		</div>
		<div id="Peso">
			<span>Peso</span>
		</div>
		<div id="Garantia">
			<span>Garantia</span>
		</div>
		<div id="Interface_de_comunicao">
			<span>Interface de comunicação</span>
		</div>
		<div id="Modelo_de_bateria">
			<span>Modelo de bateria</span>
		</div>
		<div id="Link">
			<span>Link</span>
		</div>
	</div>
	<div id="Grupo_61">
		<svg class="Retngulo_57_f">
			<rect id="Retngulo_57_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_137_f">
			<rect id="Retngulo_137_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_91_f">
			<rect id="Retngulo_91_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_139_f">
			<rect id="Retngulo_139_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_95_f">
			<rect id="Retngulo_95_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_145_f">
			<rect id="Retngulo_145_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_99_f">
			<rect id="Retngulo_99_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_149_ga">
			<rect id="Retngulo_149_ga" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_103_gb">
			<rect id="Retngulo_103_gb" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_150_gc">
			<rect id="Retngulo_150_gc" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_107_gd">
			<rect id="Retngulo_107_gd" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_151_ge">
			<rect id="Retngulo_151_ge" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_111_gf">
			<rect id="Retngulo_111_gf" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_152_gg">
			<rect id="Retngulo_152_gg" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_115_gh">
			<rect id="Retngulo_115_gh" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_153_gi">
			<rect id="Retngulo_153_gi" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_119_gj">
			<rect id="Retngulo_119_gj" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_169_gk">
			<rect id="Retngulo_169_gk" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_123_gl">
			<rect id="Retngulo_123_gl" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_173_gm">
			<rect id="Retngulo_173_gm" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_127_gn">
			<rect id="Retngulo_127_gn" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_177_go">
			<rect id="Retngulo_177_go" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_131_gp">
			<rect id="Retngulo_131_gp" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_178_gq">
			<rect id="Retngulo_178_gq" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_135_gr">
			<rect id="Retngulo_135_gr" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_185_gs">
			<rect id="Retngulo_185_gs" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_58_gt">
			<rect id="Retngulo_58_gt" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_140_gu">
			<rect id="Retngulo_140_gu" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_89_gv">
			<rect id="Retngulo_89_gv" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_141_gw">
			<rect id="Retngulo_141_gw" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_93_gx">
			<rect id="Retngulo_93_gx" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_146_gy">
			<rect id="Retngulo_146_gy" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_97_gz">
			<rect id="Retngulo_97_gz" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_154_g">
			<rect id="Retngulo_154_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_101_g">
			<rect id="Retngulo_101_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_155_g">
			<rect id="Retngulo_155_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_105_g">
			<rect id="Retngulo_105_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_156_g">
			<rect id="Retngulo_156_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_109_g">
			<rect id="Retngulo_109_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_157_g">
			<rect id="Retngulo_157_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_113_g">
			<rect id="Retngulo_113_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_158_g">
			<rect id="Retngulo_158_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_117_g">
			<rect id="Retngulo_117_g" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_170_ha">
			<rect id="Retngulo_170_ha" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_121_hb">
			<rect id="Retngulo_121_hb" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_175_hc">
			<rect id="Retngulo_175_hc" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_125_hd">
			<rect id="Retngulo_125_hd" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_179_he">
			<rect id="Retngulo_179_he" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_129_hf">
			<rect id="Retngulo_129_hf" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_180_hg">
			<rect id="Retngulo_180_hg" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_133_hh">
			<rect id="Retngulo_133_hh" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_186_hi">
			<rect id="Retngulo_186_hi" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_72_hj">
			<rect id="Retngulo_72_hj" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_138_hk">
			<rect id="Retngulo_138_hk" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_92_hl">
			<rect id="Retngulo_92_hl" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_142_hm">
			<rect id="Retngulo_142_hm" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_96_hn">
			<rect id="Retngulo_96_hn" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_147_ho">
			<rect id="Retngulo_147_ho" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_100_hp">
			<rect id="Retngulo_100_hp" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_159_hq">
			<rect id="Retngulo_159_hq" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_104_hr">
			<rect id="Retngulo_104_hr" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_160_hs">
			<rect id="Retngulo_160_hs" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_108_ht">
			<rect id="Retngulo_108_ht" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_161_hu">
			<rect id="Retngulo_161_hu" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_112_hv">
			<rect id="Retngulo_112_hv" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_162_hw">
			<rect id="Retngulo_162_hw" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_116_hx">
			<rect id="Retngulo_116_hx" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_163_hy">
			<rect id="Retngulo_163_hy" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_120_hz">
			<rect id="Retngulo_120_hz" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_171_h">
			<rect id="Retngulo_171_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_124_h">
			<rect id="Retngulo_124_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_174_h">
			<rect id="Retngulo_174_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_128_h">
			<rect id="Retngulo_128_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_181_h">
			<rect id="Retngulo_181_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_132_h">
			<rect id="Retngulo_132_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_182_h">
			<rect id="Retngulo_182_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_136_h">
			<rect id="Retngulo_136_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_187_h">
			<rect id="Retngulo_187_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_73_h">
			<rect id="Retngulo_73_h" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_143_ia">
			<rect id="Retngulo_143_ia" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_90_ib">
			<rect id="Retngulo_90_ib" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_144_ic">
			<rect id="Retngulo_144_ic" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_94_id">
			<rect id="Retngulo_94_id" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_148_ie">
			<rect id="Retngulo_148_ie" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_98_if">
			<rect id="Retngulo_98_if" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_164_ig">
			<rect id="Retngulo_164_ig" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_102_ih">
			<rect id="Retngulo_102_ih" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_165_ii">
			<rect id="Retngulo_165_ii" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_106_ij">
			<rect id="Retngulo_106_ij" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_166_ik">
			<rect id="Retngulo_166_ik" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_110_il">
			<rect id="Retngulo_110_il" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_167_im">
			<rect id="Retngulo_167_im" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_114_in">
			<rect id="Retngulo_114_in" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_168_io">
			<rect id="Retngulo_168_io" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_118_ip">
			<rect id="Retngulo_118_ip" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_172_iq">
			<rect id="Retngulo_172_iq" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_122_ir">
			<rect id="Retngulo_122_ir" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_176_is">
			<rect id="Retngulo_176_is" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_126_it">
			<rect id="Retngulo_126_it" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_183_iu">
			<rect id="Retngulo_183_iu" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_130_iv">
			<rect id="Retngulo_130_iv" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_184_iw">
			<rect id="Retngulo_184_iw" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_134_ix">
			<rect id="Retngulo_134_ix" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_188_iy">
			<rect id="Retngulo_188_iy" rx="0" ry="0" x="0" y="0" width="600" height="100">
			</rect>
		</svg>
		<div id="Fabricante_iz">
			<span>Fabricante</span>
		</div>
		<div id="x_i">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['fabricante'];
			}
			?>
			</span>
		</div>
		<div id="x_ja">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['voltagem nominal do sistema min'];
			}
			?>
			</span>
		</div>
		<div id="x_jb">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['voltagem nominal do sistema max'];
			}
			?>
			</span>
		</div>
		<div id="x_jc">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['corrente nominal de carga'];
			}
			?>
			</span>
		</div>
		<div id="x_jd">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['corrente nominal de descarga'];
			}
			?>
			</span>
		</div>
		<div id="x_je">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao entrada de bateria'];
			}
			?>
			</span>
		</div>
		<div id="x_jf">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['max. tensao de circuito aberto de painel'];
			}
			?>
			</span>
		</div>
		<div id="x_jg">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['max. potencia de entrada painel (12V)(24V)'];
			}
			?>
			</span>
		</div>
		<div id="x_jh">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - equalizacao selada'];
			}
			?>
			</span>
		</div>
		<div id="x_ji">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - equalizacao inundada'];
			}
			?>
			</span>
		</div>
		<div id="x_jj">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - boost gel'];
			}
			?>
			</span>
		</div>
		<div id="x_jk">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - boost selada'];
			}
			?>
			</span>
		</div>
		<div id="x_jl">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - boost inundada'];
			}
			?>
			</span>
		</div>
		<div id="x_jm">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de carregamento - flutuacao'];
			}
			?>
			</span>
		</div>
		<div id="x_jn">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de reconexao por baixa voltagem'];
			}
			?>
			</span>
		</div>
		<div id="x_jo">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao de desconexao por baixa tensao'];
			}
			?>
			</span>
		</div>
		<div id="x_jp">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['eficiencia de conversao de pico'];
			}
			?>
			</span>
		</div>
		<div id="x_jq">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['mppt precisao'];
			}
			?>
			</span>
		</div>
		<div id="x_jr">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['temperatura de trabalho'];
			}
			?>
			</span>
		</div>
		<div id="x_js">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['grau de Protecao'];
			}
			?>
			</span>
		</div>
		<div id="x_jt">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['terminais de potencia'];
			}
			?>
			</span>
		</div>
		<div id="x_ju">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['peso'];
			}
			?>
			</span>
		</div>
		<div id="x_jv">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['garantia'];
			}
			?>
			</span>
		</div>
		<div id="x_jw">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['interface de comunicacao'];
			}
			?>
			</span>
		</div>
		<div id="x_jx">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['modelo de bateria'];
			}
			?>
			</span>
		</div>
		<div id="x_jy">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM controlador_solar where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['link'];
			}
			?>
			</span>
		</div>
		<div id="Voltagem_nominal_do_sistema_mi_jq">
			<span>Voltagem nominal do sistema min</span>
		</div>
		<div id="Voltagem_nominal_do_sistema_ma_jr">
			<span>Voltagem nominal do sistema max</span>
		</div>
		<div id="Corrente_nominal_de_carga_js">
			<span>Corrente nominal de carga</span>
		</div>
		<div id="Corrente_nominal_de_descarga_jt">
			<span>Corrente nominal de descarga</span>
		</div>
		<div id="Tenso_entrada_de_bateria_ju">
			<span>Tensão entrada de bateria</span>
		</div>
		<div id="Max_tenso_de_circuito_aberto_d_jv">
			<span>Max. tensão de circuito aberto de painel</span>
		</div>
		<div id="Max_potencia_de_entrada_painel_jw">
			<span>Max. potencia de entrada painel(12V)(24V)</span>
		</div>
		<div id="Tenso_de_carregamento_-_equali_jx">
			<span>Tensão de carregamento - equalização selada</span>
		</div>
		<div id="Tenso_de_carregamento_-_equali_jy">
			<span>Tensão de carregamento - equalização inundada</span>
		</div>
		<div id="Tenso_de_carregamento_-__Boost_jz">
			<span>Tensão de carregamento -  Boost gel</span>
		</div>
		<div id="Tenso_de_carregamento_-__Boost_j">
			<span>Tensão de carregamento -  Boost selada</span>
		</div>
		<div id="Tenso_de_carregamento_-_Boost__j">
			<span>Tensão de carregamento - Boost inundada</span>
		</div>
		<div id="Tenso_de_carregamento_-_Flutua_j">
			<span>Tensão de carregamento - Flutuação</span>
		</div>
		<div id="Tenso_de_reconexo_por_baixa_vo_j">
			<span>Tensão de reconexão por baixa voltagem</span>
		</div>
		<div id="Tenso_de_desconexo_por_baixa_t_j">
			<span>Tensão de desconexão por baixa tensão</span>
		</div>
		<div id="Eficincia_de_converso_de_pico_j">
			<span>Eficiência de conversão de pico</span>
		</div>
		<div id="MPPT_preciso_j">
			<span>MPPT precisão</span>
		</div>
		<div id="Temperatura_de_trabalho_j">
			<span>Temperatura de trabalho</span>
		</div>
		<div id="Grau_de_proteo_j">
			<span>Grau de proteção</span>
		</div>
		<div id="Terminais_de_potencia_j">
			<span>Terminais de potencia</span>
		</div>
		<div id="Peso_ka">
			<span>Peso</span>
		</div>
		<div id="Garantia_kb">
			<span>Garantia</span>
		</div>
		<div id="Interface_de_comunicao_kc">
			<span>Interface de comunicação</span>
		</div>
		<div id="Modelo_de_bateria_kd">
			<span>Modelo de bateria</span>
		</div>
		<div id="Link_ke">
			<span>Link</span>
		</div>
	</div>
	<div id="MELHOR2">
		<span>
		<?php		

				$Voltagem_nominal_do_sistema_min = "voltagem nominal do sistema min";
				$Voltagem_nominal_do_sistema_max = "voltagem nominal do sistema max";
				$Corrente_nominal_de_carga = "Corrente nominal de carga";
				$Corrente_nominal_de_descarga = "corrente nominal de descarga";
				$Max_tensao_de_circuito_aberto_de_painel = "max. tensao de circuito aberto de painel";
				$Tensao_de_carregamento_equalizacao_selada = "tensao de carregamento - equalizacao selada";
				$Tensao_de_carregamento_equalizacao_inundada = "tensao de carregamento - equalizacao inundada";
				$Tensao_de_carregamento_Boost_gel = "tensao de carregamento - boost gel";
				$Tensao_de_carregamento_Boost_selada = "tensao de carregamento - boost selada";
				$Tensao_de_carregamento_Boost_inundada = "tensao de carregamento - boost inundada";
				$Tensao_de_carregamento_flutuacao = "tensao de carregamento - flutuacao";
				$Eficiencia_de_conversao_de_pico = "eficiencia de conversao de pico";
				$MPPT_precisao = "mppt precisao";
				$tensao_entrada_de_bateria = "tensao_entrada_de_bateria";
				$max_potencia_de_entrada_painel = "max. potencia de entrada painel (12V)(24V)";
				$temperatura_de_trabalho = "temperatura de trabalho";
				$grau_de_protecao = "grau de Protecao";
				$terminais_de_potencia = "terminais de potencia";
				$tensao_de_reconexao = "tensao de reconexao por baixa voltagem";
				$tensao_de_desconecxao_por_baixa_tensao = "tensao de desconexao por baixa tensao";
				$modelo_de_bateria = "modelo de bateria";

				$score1 = 0;
				$score2 = 0;

				$modelo_de_bateria1 = mysqli_query($link, "SELECT '$modelo_de_bateria' FROM controlador_solar where nome = '$title'");
				$modelo_de_bateria2 = mysqli_query($link, "SELECT '$modelo_de_bateria' FROM controlador_solar where nome = '$title2'");
				$compara_modelo_de_bateria1 = mysqli_fetch_row($modelo_de_bateria1);
				$compara_modelo_de_bateria2 = mysqli_fetch_row($modelo_de_bateria2);

				$score_modelo_de_bateria1 = 0;
				$score_modelo_de_bateria2 = 0;
				
				
				if($compara_modelo_de_bateria1 == "selada"){
					$score_modelo_de_bateria1 += 1;
				}
				if($compara_modelo_de_bateria1 == "inundada"){
					$score_modelo_de_bateria1 += 1;
				}
				if($compara_modelo_de_bateria1 == "gel,inundada,litio"){
					$score_modelo_de_bateria1 += 3;
				}
				if($compara_modelo_de_bateria1 == "selada,gel,inundada"){
					$score_modelo_de_bateria1 += 3;
				}
				if($compara_modelo_de_bateria1 == "selada,gel,inundada,litio"){
					$score_modelo_de_bateria1 += 4;
				}
				if($compara_modelo_de_bateria1 == "selada,gel,inundada,amg"){
					$score_modelo_de_bateria1 += 4;
				}
				if($compara_modelo_de_bateria1 == "gel,inundada,litio,amg"){
					$score_modelo_de_bateria1 += 4;
				}
				// parte 2
				if($compara_modelo_de_bateria2 == "selada"){
					$score_modelo_de_bateria2 += 1;
				}
				if($compara_modelo_de_bateria2 == "inundada"){
					$score_modelo_de_bateria2 += 1;
				}
				if($compara_modelo_de_bateria2 == "gel,inundada,litio"){
					$score_modelo_de_bateria2 += 3;
				}
				if($compara_modelo_de_bateria2 == "selada,gel,inundada"){
					$score_modelo_de_bateria2 += 3;
				}
				if($compara_modelo_de_bateria2 == "selada,gel,inundada,litio"){
					$score_modelo_de_bateria2 += 4;
				}
				if($compara_modelo_de_bateria2 == "selada,gel,inundada,amg"){
					$score_modelo_de_bateria2 += 4;
				}
				if($compara_modelo_de_bateria2 == "gel,inundada,litio,amg"){
					$score_modelo_de_bateria2 += 4;
				}
				if($score_modelo_de_bateria1 > $score_modelo_de_bateria2){
					$score1 += 1;
				}
				elseif($score_modelo_de_bateria1 < $score_modelo_de_bateria2){
					$score2 += 1;
				}
			

				$tensao_de_desconecxao_por_baixa_tensao1 = mysqli_query($link, "SELECT '$tensao_de_desconecxao_por_baixa_tensao' FROM controlador_solar where nome = '$title'");
				$tensao_de_desconecxao_por_baixa_tensao2 = mysqli_query($link, "SELECT '$tensao_de_desconecxao_por_baixa_tensao' FROM controlador_solar where nome = '$title2'");
				$compara_tensao_de_desconecxao_por_baixa_tensao1 = mysqli_fetch_row($tensao_de_desconecxao_por_baixa_tensao1);
				$compara_tensao_de_desconecxao_por_baixa_tensao2 = mysqli_fetch_row($tensao_de_desconecxao_por_baixa_tensao2);
				
				if($compara_tensao_de_desconecxao_por_baixa_tensao1 < $compara_tensao_de_desconecxao_por_baixa_tensao2){
						$score1 += 1;
				}
				elseif($compara_tensao_de_desconecxao_por_baixa_tensao1 > $compara_tensao_de_desconecxao_por_baixa_tensao2){
						$score2 += 1;
				}

				$tensao_de_reconexao1 = mysqli_query($link, "SELECT '$tensao_de_reconexao' FROM controlador_solar where nome = '$title'");
				$tensao_de_reconexao2 = mysqli_query($link, "SELECT '$tensao_de_reconexao' FROM controlador_solar where nome = '$title2'");
				$compara_tensao_de_reconexao1 = mysqli_fetch_row($tensao_de_reconexao1);
				$compara_tensao_de_reconexao2 = mysqli_fetch_row($tensao_de_reconexao2);
				
				if($compara_tensao_de_reconexao1 < $compara_tensao_de_reconexao2){
						$score1 += 1;
				}
				elseif($compara_tensao_de_reconexao1 > $compara_tensao_de_reconexao2){
						$score2 += 1;
				}

				$terminais_de_potencia1 = mysqli_query($link, "SELECT '$terminais_de_potencia' FROM controlador_solar where nome = '$title'");
				$terminais_de_potencia2 = mysqli_query($link, "SELECT '$terminais_de_potencia' FROM controlador_solar where nome = '$title2'");
				$compara_terminais_de_potencia1 = mysqli_fetch_row($terminais_de_potencia1);
				$compara_terminais_de_potencia2 = mysqli_fetch_row($terminais_de_potencia2);

				$score_terminais_de_potencia1 = 0;
				$score_terminais_de_potencia2 = 0;

				
			
					if($compara_terminais_de_potencia1 == "3AWG(25mm2)"){
						$score_terminais_de_potencia1 += 6;
					}
					if($compara_terminais_de_potencia1 == "4AWG(25mm2)"){
						$score_terminais_de_potencia1 += 5;
					}
					if($compara_terminais_de_potencia1 == "6AWG(16mm2)"){
						$score_terminais_de_potencia1 += 4;
					}
					if($compara_terminais_de_potencia1 == "8AWG(10mm2)"){
						$score_terminais_de_potencia1 += 3;
					}
					if($compara_terminais_de_potencia1 == "10AWG(6MM2)"){
						$score_terminais_de_potencia1 += 2;
					}
					if($compara_terminais_de_potencia1 == "12AWG(4mm2)"){
						$score_terminais_de_potencia1 += 1;
					}
					// parte 2
					if($compara_terminais_de_potencia2 == "3AWG(25mm2)"){
						$score_terminais_de_potencia2 += 6;
					}
					if($compara_terminais_de_potencia2 == "4AWG(25mm2)"){
						$score_terminais_de_potencia2 += 5;
					}
					if($compara_terminais_de_potencia2 == "6AWG(16mm2)"){
						$score_terminais_de_potencia2 += 4;
					}
					if($compara_terminais_de_potencia2 == "8AWG(10mm2)"){
						$score_terminais_de_potencia2 += 3;
					}
					if($compara_terminais_de_potencia2 == "10AWG(6MM2)"){
						$score_terminais_de_potencia2 += 2;
					}
					if($compara_terminais_de_potencia2 == "12AWG(4mm2)"){
						$score_terminais_de_potencia2 += 1;
					}
					if($compara_terminais_de_potencia1 > $compara_terminais_de_potencia2){
						$score1 += 1;
					}
					if($compara_terminais_de_potencia1 < $compara_terminais_de_potencia2){
						$score2 += 1;
					}
				

				$grau_de_protecao1 = mysqli_query($link, "SELECT '$grau_de_protecao' FROM controlador_solar where nome = '$title'");
				$grau_de_protecao2 = mysqli_query($link, "SELECT '$grau_de_protecao' FROM controlador_solar where nome = '$title2'");
				$compara_grau_de_protecao1 = mysqli_fetch_row($grau_de_protecao1);
				$compara_grau_de_protecao2 = mysqli_fetch_row($grau_de_protecao2);

				$score_grau_de_protecao1 = 0;
				$score_grau_de_protecao2 = 0;

				
					if($compara_grau_de_protecao1 == "IP20"){
						$score_grau_de_protecao1 += 1;
					}
					if($compara_grau_de_protecao1 == "IP30"){
						$score_grau_de_protecao1 += 2;
					}
					if($compara_grau_de_protecao1 == "IP32"){
						$score_grau_de_protecao1 += 3;
					}
					if($compara_grau_de_protecao1 == "IP43"){
						$score_grau_de_protecao1 += 4;
					}
					if($compara_grau_de_protecao1 == "IP54"){
						$score_grau_de_protecao1 += 5;
					}
					if($compara_grau_de_protecao1 == "IP65"){
						$score_grau_de_protecao1 += 6;
					}
					// parte 2
					if($compara_grau_de_protecao2 == "IP20"){
						$score_grau_de_protecao2 += 1;
					}
					if($compara_grau_de_protecao2 == "IP30"){
						$score_grau_de_protecao2 += 2;
					}
					if($compara_grau_de_protecao2 == "IP32"){
						$score_grau_de_protecao2 += 3;
					}
					if($compara_grau_de_protecao2 == "IP43"){
						$score_grau_de_protecao2 += 4;
					}
					if($compara_grau_de_protecao2 == "IP54"){
						$score_grau_de_protecao2 += 5;
					}
					if($compara_grau_de_protecao2 == "IP65"){
						$score_grau_de_protecao2 += 6;
					}
					if($compara_grau_de_protecao1 > $compara_grau_de_protecao2){
						$score1 += 1;
					}
					elseif($compara_grau_de_protecao1 < $compara_grau_de_protecao2){
						$score2 += 1;
					}
				






				$temperatura_de_trabalho1 = mysqli_query($link, "SELECT '$temperatura_de_trabalho' FROM controlador_solar where nome = '$title'");
				$temperatura_de_trabalho2 = mysqli_query($link, "SELECT '$temperatura_de_trabalho' FROM controlador_solar where nome = '$title2'");
				$compara_temperatura_de_trabalho1 = mysqli_fetch_row($temperatura_de_trabalho1);
				$compara_temperatura_de_trabalho2 = mysqli_fetch_row($temperatura_de_trabalho2);

				$score_temperatura_de_trabalho1 = 0;
				$score_temperatura_de_trabalho2 = 0;
					
				if($compara_temperatura_de_trabalho1 == "-35°C ~ +45°C"){
						$score_temperatura_de_trabalho1 += 1;					
					}
				if($compara_temperatura_de_trabalho1 == "-40°C ~ +60°C"){
						$score_temperatura_de_trabalho1 += 2;					
					}
				if($compara_temperatura_de_trabalho1 == "-25°C ~ +45°C"){
						$score_temperatura_de_trabalho1 += 2;					
					}
				if($compara_temperatura_de_trabalho1 == "-25°C ~ +55°C"){
						$score_temperatura_de_trabalho1 += 3;					
					}
				if($compara_temperatura_de_trabalho1 == "-30°C ~ +60°C"){
						$score_temperatura_de_trabalho1 += 3;					
					}
				if($compara_temperatura_de_trabalho1 == "-20°C ~ +55°C"){
						$score_temperatura_de_trabalho1 += 4;					
					}
				if($compara_temperatura_de_trabalho1 == "-25°C ~ +60°C"){
						$score_temperatura_de_trabalho1 += 4;					
					}
				if($compara_temperatura_de_trabalho1 == "-10°C ~ +55°C"){
						$score_temperatura_de_trabalho1 += 5;					
					}
				// parte 2
				if($compara_temperatura_de_trabalho2 == "-35°C ~ +45°C"){
						$score_temperatura_de_trabalho2 += 1;					
				}
				if($compara_temperatura_de_trabalho2 == "-40°C ~ +60°C"){
						$score_temperatura_de_trabalho2 += 2;					
					}
				if($compara_temperatura_de_trabalho2 == "-25°C ~ +45°C"){
						$score_temperatura_de_trabalho2 += 2;					
					}
				if($compara_temperatura_de_trabalho2 == "-25°C ~ +55°C"){
						$score_temperatura_de_trabalho2 += 3;					
					}
				if($compara_temperatura_de_trabalho2 == "-30°C ~ +60°C"){
						$score_temperatura_de_trabalho2 += 3;					
					}
				if($compara_temperatura_de_trabalho2 == "-20°C ~ +55°C"){
						$score_temperatura_de_trabalho2 += 4;					
					}
				if($compara_temperatura_de_trabalho2 == "-25°C ~ +60°C"){
						$score_temperatura_de_trabalho2 += 4;					
					}
				if($compara_temperatura_de_trabalho2 == "-10°C ~ +55°C"){
						$score_temperatura_de_trabalho2 += 5;					
					}
				if($score_temperatura_de_trabalho1 > $score_temperatura_de_trabalho2){
					$score1 += 1;
				}
				elseif($score_temperatura_de_trabalho1 > $score_temperatura_de_trabalho2){
					$score2 += 1;
				}

				$max_potencia_de_entrada_painel1 = mysqli_query($link, "SELECT '$max_potencia_de_entrada_painel' FROM controlador_solar where nome = '$title'");
				$max_potencia_de_entrada_painel2 = mysqli_query($link, "SELECT '$max_potencia_de_entrada_painel' FROM controlador_solar where nome = '$title2'");
				$compara_max_potencia_de_entrada_painel1 = mysqli_fetch_row($max_potencia_de_entrada_painel1);
				$compara_max_potencia_de_entrada_painel2 = mysqli_fetch_row($max_potencia_de_entrada_painel2);

				$score_max_potencia_de_entrada_painel1 = 0;
				$score_max_potencia_de_entrada_painel2 = 0;

				
					if($compara_max_potencia_de_entrada_painel1 == "145W/290W"){
						$score_max_potencia_de_entrada_painel1 += 1;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "220W/440W"){
						$score_max_potencia_de_entrada_painel1 += 2;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "240W/480W"){
						$score_max_potencia_de_entrada_painel1 += 3;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "260W/520W"){
						$score_max_potencia_de_entrada_painel1 += 4;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "290W/580W"){
						$score_max_potencia_de_entrada_painel1 += 5;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "300W/600W"){
						$score_max_potencia_de_entrada_painel1 += 6;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "360W/720W"){
						$score_max_potencia_de_entrada_painel1 += 7;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "390W/780W"){
						$score_max_potencia_de_entrada_painel1 += 8;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "400W/800W"){
						$score_max_potencia_de_entrada_painel1 += 9;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "450W/900W"){
						$score_max_potencia_de_entrada_painel1 += 10;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "520W/1020W"){
						$score_max_potencia_de_entrada_painel1 += 11;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "550W/1100W"){
						$score_max_potencia_de_entrada_painel1 += 12;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "560W/1120W"){
						$score_max_potencia_de_entrada_painel1 += 13;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "600W/1200W"){
						$score_max_potencia_de_entrada_painel1 += 14;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "750W/1500W"){
						$score_max_potencia_de_entrada_painel1 += 15;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "800W/1600W"){
						$score_max_potencia_de_entrada_painel1 += 16;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "1000W/2000W"){
						$score_max_potencia_de_entrada_painel1 += 17;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "1300W/2600W"){
						$score_max_potencia_de_entrada_painel1 += 18;					
					}
					// parte 2
					if($compara_max_potencia_de_entrada_painel2 == "145W/290W"){
						$score_max_potencia_de_entrada_painel2 += 1;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "220W/440W"){
						$score_max_potencia_de_entrada_painel2 += 2;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "240W/480W"){
						$score_max_potencia_de_entrada_painel2 += 3;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "260W/520W"){
						$score_max_potencia_de_entrada_painel2 += 4;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "290W/580W"){
						$score_max_potencia_de_entrada_painel2 += 5;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "300W/600W"){
						$score_max_potencia_de_entrada_painel2 += 6;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "360W/720W"){
						$score_max_potencia_de_entrada_painel2 += 7;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "390W/780W"){
						$score_max_potencia_de_entrada_painel2 += 8;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "400W/800W"){
						$score_max_potencia_de_entrada_painel2 += 9;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "450W/900W"){
						$score_max_potencia_de_entrada_painel2 += 10;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "520W/1020W"){
						$score_max_potencia_de_entrada_painel2 += 11;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "550W/1100W"){
						$score_max_potencia_de_entrada_painel2 += 12;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "560W/1120W"){
						$score_max_potencia_de_entrada_painel2 += 13;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "600W/1200W"){
						$score_max_potencia_de_entrada_painel2 += 14;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "750W/1500W"){
						$score_max_potencia_de_entrada_painel2 += 15;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "800W/1600W"){
						$score_max_potencia_de_entrada_painel2 += 16;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "1000W/2000W"){
						$score_max_potencia_de_entrada_painel2 += 17;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "1300W/2600W"){
						$score_max_potencia_de_entrada_painel2 += 18;					
					}
					if($score_max_potencia_de_entrada_painel1 > $score_max_potencia_de_entrada_painel2){
						$score1 += 1;
					}
					elseif($score_max_potencia_de_entrada_painel1 < $score_max_potencia_de_entrada_painel2){
						$score2 += 1;
					}
					

				$tensao_entrada_de_bateria1 = mysqli_query($link, "SELECT '$tensao_entrada_de_bateria' FROM controlador_solar where nome = '$title'");
				$tensao_entrada_de_bateria2 = mysqli_query($link, "SELECT '$tensao_entrada_de_bateria' FROM controlador_solar where nome = '$title2'");
				$compara_tensao_entrada_de_bateria1 = mysqli_fetch_row($tensao_entrada_de_bateria1);
				$compara_tensao_entrada_de_bateria2 = mysqli_fetch_row($tensao_entrada_de_bateria2);

				$score_tensao_entrada_de_bateria1 = 0;
				$score_tensao_entrada_de_bateria2 = 0;

				if(($compara_tensao_entrada_de_bateria1 != "NULL") && ($compara_tensao_entrada_de_bateria2 != "NULL")){
					if($compara_tensao_entrada_de_bateria1 == "10 ~ 29V"){
						$score_tensao_entrada_de_bateria1 += 1;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 32V"){
						$score_tensao_entrada_de_bateria1 += 2;
					}
					if($compara_tensao_entrada_de_bateria1 == "8 ~ 32V"){
						$score_tensao_entrada_de_bateria1 += 3;
					}
					if($compara_tensao_entrada_de_bateria1 == "10 ~ 35V"){
						$score_tensao_entrada_de_bateria1 += 4;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 35V"){
						$score_tensao_entrada_de_bateria1 += 5;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 60V"){
						$score_tensao_entrada_de_bateria1 += 6;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 64V"){
						$score_tensao_entrada_de_bateria1 += 7;
					}
					if($compara_tensao_entrada_de_bateria1 == "17 ~ 75V"){
						$score_tensao_entrada_de_bateria1 += 8;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 70V"){
						$score_tensao_entrada_de_bateria1 += 9;
					}
					if($compara_tensao_entrada_de_bateria1 == "17 ~ 100V"){
						$score_tensao_entrada_de_bateria1 += 10;
					}
					if($compara_tensao_entrada_de_bateria1 == "15 ~ 100V"){
						$score_tensao_entrada_de_bateria1 += 11;
					}
					if($compara_tensao_entrada_de_bateria1 == "17 ~ 120V"){
						$score_tensao_entrada_de_bateria1 += 12;
					}
					// parte 2
					if($compara_tensao_entrada_de_bateria2 == "10 ~ 29V"){
						$score_tensao_entrada_de_bateria2 += 1;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 32V"){
						$score_tensao_entrada_de_bateria2 += 2;
					}
					if($compara_tensao_entrada_de_bateria2 == "8 ~ 32V"){
						$score_tensao_entrada_de_bateria2 += 3;
					}
					if($compara_tensao_entrada_de_bateria2 == "10 ~ 35V"){
						$score_tensao_entrada_de_bateria2 += 4;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 35V"){
						$score_tensao_entrada_de_bateria2 += 5;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 60V"){
						$score_tensao_entrada_de_bateria2 += 6;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 64V"){
						$score_tensao_entrada_de_bateria2 += 7;
					}
					if($compara_tensao_entrada_de_bateria2 == "17 ~ 75V"){
						$score_tensao_entrada_de_bateria2 += 8;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 70V"){
						$score_tensao_entrada_de_bateria2 += 9;
					}
					if($compara_tensao_entrada_de_bateria2 == "17 ~ 100V"){
						$score_tensao_entrada_de_bateria2 += 10;
					}
					if($compara_tensao_entrada_de_bateria2 == "15 ~ 100V"){
						$score_tensao_entrada_de_bateria2 += 11;
					}
					if($compara_tensao_entrada_de_bateria2 == "17 ~ 120V"){
						$score_tensao_entrada_de_bateria2 += 12;
					}
					if($score_tensao_entrada_de_bateria1 > $score_tensao_entrada_de_bateria2){
						$score1 += 1;
					}
					elseif($score_tensao_entrada_de_bateria1 < $score_tensao_entrada_de_bateria2){
						$score2 += 1;
					}
				}				
		

				$garantia1 = mysqli_query($link, "SELECT garantia FROM controlador_solar where nome = '$title'");
				$garantia2 = mysqli_query($link, "SELECT garantia FROM controlador_solar where nome = '$title2'");
				$compara_garantia1 = mysqli_fetch_row($garantia1);
				$compara_garantia2 = mysqli_fetch_row($garantia2);
				
				if($compara_garantia1 > $compara_garantia2){
						$score1 += 1;
				}
				elseif($compara_garantia1 < $compara_garantia2){
						$score2 += 1;
				}

				$peso1 = mysqli_query($link, "SELECT peso FROM controlador_solar where nome = '$title'");
				$peso2 = mysqli_query($link, "SELECT peso FROM controlador_solar where nome = '$title2'");
				$compara_peso1 = mysqli_fetch_row($peso1);
				$compara_peso2 = mysqli_fetch_row($peso2);
				
				if($compara_peso1 < $compara_peso2){
						$score1 -= 1;
				}
				elseif($compara_peso1 > $compara_peso2){
						$score2 -= 1;
				}
				
				$MPPT_precisao1 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM controlador_solar where nome = '$title'");
				$MPPT_precisao2 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM controlador_solar where nome = '$title2'");
				$compara_MPPT_precisao1 = mysqli_fetch_row($MPPT_precisao1);
				$compara_MPPT_precisao2 = mysqli_fetch_row($MPPT_precisao2);
				
				if($compara_MPPT_precisao1 > $compara_MPPT_precisao2){
						$score1 += 1;
				}
				elseif($compara_MPPT_precisao1 < $compara_MPPT_precisao2){
						$score2 += 1;
				}
				
				$Eficiencia_de_conversao_de_pico1 = mysqli_query($link, "SELECT '$Eficiencia_de_conversao_de_pico' FROM controlador_solar where nome = '$title'");
				$Eficiencia_de_conversao_de_pico2 = mysqli_query($link, "SELECT '$Eficiencia_de_conversao_de_pico' FROM controlador_solar where nome = '$title2'");
				$compara_Eficiencia_de_conversao_de_pico1 = mysqli_fetch_row($Eficiencia_de_conversao_de_pico1);
				$compara_Eficiencia_de_conversao_de_pico2 = mysqli_fetch_row($Eficiencia_de_conversao_de_pico2);
				
				if($compara_Eficiencia_de_conversao_de_pico1 > $compara_Eficiencia_de_conversao_de_pico2){
						$score1 += 1;
				}
				elseif($compara_Eficiencia_de_conversao_de_pico1 < $compara_Eficiencia_de_conversao_de_pico2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_flutuacao1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_flutuacao' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_flutuacao2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_flutuacao' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_flutuacao1 = mysqli_fetch_row($Tensao_de_carregamento_flutuacao1);
				$compara_Tensao_de_carregamento_flutuacao2 = mysqli_fetch_row($Tensao_de_carregamento_flutuacao2);
				
				if($compara_Tensao_de_carregamento_flutuacao1 > $compara_Tensao_de_carregamento_flutuacao2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_flutuacao1 < $compara_Tensao_de_carregamento_flutuacao2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_Boost_inundada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_inundada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_Boost_inundada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_inundada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_Boost_inundada1 = mysqli_fetch_row($Tensao_de_carregamento_Boost_inundada1);
				$compara_Tensao_de_carregamento_Boost_inundada2 = mysqli_fetch_row($Tensao_de_carregamento_Boost_inundada2);
				
				if($compara_Tensao_de_carregamento_Boost_inundada1 > $compara_Tensao_de_carregamento_Boost_inundada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_Boost_inundada1 < $compara_Tensao_de_carregamento_Boost_inundada2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_Boost_selada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_selada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_Boost_selada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_selada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_Boost_selada1 = mysqli_fetch_row($Tensao_de_carregamento_Boost_selada1);
				$compara_Tensao_de_carregamento_Boost_selada2 = mysqli_fetch_row($Tensao_de_carregamento_Boost_selada2);
				
				if($compara_Tensao_de_carregamento_Boost_selada1 > $compara_Tensao_de_carregamento_Boost_selada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_Boost_selada1 < $compara_Tensao_de_carregamento_Boost_selada2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_Boost_gel1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_gel' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_Boost_gel2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_gel' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_Boost_gel1 = mysqli_fetch_row($Tensao_de_carregamento_Boost_gel1);
				$compara_Tensao_de_carregamento_Boost_gel2 = mysqli_fetch_row($Tensao_de_carregamento_Boost_gel2);
				
				if($compara_Tensao_de_carregamento_Boost_gel1 > $compara_Tensao_de_carregamento_Boost_gel2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_Boost_gel1 < $compara_Tensao_de_carregamento_Boost_gel2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_equalizacao_inundada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_inundada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_equalizacao_inundada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_inundada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_equalizacao_inundada1 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_inundada1);
				$compara_Tensao_de_carregamento_equalizacao_inundada2 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_inundada2);
				
				if($compara_Tensao_de_carregamento_equalizacao_inundada1 > $compara_Tensao_de_carregamento_equalizacao_inundada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_equalizacao_inundada1 < $compara_Tensao_de_carregamento_equalizacao_inundada2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_equalizacao_selada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_selada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_equalizacao_selada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_selada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_equalizacao_selada1 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_selada1);
				$compara_Tensao_de_carregamento_equalizacao_selada2 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_selada2);
				
				if($compara_Tensao_de_carregamento_equalizacao_selada1 > $compara_Tensao_de_carregamento_equalizacao_selada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_equalizacao_selada1 < $compara_Tensao_de_carregamento_equalizacao_selada2){
						$score2 += 1;
				}
				
				$Max_tensao_de_circuito_aberto_de_painel1 = mysqli_query($link, "SELECT '$Max_tensao_de_circuito_aberto_de_painel' FROM controlador_solar where nome = '$title'");
				$Max_tensao_de_circuito_aberto_de_painel2 = mysqli_query($link, "SELECT '$Max_tensao_de_circuito_aberto_de_painel' FROM controlador_solar where nome = '$title2'");
				$compara_Max_tensao_de_circuito_aberto_de_painel1 = mysqli_fetch_row($Max_tensao_de_circuito_aberto_de_painel1);
				$compara_Max_tensao_de_circuito_aberto_de_painel2 = mysqli_fetch_row($Max_tensao_de_circuito_aberto_de_painel2);
				
				if($compara_Max_tensao_de_circuito_aberto_de_painel1 > $compara_Max_tensao_de_circuito_aberto_de_painel2){
						$score1 += 1;
				}
				elseif($compara_Max_tensao_de_circuito_aberto_de_painel1 < $compara_Max_tensao_de_circuito_aberto_de_painel2){
						$score2 += 1;
				}

				$Corrente_nominal_de_descarga1 = mysqli_query($link, "SELECT '$Corrente_nominal_de_descarga' FROM controlador_solar where nome = '$title'");
				$Corrente_nominal_de_descarga2 = mysqli_query($link, "SELECT '$Corrente_nominal_de_descarga' FROM controlador_solar where nome = '$title2'");
				$compara_Corrente_nominal_de_descarga1 = mysqli_fetch_row($Corrente_nominal_de_descarga1);
				$compara_Corrente_nominal_de_descarga2 = mysqli_fetch_row($Corrente_nominal_de_descarga2);
				
				if($compara_Corrente_nominal_de_descarga1 < $compara_Corrente_nominal_de_descarga2){
						$score1 += 1;
				}
				elseif($compara_Corrente_nominal_de_descarga1 > $compara_Corrente_nominal_de_descarga2){
						$score2 += 1;
				}

				$Corrente_nominal_de_carga1 = mysqli_query($link, "SELECT '$Corrente_nominal_de_carga' FROM controlador_solar where nome = '$title'");
				$Corrente_nominal_de_carga2 = mysqli_query($link, "SELECT '$Corrente_nominal_de_carga' FROM controlador_solar where nome = '$title2'");
				$compara_Corrente_nominal_de_carga1 = mysqli_fetch_row($Corrente_nominal_de_carga1);
				$compara_Corrente_nominal_de_carga2 = mysqli_fetch_row($Corrente_nominal_de_carga2);
				
				if($compara_Corrente_nominal_de_carga1 > $compara_Corrente_nominal_de_carga2){
						$score1 += 1;
				}
				elseif($compara_Corrente_nominal_de_carga1 < $compara_Corrente_nominal_de_carga2){
						$score2 += 1;
				}

				

				$Voltagem_nominal_do_sistema_max1 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_max' FROM controlador_solar where nome = '$title'");
				$Voltagem_nominal_do_sistema_max2 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_max' FROM controlador_solar where nome = '$title2'");
				$compara_Voltagem_nominal_do_sistema_max1 = mysqli_fetch_row($Voltagem_nominal_do_sistema_max1);
				$compara_Voltagem_nominal_do_sistema_max2 = mysqli_fetch_row($Voltagem_nominal_do_sistema_max2);
				
				if($compara_Voltagem_nominal_do_sistema_max1 > $compara_Voltagem_nominal_do_sistema_max2){
						$score1 += 1;
				}
				elseif($compara_Voltagem_nominal_do_sistema_max1 < $compara_Voltagem_nominal_do_sistema_max2){
						$score2 += 1;
				}

				$Voltagem_nominal_do_sistema_min1 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_min' FROM controlador_solar where nome = '$title'");
				$Voltagem_nominal_do_sistema_min2 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_min' FROM controlador_solar where nome = '$title2'");
				$compara_Voltagem_nominal_do_sistema_min1 = mysqli_fetch_row($Voltagem_nominal_do_sistema_min1);
				$compara_Voltagem_nominal_do_sistema_min2 = mysqli_fetch_row($Voltagem_nominal_do_sistema_min2);
				
				if($compara_Voltagem_nominal_do_sistema_min1 < $compara_Voltagem_nominal_do_sistema_min2){
						$score1 += 1;
				}
				elseif($compara_Voltagem_nominal_do_sistema_min1 > $compara_Voltagem_nominal_do_sistema_min2){
						$score2 += 1;
				}
				if($score1 < $score2){
					echo "Melhor Equipamento";
				}
				elseif($score1 == $score2){
					echo "Equipamentos Equivalentes";
				}
				?>
		</span>
	</div>
	<div id="MELHOR1">
		<span>
			<?php		

				$Voltagem_nominal_do_sistema_min = "voltagem nominal do sistema min";
				$Voltagem_nominal_do_sistema_max = "voltagem nominal do sistema max";
				$Corrente_nominal_de_carga = "Corrente nominal de carga";
				$Corrente_nominal_de_descarga = "corrente nominal de descarga";
				$Max_tensao_de_circuito_aberto_de_painel = "max. tensao de circuito aberto de painel";
				$Tensao_de_carregamento_equalizacao_selada = "tensao de carregamento - equalizacao selada";
				$Tensao_de_carregamento_equalizacao_inundada = "tensao de carregamento - equalizacao inundada";
				$Tensao_de_carregamento_Boost_gel = "tensao de carregamento - boost gel";
				$Tensao_de_carregamento_Boost_selada = "tensao de carregamento - boost selada";
				$Tensao_de_carregamento_Boost_inundada = "tensao de carregamento - boost inundada";
				$Tensao_de_carregamento_flutuacao = "tensao de carregamento - flutuacao";
				$Eficiencia_de_conversao_de_pico = "eficiencia de conversao de pico";
				$MPPT_precisao = "mppt precisao";	
				$tensao_entrada_de_bateria = "tensao_entrada_de_bateria";
				$max_potencia_de_entrada_painel = "max. potencia de entrada painel (12V)(24V)";
				$temperatura_de_trabalho = "temperatura de trabalho";
				$grau_de_protecao = "grau de Protecao";
				$terminais_de_potencia = "terminais de potencia";
				$tensao_de_reconexao = "tensao de reconexao por baixa voltagem";
				$tensao_de_desconecxao_por_baixa_tensao = "tensao de desconexao por baixa tensao";
				$modelo_de_bateria = "modelo de bateria";

				$score1 = 0;
				$score2 = 0;

				$modelo_de_bateria1 = mysqli_query($link, "SELECT '$modelo_de_bateria' FROM controlador_solar where nome = '$title'");
				$modelo_de_bateria2 = mysqli_query($link, "SELECT '$modelo_de_bateria' FROM controlador_solar where nome = '$title2'");
				$compara_modelo_de_bateria1 = mysqli_fetch_row($modelo_de_bateria1);
				$compara_modelo_de_bateria2 = mysqli_fetch_row($modelo_de_bateria2);

				$score_modelo_de_bateria1 = 0;
				$score_modelo_de_bateria2 = 0;
				
				
				if($compara_modelo_de_bateria1 == "selada"){
					$score_modelo_de_bateria1 += 1;
				}
				if($compara_modelo_de_bateria1 == "inundada"){
					$score_modelo_de_bateria1 += 1;
				}
				if($compara_modelo_de_bateria1 == "gel,inundada,litio"){
					$score_modelo_de_bateria1 += 3;
				}
				if($compara_modelo_de_bateria1 == "selada,gel,inundada"){
					$score_modelo_de_bateria1 += 3;
				}
				if($compara_modelo_de_bateria1 == "selada,gel,inundada,litio"){
					$score_modelo_de_bateria1 += 4;
				}
				if($compara_modelo_de_bateria1 == "selada,gel,inundada,amg"){
					$score_modelo_de_bateria1 += 4;
				}
				if($compara_modelo_de_bateria1 == "gel,inundada,litio,amg"){
					$score_modelo_de_bateria1 += 4;
				}
				// parte 2
				if($compara_modelo_de_bateria2 == "selada"){
					$score_modelo_de_bateria2 += 1;
				}
				if($compara_modelo_de_bateria2 == "inundada"){
					$score_modelo_de_bateria2 += 1;
				}
				if($compara_modelo_de_bateria2 == "gel,inundada,litio"){
					$score_modelo_de_bateria2 += 3;
				}
				if($compara_modelo_de_bateria2 == "selada,gel,inundada"){
					$score_modelo_de_bateria2 += 3;
				}
				if($compara_modelo_de_bateria2 == "selada,gel,inundada,litio"){
					$score_modelo_de_bateria2 += 4;
				}
				if($compara_modelo_de_bateria2 == "selada,gel,inundada,amg"){
					$score_modelo_de_bateria2 += 4;
				}
				if($compara_modelo_de_bateria2 == "gel,inundada,litio,amg"){
					$score_modelo_de_bateria2 += 4;
				}
				if($score_modelo_de_bateria1 > $score_modelo_de_bateria2){
					$score1 += 1;
				}
				elseif($score_modelo_de_bateria1 < $score_modelo_de_bateria2){
					$score2 += 1;
				}
			

				$tensao_de_desconecxao_por_baixa_tensao1 = mysqli_query($link, "SELECT '$tensao_de_desconecxao_por_baixa_tensao' FROM controlador_solar where nome = '$title'");
				$tensao_de_desconecxao_por_baixa_tensao2 = mysqli_query($link, "SELECT '$tensao_de_desconecxao_por_baixa_tensao' FROM controlador_solar where nome = '$title2'");
				$compara_tensao_de_desconecxao_por_baixa_tensao1 = mysqli_fetch_row($tensao_de_desconecxao_por_baixa_tensao1);
				$compara_tensao_de_desconecxao_por_baixa_tensao2 = mysqli_fetch_row($tensao_de_desconecxao_por_baixa_tensao2);
				
				if($compara_tensao_de_desconecxao_por_baixa_tensao1 < $compara_tensao_de_desconecxao_por_baixa_tensao2){
						$score1 += 1;
				}
				elseif($compara_tensao_de_desconecxao_por_baixa_tensao1 > $compara_tensao_de_desconecxao_por_baixa_tensao2){
						$score2 += 1;
				}

				$tensao_de_reconexao1 = mysqli_query($link, "SELECT '$tensao_de_reconexao' FROM controlador_solar where nome = '$title'");
				$tensao_de_reconexao2 = mysqli_query($link, "SELECT '$tensao_de_reconexao' FROM controlador_solar where nome = '$title2'");
				$compara_tensao_de_reconexao1 = mysqli_fetch_row($tensao_de_reconexao1);
				$compara_tensao_de_reconexao2 = mysqli_fetch_row($tensao_de_reconexao2);
				
				if($compara_tensao_de_reconexao1 < $compara_tensao_de_reconexao2){
						$score1 += 1;
				}
				elseif($compara_tensao_de_reconexao1 > $compara_tensao_de_reconexao2){
						$score2 += 1;
				}

				$terminais_de_potencia1 = mysqli_query($link, "SELECT '$terminais_de_potencia' FROM controlador_solar where nome = '$title'");
				$terminais_de_potencia2 = mysqli_query($link, "SELECT '$terminais_de_potencia' FROM controlador_solar where nome = '$title2'");
				$compara_terminais_de_potencia1 = mysqli_fetch_row($terminais_de_potencia1);
				$compara_terminais_de_potencia2 = mysqli_fetch_row($terminais_de_potencia2);

				$score_terminais_de_potencia1 = 0;
				$score_terminais_de_potencia2 = 0;

				
				
					if($compara_terminais_de_potencia1 == "3AWG(25mm2)"){
						$score_terminais_de_potencia1 += 6;
					}
					if($compara_terminais_de_potencia1 == "4AWG(25mm2)"){
						$score_terminais_de_potencia1 += 5;
					}
					if($compara_terminais_de_potencia1 == "6AWG(16mm2)"){
						$score_terminais_de_potencia1 += 4;
					}
					if($compara_terminais_de_potencia1 == "8AWG(10mm2)"){
						$score_terminais_de_potencia1 += 3;
					}
					if($compara_terminais_de_potencia1 == "10AWG(6MM2)"){
						$score_terminais_de_potencia1 += 2;
					}
					if($compara_terminais_de_potencia1 == "12AWG(4mm2)"){
						$score_terminais_de_potencia1 += 1;
					}
					// parte 2
					if($compara_terminais_de_potencia2 == "3AWG(25mm2)"){
						$score_terminais_de_potencia2 += 6;
					}
					if($compara_terminais_de_potencia2 == "4AWG(25mm2)"){
						$score_terminais_de_potencia2 += 5;
					}
					if($compara_terminais_de_potencia2 == "6AWG(16mm2)"){
						$score_terminais_de_potencia2 += 4;
					}
					if($compara_terminais_de_potencia2 == "8AWG(10mm2)"){
						$score_terminais_de_potencia2 += 3;
					}
					if($compara_terminais_de_potencia2 == "10AWG(6MM2)"){
						$score_terminais_de_potencia2 += 2;
					}
					if($compara_terminais_de_potencia2 == "12AWG(4mm2)"){
						$score_terminais_de_potencia2 += 1;
					}
					if($compara_terminais_de_potencia1 > $compara_terminais_de_potencia2){
						$score1 += 1;
					}
					if($compara_terminais_de_potencia1 < $compara_terminais_de_potencia2){
						$score2 += 1;
					}
				

				$grau_de_protecao1 = mysqli_query($link, "SELECT '$grau_de_protecao' FROM controlador_solar where nome = '$title'");
				$grau_de_protecao2 = mysqli_query($link, "SELECT '$grau_de_protecao' FROM controlador_solar where nome = '$title2'");
				$compara_grau_de_protecao1 = mysqli_fetch_row($grau_de_protecao1);
				$compara_grau_de_protecao2 = mysqli_fetch_row($grau_de_protecao2);

				$score_grau_de_protecao1 = 0;
				$score_grau_de_protecao2 = 0;

				
					if($compara_grau_de_protecao1 == "IP20"){
						$score_grau_de_protecao1 += 1;
					}
					if($compara_grau_de_protecao1 == "IP30"){
						$score_grau_de_protecao1 += 2;
					}
					if($compara_grau_de_protecao1 == "IP32"){
						$score_grau_de_protecao1 += 3;
					}
					if($compara_grau_de_protecao1 == "IP43"){
						$score_grau_de_protecao1 += 4;
					}
					if($compara_grau_de_protecao1 == "IP54"){
						$score_grau_de_protecao1 += 5;
					}
					if($compara_grau_de_protecao1 == "IP65"){
						$score_grau_de_protecao1 += 6;
					}
					// parte 2
					if($compara_grau_de_protecao2 == "IP20"){
						$score_grau_de_protecao2 += 1;
					}
					if($compara_grau_de_protecao2 == "IP30"){
						$score_grau_de_protecao2 += 2;
					}
					if($compara_grau_de_protecao2 == "IP32"){
						$score_grau_de_protecao2 += 3;
					}
					if($compara_grau_de_protecao2 == "IP43"){
						$score_grau_de_protecao2 += 4;
					}
					if($compara_grau_de_protecao2 == "IP54"){
						$score_grau_de_protecao2 += 5;
					}
					if($compara_grau_de_protecao2 == "IP65"){
						$score_grau_de_protecao2 += 6;
					}
					if($compara_grau_de_protecao1 > $compara_grau_de_protecao2){
						$score1 += 1;
					}
					elseif($compara_grau_de_protecao1 < $compara_grau_de_protecao2){
						$score2 += 1;
					}
				






				$temperatura_de_trabalho1 = mysqli_query($link, "SELECT '$temperatura_de_trabalho' FROM controlador_solar where nome = '$title'");
				$temperatura_de_trabalho2 = mysqli_query($link, "SELECT '$temperatura_de_trabalho' FROM controlador_solar where nome = '$title2'");
				$compara_temperatura_de_trabalho1 = mysqli_fetch_row($temperatura_de_trabalho1);
				$compara_temperatura_de_trabalho2 = mysqli_fetch_row($temperatura_de_trabalho2);

				$score_temperatura_de_trabalho1 = 0;
				$score_temperatura_de_trabalho2 = 0;
					
				if($compara_temperatura_de_trabalho1 == "-35°C ~ +45°C"){
						$score_temperatura_de_trabalho1 += 1;					
					}
				if($compara_temperatura_de_trabalho1 == "-40°C ~ +60°C"){
						$score_temperatura_de_trabalho1 += 2;					
					}
				if($compara_temperatura_de_trabalho1 == "-25°C ~ +45°C"){
						$score_temperatura_de_trabalho1 += 2;					
					}
				if($compara_temperatura_de_trabalho1 == "-25°C ~ +55°C"){
						$score_temperatura_de_trabalho1 += 3;					
					}
				if($compara_temperatura_de_trabalho1 == "-30°C ~ +60°C"){
						$score_temperatura_de_trabalho1 += 3;					
					}
				if($compara_temperatura_de_trabalho1 == "-20°C ~ +55°C"){
						$score_temperatura_de_trabalho1 += 4;					
					}
				if($compara_temperatura_de_trabalho1 == "-25°C ~ +60°C"){
						$score_temperatura_de_trabalho1 += 4;					
					}
				if($compara_temperatura_de_trabalho1 == "-10°C ~ +55°C"){
						$score_temperatura_de_trabalho1 += 5;					
					}
				// parte 2
				if($compara_temperatura_de_trabalho2 == "-35°C ~ +45°C"){
						$score_temperatura_de_trabalho2 += 1;					
				}
				if($compara_temperatura_de_trabalho2 == "-40°C ~ +60°C"){
						$score_temperatura_de_trabalho2 += 2;					
					}
				if($compara_temperatura_de_trabalho2 == "-25°C ~ +45°C"){
						$score_temperatura_de_trabalho2 += 2;					
					}
				if($compara_temperatura_de_trabalho2 == "-25°C ~ +55°C"){
						$score_temperatura_de_trabalho2 += 3;					
					}
				if($compara_temperatura_de_trabalho2 == "-30°C ~ +60°C"){
						$score_temperatura_de_trabalho2 += 3;					
					}
				if($compara_temperatura_de_trabalho2 == "-20°C ~ +55°C"){
						$score_temperatura_de_trabalho2 += 4;					
					}
				if($compara_temperatura_de_trabalho2 == "-25°C ~ +60°C"){
						$score_temperatura_de_trabalho2 += 4;					
					}
				if($compara_temperatura_de_trabalho2 == "-10°C ~ +55°C"){
						$score_temperatura_de_trabalho2 += 5;					
					}
				if($score_temperatura_de_trabalho1 > $score_temperatura_de_trabalho2){
					$score1 += 1;
				}
				elseif($score_temperatura_de_trabalho1 > $score_temperatura_de_trabalho2){
					$score2 += 1;
				}

				$max_potencia_de_entrada_painel1 = mysqli_query($link, "SELECT '$max_potencia_de_entrada_painel' FROM controlador_solar where nome = '$title'");
				$max_potencia_de_entrada_painel2 = mysqli_query($link, "SELECT '$max_potencia_de_entrada_painel' FROM controlador_solar where nome = '$title2'");
				$compara_max_potencia_de_entrada_painel1 = mysqli_fetch_row($max_potencia_de_entrada_painel1);
				$compara_max_potencia_de_entrada_painel2 = mysqli_fetch_row($max_potencia_de_entrada_painel2);

				$score_max_potencia_de_entrada_painel1 = 0;
				$score_max_potencia_de_entrada_painel2 = 0;

				
					if($compara_max_potencia_de_entrada_painel1 == "145W/290W"){
						$score_max_potencia_de_entrada_painel1 += 1;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "220W/440W"){
						$score_max_potencia_de_entrada_painel1 += 2;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "240W/480W"){
						$score_max_potencia_de_entrada_painel1 += 3;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "260W/520W"){
						$score_max_potencia_de_entrada_painel1 += 4;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "290W/580W"){
						$score_max_potencia_de_entrada_painel1 += 5;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "300W/600W"){
						$score_max_potencia_de_entrada_painel1 += 6;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "360W/720W"){
						$score_max_potencia_de_entrada_painel1 += 7;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "390W/780W"){
						$score_max_potencia_de_entrada_painel1 += 8;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "400W/800W"){
						$score_max_potencia_de_entrada_painel1 += 9;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "450W/900W"){
						$score_max_potencia_de_entrada_painel1 += 10;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "520W/1020W"){
						$score_max_potencia_de_entrada_painel1 += 11;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "550W/1100W"){
						$score_max_potencia_de_entrada_painel1 += 12;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "560W/1120W"){
						$score_max_potencia_de_entrada_painel1 += 13;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "600W/1200W"){
						$score_max_potencia_de_entrada_painel1 += 14;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "750W/1500W"){
						$score_max_potencia_de_entrada_painel1 += 15;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "800W/1600W"){
						$score_max_potencia_de_entrada_painel1 += 16;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "1000W/2000W"){
						$score_max_potencia_de_entrada_painel1 += 17;					
					}
					if($compara_max_potencia_de_entrada_painel1 == "1300W/2600W"){
						$score_max_potencia_de_entrada_painel1 += 18;					
					}
					// parte 2
					if($compara_max_potencia_de_entrada_painel2 == "145W/290W"){
						$score_max_potencia_de_entrada_painel2 += 1;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "220W/440W"){
						$score_max_potencia_de_entrada_painel2 += 2;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "240W/480W"){
						$score_max_potencia_de_entrada_painel2 += 3;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "260W/520W"){
						$score_max_potencia_de_entrada_painel2 += 4;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "290W/580W"){
						$score_max_potencia_de_entrada_painel2 += 5;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "300W/600W"){
						$score_max_potencia_de_entrada_painel2 += 6;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "360W/720W"){
						$score_max_potencia_de_entrada_painel2 += 7;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "390W/780W"){
						$score_max_potencia_de_entrada_painel2 += 8;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "400W/800W"){
						$score_max_potencia_de_entrada_painel2 += 9;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "450W/900W"){
						$score_max_potencia_de_entrada_painel2 += 10;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "520W/1020W"){
						$score_max_potencia_de_entrada_painel2 += 11;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "550W/1100W"){
						$score_max_potencia_de_entrada_painel2 += 12;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "560W/1120W"){
						$score_max_potencia_de_entrada_painel2 += 13;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "600W/1200W"){
						$score_max_potencia_de_entrada_painel2 += 14;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "750W/1500W"){
						$score_max_potencia_de_entrada_painel2 += 15;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "800W/1600W"){
						$score_max_potencia_de_entrada_painel2 += 16;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "1000W/2000W"){
						$score_max_potencia_de_entrada_painel2 += 17;					
					}
					if($compara_max_potencia_de_entrada_painel2 == "1300W/2600W"){
						$score_max_potencia_de_entrada_painel2 += 18;					
					}
					if($score_max_potencia_de_entrada_painel1 > $score_max_potencia_de_entrada_painel2){
						$score1 += 1;
					}
					elseif($score_max_potencia_de_entrada_painel1 < $score_max_potencia_de_entrada_painel2){
						$score2 += 1;
					}
					

				$tensao_entrada_de_bateria1 = mysqli_query($link, "SELECT '$tensao_entrada_de_bateria' FROM controlador_solar where nome = '$title'");
				$tensao_entrada_de_bateria2 = mysqli_query($link, "SELECT '$tensao_entrada_de_bateria' FROM controlador_solar where nome = '$title2'");
				$compara_tensao_entrada_de_bateria1 = mysqli_fetch_row($tensao_entrada_de_bateria1);
				$compara_tensao_entrada_de_bateria2 = mysqli_fetch_row($tensao_entrada_de_bateria2);

				$score_tensao_entrada_de_bateria1 = 0;
				$score_tensao_entrada_de_bateria2 = 0;

				if(($compara_tensao_entrada_de_bateria1 != "NULL") && ($compara_tensao_entrada_de_bateria2 != "NULL")){
					if($compara_tensao_entrada_de_bateria1 == "10 ~ 29V"){
						$score_tensao_entrada_de_bateria1 += 1;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 32V"){
						$score_tensao_entrada_de_bateria1 += 2;
					}
					if($compara_tensao_entrada_de_bateria1 == "8 ~ 32V"){
						$score_tensao_entrada_de_bateria1 += 3;
					}
					if($compara_tensao_entrada_de_bateria1 == "10 ~ 35V"){
						$score_tensao_entrada_de_bateria1 += 4;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 35V"){
						$score_tensao_entrada_de_bateria1 += 5;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 60V"){
						$score_tensao_entrada_de_bateria1 += 6;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 64V"){
						$score_tensao_entrada_de_bateria1 += 7;
					}
					if($compara_tensao_entrada_de_bateria1 == "17 ~ 75V"){
						$score_tensao_entrada_de_bateria1 += 8;
					}
					if($compara_tensao_entrada_de_bateria1 == "9 ~ 70V"){
						$score_tensao_entrada_de_bateria1 += 9;
					}
					if($compara_tensao_entrada_de_bateria1 == "17 ~ 100V"){
						$score_tensao_entrada_de_bateria1 += 10;
					}
					if($compara_tensao_entrada_de_bateria1 == "15 ~ 100V"){
						$score_tensao_entrada_de_bateria1 += 11;
					}
					if($compara_tensao_entrada_de_bateria1 == "17 ~ 120V"){
						$score_tensao_entrada_de_bateria1 += 12;
					}
					// parte 2
					if($compara_tensao_entrada_de_bateria2 == "10 ~ 29V"){
						$score_tensao_entrada_de_bateria2 += 1;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 32V"){
						$score_tensao_entrada_de_bateria2 += 2;
					}
					if($compara_tensao_entrada_de_bateria2 == "8 ~ 32V"){
						$score_tensao_entrada_de_bateria2 += 3;
					}
					if($compara_tensao_entrada_de_bateria2 == "10 ~ 35V"){
						$score_tensao_entrada_de_bateria2 += 4;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 35V"){
						$score_tensao_entrada_de_bateria2 += 5;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 60V"){
						$score_tensao_entrada_de_bateria2 += 6;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 64V"){
						$score_tensao_entrada_de_bateria2 += 7;
					}
					if($compara_tensao_entrada_de_bateria2 == "17 ~ 75V"){
						$score_tensao_entrada_de_bateria2 += 8;
					}
					if($compara_tensao_entrada_de_bateria2 == "9 ~ 70V"){
						$score_tensao_entrada_de_bateria2 += 9;
					}
					if($compara_tensao_entrada_de_bateria2 == "17 ~ 100V"){
						$score_tensao_entrada_de_bateria2 += 10;
					}
					if($compara_tensao_entrada_de_bateria2 == "15 ~ 100V"){
						$score_tensao_entrada_de_bateria2 += 11;
					}
					if($compara_tensao_entrada_de_bateria2 == "17 ~ 120V"){
						$score_tensao_entrada_de_bateria2 += 12;
					}
					if($score_tensao_entrada_de_bateria1 > $score_tensao_entrada_de_bateria2){
						$score1 += 1;
					}
					elseif($score_tensao_entrada_de_bateria1 < $score_tensao_entrada_de_bateria2){
						$score2 += 1;
					}
				}				
				

				$garantia1 = mysqli_query($link, "SELECT garantia FROM controlador_solar where nome = '$title'");
				$garantia2 = mysqli_query($link, "SELECT garantia FROM controlador_solar where nome = '$title2'");
				$compara_garantia1 = mysqli_fetch_row($garantia1);
				$compara_garantia2 = mysqli_fetch_row($garantia2);
				
				if($compara_garantia1 > $compara_garantia2){
						$score1 += 1;
				}
				elseif($compara_garantia1 < $compara_garantia2){
						$score2 += 1;
				}

				$peso1 = mysqli_query($link, "SELECT peso FROM controlador_solar where nome = '$title'");
				$peso2 = mysqli_query($link, "SELECT peso FROM controlador_solar where nome = '$title2'");
				$compara_peso1 = mysqli_fetch_row($peso1);
				$compara_peso2 = mysqli_fetch_row($peso2);
				
				if($compara_peso1 < $compara_peso2){
						$score1 -= 1;
				}
				elseif($compara_peso1 > $compara_peso2){
						$score2 -= 1;
				}
				
				$MPPT_precisao1 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM controlador_solar where nome = '$title'");
				$MPPT_precisao2 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM controlador_solar where nome = '$title2'");
				$compara_MPPT_precisao1 = mysqli_fetch_row($MPPT_precisao1);
				$compara_MPPT_precisao2 = mysqli_fetch_row($MPPT_precisao2);
				
				if($compara_MPPT_precisao1 > $compara_MPPT_precisao2){
						$score1 += 1;
				}
				elseif($compara_MPPT_precisao1 < $compara_MPPT_precisao2){
						$score2 += 1;
				}
				
				$Eficiencia_de_conversao_de_pico1 = mysqli_query($link, "SELECT '$Eficiencia_de_conversao_de_pico' FROM controlador_solar where nome = '$title'");
				$Eficiencia_de_conversao_de_pico2 = mysqli_query($link, "SELECT '$Eficiencia_de_conversao_de_pico' FROM controlador_solar where nome = '$title2'");
				$compara_Eficiencia_de_conversao_de_pico1 = mysqli_fetch_row($Eficiencia_de_conversao_de_pico1);
				$compara_Eficiencia_de_conversao_de_pico2 = mysqli_fetch_row($Eficiencia_de_conversao_de_pico2);
				
				if($compara_Eficiencia_de_conversao_de_pico1 > $compara_Eficiencia_de_conversao_de_pico2){
						$score1 += 1;
				}
				elseif($compara_Eficiencia_de_conversao_de_pico1 < $compara_Eficiencia_de_conversao_de_pico2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_flutuacao1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_flutuacao' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_flutuacao2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_flutuacao' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_flutuacao1 = mysqli_fetch_row($Tensao_de_carregamento_flutuacao1);
				$compara_Tensao_de_carregamento_flutuacao2 = mysqli_fetch_row($Tensao_de_carregamento_flutuacao2);
				
				if($compara_Tensao_de_carregamento_flutuacao1 > $compara_Tensao_de_carregamento_flutuacao2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_flutuacao1 < $compara_Tensao_de_carregamento_flutuacao2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_Boost_inundada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_inundada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_Boost_inundada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_inundada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_Boost_inundada1 = mysqli_fetch_row($Tensao_de_carregamento_Boost_inundada1);
				$compara_Tensao_de_carregamento_Boost_inundada2 = mysqli_fetch_row($Tensao_de_carregamento_Boost_inundada2);
				
				if($compara_Tensao_de_carregamento_Boost_inundada1 > $compara_Tensao_de_carregamento_Boost_inundada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_Boost_inundada1 < $compara_Tensao_de_carregamento_Boost_inundada2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_Boost_selada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_selada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_Boost_selada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_selada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_Boost_selada1 = mysqli_fetch_row($Tensao_de_carregamento_Boost_selada1);
				$compara_Tensao_de_carregamento_Boost_selada2 = mysqli_fetch_row($Tensao_de_carregamento_Boost_selada2);
				
				if($compara_Tensao_de_carregamento_Boost_selada1 > $compara_Tensao_de_carregamento_Boost_selada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_Boost_selada1 < $compara_Tensao_de_carregamento_Boost_selada2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_Boost_gel1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_gel' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_Boost_gel2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_Boost_gel' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_Boost_gel1 = mysqli_fetch_row($Tensao_de_carregamento_Boost_gel1);
				$compara_Tensao_de_carregamento_Boost_gel2 = mysqli_fetch_row($Tensao_de_carregamento_Boost_gel2);
				
				if($compara_Tensao_de_carregamento_Boost_gel1 > $compara_Tensao_de_carregamento_Boost_gel2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_Boost_gel1 < $compara_Tensao_de_carregamento_Boost_gel2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_equalizacao_inundada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_inundada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_equalizacao_inundada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_inundada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_equalizacao_inundada1 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_inundada1);
				$compara_Tensao_de_carregamento_equalizacao_inundada2 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_inundada2);
				
				if($compara_Tensao_de_carregamento_equalizacao_inundada1 > $compara_Tensao_de_carregamento_equalizacao_inundada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_equalizacao_inundada1 < $compara_Tensao_de_carregamento_equalizacao_inundada2){
						$score2 += 1;
				}
				
				$Tensao_de_carregamento_equalizacao_selada1 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_selada' FROM controlador_solar where nome = '$title'");
				$Tensao_de_carregamento_equalizacao_selada2 = mysqli_query($link, "SELECT '$Tensao_de_carregamento_equalizacao_selada' FROM controlador_solar where nome = '$title2'");
				$compara_Tensao_de_carregamento_equalizacao_selada1 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_selada1);
				$compara_Tensao_de_carregamento_equalizacao_selada2 = mysqli_fetch_row($Tensao_de_carregamento_equalizacao_selada2);
				
				if($compara_Tensao_de_carregamento_equalizacao_selada1 > $compara_Tensao_de_carregamento_equalizacao_selada2){
						$score1 += 1;
				}
				elseif($compara_Tensao_de_carregamento_equalizacao_selada1 < $compara_Tensao_de_carregamento_equalizacao_selada2){
						$score2 += 1;
				}
				
				$Max_tensao_de_circuito_aberto_de_painel1 = mysqli_query($link, "SELECT '$Max_tensao_de_circuito_aberto_de_painel' FROM controlador_solar where nome = '$title'");
				$Max_tensao_de_circuito_aberto_de_painel2 = mysqli_query($link, "SELECT '$Max_tensao_de_circuito_aberto_de_painel' FROM controlador_solar where nome = '$title2'");
				$compara_Max_tensao_de_circuito_aberto_de_painel1 = mysqli_fetch_row($Max_tensao_de_circuito_aberto_de_painel1);
				$compara_Max_tensao_de_circuito_aberto_de_painel2 = mysqli_fetch_row($Max_tensao_de_circuito_aberto_de_painel2);
				
				if($compara_Max_tensao_de_circuito_aberto_de_painel1 > $compara_Max_tensao_de_circuito_aberto_de_painel2){
						$score1 += 1;
				}
				elseif($compara_Max_tensao_de_circuito_aberto_de_painel1 < $compara_Max_tensao_de_circuito_aberto_de_painel2){
						$score2 += 1;
				}

				$Corrente_nominal_de_descarga1 = mysqli_query($link, "SELECT '$Corrente_nominal_de_descarga' FROM controlador_solar where nome = '$title'");
				$Corrente_nominal_de_descarga2 = mysqli_query($link, "SELECT '$Corrente_nominal_de_descarga' FROM controlador_solar where nome = '$title2'");
				$compara_Corrente_nominal_de_descarga1 = mysqli_fetch_row($Corrente_nominal_de_descarga1);
				$compara_Corrente_nominal_de_descarga2 = mysqli_fetch_row($Corrente_nominal_de_descarga2);
				
				if($compara_Corrente_nominal_de_descarga1 < $compara_Corrente_nominal_de_descarga2){
						$score1 += 1;
				}
				elseif($compara_Corrente_nominal_de_descarga1 > $compara_Corrente_nominal_de_descarga2){
						$score2 += 1;
				}

				$Corrente_nominal_de_carga1 = mysqli_query($link, "SELECT '$Corrente_nominal_de_carga' FROM controlador_solar where nome = '$title'");
				$Corrente_nominal_de_carga2 = mysqli_query($link, "SELECT '$Corrente_nominal_de_carga' FROM controlador_solar where nome = '$title2'");
				$compara_Corrente_nominal_de_carga1 = mysqli_fetch_row($Corrente_nominal_de_carga1);
				$compara_Corrente_nominal_de_carga2 = mysqli_fetch_row($Corrente_nominal_de_carga2);
				
				if($compara_Corrente_nominal_de_carga1 > $compara_Corrente_nominal_de_carga2){
						$score1 += 1;
				}
				elseif($compara_Corrente_nominal_de_carga1 < $compara_Corrente_nominal_de_carga2){
						$score2 += 1;
				}

				

				$Voltagem_nominal_do_sistema_max1 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_max' FROM controlador_solar where nome = '$title'");
				$Voltagem_nominal_do_sistema_max2 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_max' FROM controlador_solar where nome = '$title2'");
				$compara_Voltagem_nominal_do_sistema_max1 = mysqli_fetch_row($Voltagem_nominal_do_sistema_max1);
				$compara_Voltagem_nominal_do_sistema_max2 = mysqli_fetch_row($Voltagem_nominal_do_sistema_max2);
				
				if($compara_Voltagem_nominal_do_sistema_max1 > $compara_Voltagem_nominal_do_sistema_max2){
						$score1 += 1;
				}
				elseif($compara_Voltagem_nominal_do_sistema_max1 < $compara_Voltagem_nominal_do_sistema_max2){
						$score2 += 1;
				}

				$Voltagem_nominal_do_sistema_min1 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_min' FROM controlador_solar where nome = '$title'");
				$Voltagem_nominal_do_sistema_min2 = mysqli_query($link, "SELECT '$Voltagem_nominal_do_sistema_min' FROM controlador_solar where nome = '$title2'");
				$compara_Voltagem_nominal_do_sistema_min1 = mysqli_fetch_row($Voltagem_nominal_do_sistema_min1);
				$compara_Voltagem_nominal_do_sistema_min2 = mysqli_fetch_row($Voltagem_nominal_do_sistema_min2);
				
				if($compara_Voltagem_nominal_do_sistema_min1 < $compara_Voltagem_nominal_do_sistema_min2){
						$score1 += 1;
				}
				elseif($compara_Voltagem_nominal_do_sistema_min1 > $compara_Voltagem_nominal_do_sistema_min2){
						$score2 += 1;
				}
				if($score1 > $score2){
					echo "Melhor Equipamento";
				}
				elseif($score1 == $score2){
					echo "Equipamentos Equivalentes";
				}
				?>
		</span>
	</div>
</div>
</body>
</html>