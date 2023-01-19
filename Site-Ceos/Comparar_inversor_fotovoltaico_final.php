<!DOCTYPE html>
<?php
include "config.php";
?>
<html lang="pt-BR">
<head>
<meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Comparar_Inversor_fotovoltaico_Final</title>
<style id="applicationStylesheet" type="text/css">
	.mediaViewInfo {
		--web-view-name: Comparar_Inversor_fotovoltaico_Final;
		--web-view-id: Comparar_Inversor_fotovoltaico_Final;
		--web-scale-on-resize: true;
		--web-application: true;
		--web-enable-deep-linking: true;
	}
	:root {
		--web-view-ids: Comparar_Inversor_fotovoltaico_Final;
	}
	* {
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		border: none;
	}
	#Comparar_Inversor_fotovoltaico_Final {
		position: absolute;
		width: 1920px;
		height: 2653px;
		background-color: rgba(255,255,255,1);
		overflow: hidden;
		--web-view-name: Comparar_Inversor_fotovoltaico_Final;
		--web-view-id: Comparar_Inversor_fotovoltaico_Final;
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
		height: 2247px;
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
		top: 2591px;
	}
	#Grupo_4 {
		position: absolute;
		width: 278px;
		height: 52px;
		left: 821px;
		top: 2598px;
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
		height: 2554px;
		left: 948px;
		top: 37px;
	}
	#Grupo_47 {
		position: absolute;
		width: 711px;
		height: 77px;
		left: 110px;
		top: 95px;
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
		left: 91px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Painel_1_inversor_17 {
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
	#Grupo_48 {
		position: absolute;
		width: 711px;
		height: 77px;
		left: 1100px;
		top: 95px;
		overflow: visible;
	}
	#Caminho_1_bd {
		fill: rgba(72,67,67,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Caminho_1_bd {
		overflow: visible;
		position: absolute;
		width: 543px;
		height: 77px;
		left: 91px;
		top: 0px;
		transform: matrix(1,0,0,1,0,0);
	}
	#Painel_2_inversor {
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
	#Grupo_59 {
		position: absolute;
		width: 525px;
		height: 2072px;
		left: 212px;
		top: 375px;
		overflow: visible;
	}
	#Retngulo_189 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_189 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Retngulo_252 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_252 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1036px;
	}
	#Retngulo_190 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_190 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 74px;
	}
	#Retngulo_251 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_251 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1110px;
	}
	#Retngulo_191 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_191 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 37px;
	}
	#Retngulo_250 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_250 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1073px;
	}
	#Retngulo_192 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_192 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 222px;
	}
	#Retngulo_249 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_249 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1258px;
	}
	#Retngulo_193 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_193 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 259px;
	}
	#Retngulo_248 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_248 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1295px;
	}
	#Retngulo_194 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_194 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 296px;
	}
	#Retngulo_247 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_247 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1332px;
	}
	#Retngulo_195 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_195 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 333px;
	}
	#Retngulo_246 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_246 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1369px;
	}
	#Retngulo_196 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_196 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 370px;
	}
	#Retngulo_245 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_245 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1406px;
	}
	#Retngulo_197 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_197 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 407px;
	}
	#Retngulo_244 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_244 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1443px;
	}
	#Retngulo_198 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_198 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 444px;
	}
	#Retngulo_243 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_243 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1480px;
	}
	#Retngulo_199 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_199 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 481px;
	}
	#Retngulo_242 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_242 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1517px;
	}
	#Retngulo_200 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_200 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 185px;
	}
	#Retngulo_241 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_241 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1221px;
	}
	#Retngulo_201 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_201 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 518px;
	}
	#Retngulo_240 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_240 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1554px;
	}
	#Retngulo_202 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_202 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 555px;
	}
	#Retngulo_239 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_239 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1591px;
	}
	#Retngulo_203 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_203 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_238 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_238 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_204 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_204 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_237 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_237 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_205 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_205 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_236 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_236 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_206 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_206 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_235 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_235 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_207 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_207 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_234 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_234 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_208 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_208 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_233 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_233 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_209 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_209 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_232 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_232 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_210 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_210 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_231 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_231 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_211 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_211 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 814px;
	}
	#Retngulo_230 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_230 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1850px;
	}
	#Retngulo_212 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_212 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 851px;
	}
	#Retngulo_229 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_229 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1887px;
	}
	#Retngulo_213 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_213 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 888px;
	}
	#Retngulo_228 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_228 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1924px;
	}
	#Retngulo_214 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_214 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 962px;
	}
	#Retngulo_227 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_227 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1998px;
	}
	#Retngulo_215 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_215 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 999px;
	}
	#Retngulo_226 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_226 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 2035px;
	}
	#Retngulo_216 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_216 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 925px;
	}
	#Retngulo_225 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_225 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1961px;
	}
	#Retngulo_217 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_217 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 592px;
	}
	#Retngulo_224 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_224 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1628px;
	}
	#Retngulo_218 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_218 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 629px;
	}
	#Retngulo_223 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_223 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1665px;
	}
	#Retngulo_219 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_219 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 148px;
	}
	#Retngulo_222 {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_222 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1184px;
	}
	#Retngulo_220 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_220 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 111px;
	}
	#Retngulo_221 {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_221 {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1147px;
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
	#x_de {
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
	#x_df {
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
	#x_dg {
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
	#x_dh {
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
	#x_di {
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
	#x_dj {
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
	#x_dk {
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
	#x_dl {
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
	#x_dm {
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
	#x_dn {
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
	#x_do {
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
	#x_dp {
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
	#x_dq {
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
	#x_dr {
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
	#x_ds {
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
	#x_dt {
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
	#x_du {
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
	#x_dv {
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
	#x_dw {
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
	#x_dx {
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
	#x_dy {
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
	#x_dz {
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
	#x_d {
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
	#x_ea {
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
	#x_eb {
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
	#x_ec {
		left: 12px;
		top: 1969px;
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
	#x_ed {
		left: 12px;
		top: 2043px;
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
	#Potencia_nominal {
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
	#Maxima_potencia_AC {
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
	#Maxima_potencia_de_entrada {
		left: 12px;
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
	#Maxima_tenso_de_entrada_DC {
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
	#MTTP_faixa_de_tenso_DCstartup {
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
	#Minima_tenso_DCstartup {
		left: 0px;
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
	#Numero_de_MTTP {
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
	#Maxima_corrente_de_entrada {
		left: 12px;
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
	#Numero_de_conjuntos_de_conecto {
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
	#Tipo_de_terminal_DC {
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
	#Corrente_nominal_da_saida {
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
	#Maxima_corrente_de_saida {
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
	#Tenso_nominal_da_rede_eletrica {
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
	#Frequencia_da_rede {
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
	#Faixa_de_tenso_AC_min {
		left: 12px;
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
	#Faixa_de_tenso_AC_max {
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
	#THDI {
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
	#Maxima_eficiencia {
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
	#MPPT_preciso {
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
	#Proteo_de_isolamento_DC {
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
	#Proteo_polaridade_reversa {
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
	#Proteo_de_sobrecorrente_CA {
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
	#Proteo_contra_superaquecimento {
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
	#Peso {
		left: 0px;
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
	#Garantia {
		left: 0px;
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
	#Interfaces_de_comunicao {
		left: 12px;
		top: 1932px;
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
		top: 2006px;
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
	#Grupo_60 {
		position: absolute;
		width: 525px;
		height: 2072px;
		left: 1202px;
		top: 375px;
		overflow: visible;
	}
	#Retngulo_189_ex {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_189_ex {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 0px;
	}
	#Retngulo_252_ey {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_252_ey {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1036px;
	}
	#Retngulo_190_ez {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_190_ez {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 74px;
	}
	#Retngulo_251_e {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_251_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1110px;
	}
	#Retngulo_191_e {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_191_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 37px;
	}
	#Retngulo_250_e {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_250_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1073px;
	}
	#Retngulo_192_e {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_192_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 222px;
	}
	#Retngulo_249_e {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_249_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1258px;
	}
	#Retngulo_193_e {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_193_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 259px;
	}
	#Retngulo_248_e {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_248_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1295px;
	}
	#Retngulo_194_e {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_194_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 296px;
	}
	#Retngulo_247_e {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_247_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1332px;
	}
	#Retngulo_195_e {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_195_e {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 333px;
	}
	#Retngulo_246_fa {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_246_fa {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1369px;
	}
	#Retngulo_196_fb {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_196_fb {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 370px;
	}
	#Retngulo_245_fc {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_245_fc {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1406px;
	}
	#Retngulo_197_fd {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_197_fd {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 407px;
	}
	#Retngulo_244_fe {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_244_fe {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1443px;
	}
	#Retngulo_198_ff {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_198_ff {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 444px;
	}
	#Retngulo_243_fg {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_243_fg {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1480px;
	}
	#Retngulo_199_fh {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_199_fh {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 481px;
	}
	#Retngulo_242_fi {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_242_fi {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1517px;
	}
	#Retngulo_200_fj {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_200_fj {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 185px;
	}
	#Retngulo_241_fk {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_241_fk {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1221px;
	}
	#Retngulo_201_fl {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_201_fl {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 518px;
	}
	#Retngulo_240_fm {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_240_fm {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1554px;
	}
	#Retngulo_202_fn {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_202_fn {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 555px;
	}
	#Retngulo_239_fo {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_239_fo {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1591px;
	}
	#Retngulo_203_fp {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_203_fp {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_238_fq {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_238_fq {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_204_fr {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_204_fr {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_237_fs {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_237_fs {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_205_ft {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_205_ft {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 666px;
	}
	#Retngulo_236_fu {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_236_fu {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1702px;
	}
	#Retngulo_206_fv {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_206_fv {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 703px;
	}
	#Retngulo_235_fw {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_235_fw {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1739px;
	}
	#Retngulo_207_fx {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_207_fx {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_234_fy {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_234_fy {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_208_fz {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_208_fz {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_233_f {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_233_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_209_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_209_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 740px;
	}
	#Retngulo_232_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_232_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1776px;
	}
	#Retngulo_210_f {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_210_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 777px;
	}
	#Retngulo_231_f {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_231_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1813px;
	}
	#Retngulo_211_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_211_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 814px;
	}
	#Retngulo_230_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_230_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1850px;
	}
	#Retngulo_212_f {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_212_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 851px;
	}
	#Retngulo_229_f {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_229_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1887px;
	}
	#Retngulo_213_f {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_213_f {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 888px;
	}
	#Retngulo_228_ga {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_228_ga {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1924px;
	}
	#Retngulo_214_gb {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_214_gb {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 962px;
	}
	#Retngulo_227_gc {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_227_gc {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1998px;
	}
	#Retngulo_215_gd {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_215_gd {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 999px;
	}
	#Retngulo_226_ge {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_226_ge {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 2035px;
	}
	#Retngulo_216_gf {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_216_gf {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 925px;
	}
	#Retngulo_225_gg {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_225_gg {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1961px;
	}
	#Retngulo_217_gh {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_217_gh {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 592px;
	}
	#Retngulo_224_gi {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_224_gi {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1628px;
	}
	#Retngulo_218_gj {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_218_gj {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 629px;
	}
	#Retngulo_223_gk {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_223_gk {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1665px;
	}
	#Retngulo_219_gl {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_219_gl {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 148px;
	}
	#Retngulo_222_gm {
		fill: rgba(72,67,67,1);
	}
	.Retngulo_222_gm {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1184px;
	}
	#Retngulo_220_gn {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_220_gn {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 111px;
	}
	#Retngulo_221_go {
		fill: rgba(135,135,135,1);
		stroke: rgba(112,112,112,1);
		stroke-width: 1px;
		stroke-linejoin: miter;
		stroke-linecap: butt;
		stroke-miterlimit: 4;
		shape-rendering: auto;
	}
	.Retngulo_221_go {
		position: absolute;
		overflow: visible;
		width: 525px;
		height: 37px;
		left: 0px;
		top: 1147px;
	}
	#Fabricante_gp {
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
	#x_gq {
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
	#x_gr {
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
	#x_gs {
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
	#x_gt {
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
	#x_gu {
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
	#x_gv {
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
	#x_gw {
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
	#x_gx {
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
	#x_gy {
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
	#x_gz {
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
	#x_g {
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
	#x_ha {
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
	#x_hb {
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
	#x_hc {
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
	#x_hd {
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
	#x_he {
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
	#x_hf {
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
	#x_hg {
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
	#x_hh {
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
	#x_hi {
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
	#x_hj {
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
	#x_hk {
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
	#x_hl {
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
	#x_hm {
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
	#x_hn {
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
	#x_ho {
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
	#x_hp {
		left: 12px;
		top: 1969px;
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
	#x_hq {
		left: 12px;
		top: 2043px;
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
	#Potencia_nominal_hi {
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
	#Maxima_potencia_AC_hj {
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
	#Maxima_potencia_de_entrada_hk {
		left: 12px;
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
	#Maxima_tenso_de_entrada_DC_hl {
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
	#MTTP_faixa_de_tenso_DCstartup_hm {
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
	#Minima_tenso_DCstartup_hn {
		left: 0px;
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
	#Numero_de_MTTP_ho {
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
	#Maxima_corrente_de_entrada_hp {
		left: 12px;
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
	#Numero_de_conjuntos_de_conecto_hq {
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
	#Tipo_de_terminal_DC_hr {
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
	#Corrente_nominal_da_saida_hs {
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
	#Maxima_corrente_de_saida_ht {
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
	#Tenso_nominal_da_rede_eletrica_hu {
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
	#Frequencia_da_rede_hv {
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
	#Faixa_de_tenso_AC_min_hw {
		left: 12px;
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
	#Faixa_de_tenso_AC_max_hx {
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
	#THDI_hy {
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
	#Maxima_eficiencia_hz {
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
	#MPPT_preciso_h {
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
	#Proteo_de_isolamento_DC_h {
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
	#Proteo_polaridade_reversa_h {
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
	#Proteo_de_sobrecorrente_CA_h {
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
	#Proteo_contra_superaquecimento_h {
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
	#Peso_h {
		left: 0px;
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
	#Garantia_h {
		left: 0px;
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
	#Interfaces_de_comunicao_h {
		left: 12px;
		top: 1932px;
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
	#Link_h {
		left: 12px;
		top: 2006px;
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
<div id="Comparar_Inversor_fotovoltaico_Final">
	<img id="capa" src="capa.png" srcset="capa.png 1x, capa@2x.png 2x">
		
	<svg class="Retngulo_47">
		<rect id="Retngulo_47" rx="0" ry="0" x="0" y="0" width="1920" height="2247">
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
		<rect id="Retngulo_11" rx="0" ry="0" x="0" y="0" width="25" height="2554">
		</rect>
	</svg>
	<div id="Grupo_47">
		<svg class="Caminho_1" viewBox="0 0 543 77">
			<path id="Caminho_1" d="M 38.5 0 L 504.5 0 C 525.762939453125 0 543 17.23703575134277 543 38.5 C 543 59.76296234130859 525.762939453125 77 504.5 77 L 38.5 77 C 17.23703575134277 77 0 59.76296234130859 0 38.5 C 0 17.23703575134277 17.23703575134277 0 38.5 0 Z">
			</path>
		</svg>
		<div id="Painel_1_inversor_17">
			<span>
				<?php
			$title = $_POST['titles'];
			echo $title;
			?>
			</span>
		</div>
	</div>
	<div id="Grupo_48">
		<svg class="Caminho_1_bd" viewBox="0 0 543 77">
			<path id="Caminho_1_bd" d="M 38.5 0 L 504.5 0 C 525.762939453125 0 543 17.23703575134277 543 38.5 C 543 59.76296234130859 525.762939453125 77 504.5 77 L 38.5 77 C 17.23703575134277 77 0 59.76296234130859 0 38.5 C 0 17.23703575134277 17.23703575134277 0 38.5 0 Z">
			</path>
		</svg>
		<div id="Painel_2_inversor">
			<span><?php
			$title2 = $_POST['titles2'];
			echo $title2;
			?></span>
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
	<div id="Grupo_59">
		<svg class="Retngulo_189">
			<rect id="Retngulo_189" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_252">
			<rect id="Retngulo_252" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_190">
			<rect id="Retngulo_190" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_251">
			<rect id="Retngulo_251" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_191">
			<rect id="Retngulo_191" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_250">
			<rect id="Retngulo_250" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_192">
			<rect id="Retngulo_192" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_249">
			<rect id="Retngulo_249" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_193">
			<rect id="Retngulo_193" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_248">
			<rect id="Retngulo_248" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_194">
			<rect id="Retngulo_194" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_247">
			<rect id="Retngulo_247" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_195">
			<rect id="Retngulo_195" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_246">
			<rect id="Retngulo_246" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_196">
			<rect id="Retngulo_196" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_245">
			<rect id="Retngulo_245" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_197">
			<rect id="Retngulo_197" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_244">
			<rect id="Retngulo_244" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_198">
			<rect id="Retngulo_198" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_243">
			<rect id="Retngulo_243" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_199">
			<rect id="Retngulo_199" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_242">
			<rect id="Retngulo_242" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_200">
			<rect id="Retngulo_200" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_241">
			<rect id="Retngulo_241" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_201">
			<rect id="Retngulo_201" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_240">
			<rect id="Retngulo_240" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_202">
			<rect id="Retngulo_202" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_239">
			<rect id="Retngulo_239" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_203">
			<rect id="Retngulo_203" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_238">
			<rect id="Retngulo_238" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_204">
			<rect id="Retngulo_204" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_237">
			<rect id="Retngulo_237" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_205">
			<rect id="Retngulo_205" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_236">
			<rect id="Retngulo_236" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_206">
			<rect id="Retngulo_206" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_235">
			<rect id="Retngulo_235" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_207">
			<rect id="Retngulo_207" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_234">
			<rect id="Retngulo_234" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_208">
			<rect id="Retngulo_208" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_233">
			<rect id="Retngulo_233" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_209">
			<rect id="Retngulo_209" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_232">
			<rect id="Retngulo_232" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_210">
			<rect id="Retngulo_210" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_231">
			<rect id="Retngulo_231" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_211">
			<rect id="Retngulo_211" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_230">
			<rect id="Retngulo_230" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_212">
			<rect id="Retngulo_212" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_229">
			<rect id="Retngulo_229" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_213">
			<rect id="Retngulo_213" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_228">
			<rect id="Retngulo_228" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_214">
			<rect id="Retngulo_214" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_227">
			<rect id="Retngulo_227" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_215">
			<rect id="Retngulo_215" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_226">
			<rect id="Retngulo_226" rx="0" ry="0" x="0" y="0" width="600" height="100">
			</rect>
		</svg>
		<svg class="Retngulo_216">
			<rect id="Retngulo_216" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_225">
			<rect id="Retngulo_225" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_217">
			<rect id="Retngulo_217" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_224">
			<rect id="Retngulo_224" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_218">
			<rect id="Retngulo_218" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_223">
			<rect id="Retngulo_223" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_219">
			<rect id="Retngulo_219" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_222">
			<rect id="Retngulo_222" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_220">
			<rect id="Retngulo_220" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_221">
			<rect id="Retngulo_221" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<div id="Fabricante">
			<span>Fabricante</span>
		</div>
		<div id="x">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['fabricante'];
			}
			?>
			</span>
		</div>
		<div id="x_de">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['potencia nominal'];
			}
			?>
			</span>
		</div>
		<div id="x_df">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima potencia AC'];
			}
			?>
			</span>
		</div>
		<div id="x_dg">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima potencia de entrada'];
			}
			?>
			</span>
		</div>
		<div id="x_dh">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima tensao de entrada DC'];
			}
			?>
			</span>
		</div>
		<div id="x_di">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['MTTP faixa de tensao operacional'];
			}
			?>
			</span>
		</div>
		<div id="x_dj">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['minima tensao DC/startup'];
			}
			?>
			</span>
		</div>
		<div id="x_dk">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['numero de MTTP'];
			}
			?>
			</span>
		</div>
		<div id="x_dl">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima corrente de entrada'];
			}
			?>
			</span>
		</div>
		<div id="x_dm">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['numero de conjuntos de conectores DC'];
			}
			?>
			</span>
		</div>
		<div id="x_dn">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tipo de terminal DC'];
			}
			?>
			</span>
		</div>
		<div id="x_do">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['corrente nominal da saida'];
			}
			?>
			</span>
		</div>
		<div id="x_dp">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima corrente de saida'];
			}
			?>
			</span>
		</div>
		<div id="x_dq">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao nominal da rede eletrica'];
			}
			?>
			</span>
		</div>
		<div id="x_dr">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['frequencia da rede'];
			}
			?>
			</span>
		</div>
		<div id="x_ds">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['faixa de tensao AC min'];
			}
			?>
			</span>
		</div>
		<div id="x_dt">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['faixa de tensao AC max'];
			}
			?>
			</span>
		</div>
		<div id="x_du">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['THDi'];
			}
			?>
			</span>
		</div>
		<div id="x_dv">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima eficiencia'];
			}
			?>
			</span>
		</div>
		<div id="x_dw">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['MPPT precisao'];
			}
			?>
			</span>
		</div>
		<div id="x_dx">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao de isolamento DC'];
			}
			?>
			</span>
		</div>
		<div id="x_dy">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao polaridade reversa'];
			}
			?>
			</span>
		</div>
		<div id="x_dz">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao de sobrecorrente CA'];
			}
			?>
			</span>
		</div>
		<div id="x_d">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao contra superaquecimento'];
			}
			?>
			</span>
		</div>
		<div id="x_ea">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['peso'];
			}
			?>
			</span>
		</div>
		<div id="x_eb">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['garantia'];
			}
			?>
			</span>
		</div>
		<div id="x_ec">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['interfaces de comunicacao'];
			}
			?>
			</span>
		</div>
		<div id="x_ed">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['link'];
			}
			?>
			</span>
		</div>
		<div id="Potencia_nominal">
			<span>Potencia nominal</span>
		</div>
		<div id="Maxima_potencia_AC">
			<span>Maxima potencia AC</span>
		</div>
		<div id="Maxima_potencia_de_entrada">
			<span>Maxima potencia de entrada</span>
		</div>
		<div id="Maxima_tenso_de_entrada_DC">
			<span>Maxima tensão de entrada DC</span>
		</div>
		<div id="MTTP_faixa_de_tenso_DCstartup">
			<span>MTTP faixa de tensão operacional</span>
		</div>
		<div id="Minima_tenso_DCstartup">
			<span>Minima tensão DC/startup</span>
		</div>
		<div id="Numero_de_MTTP">
			<span>Numero de MTTP</span>
		</div>
		<div id="Maxima_corrente_de_entrada">
			<span>Maxima corrente de entrada</span>
		</div>
		<div id="Numero_de_conjuntos_de_conecto">
			<span>Numero de conjuntos de conectores DC</span>
		</div>
		<div id="Tipo_de_terminal_DC">
			<span>Tipo de terminal DC</span>
		</div>
		<div id="Corrente_nominal_da_saida">
			<span>Corrente nominal da saida</span>
		</div>
		<div id="Maxima_corrente_de_saida">
			<span>Maxima corrente de saida</span>
		</div>
		<div id="Tenso_nominal_da_rede_eletrica">
			<span>Tensão nominal da rede eletrica</span>
		</div>
		<div id="Frequencia_da_rede">
			<span>Frequencia da rede</span>
		</div>
		<div id="Faixa_de_tenso_AC_min">
			<span>Faixa de tensão AC min</span>
		</div>
		<div id="Faixa_de_tenso_AC_max">
			<span>Faixa de tensão AC max</span>
		</div>
		<div id="THDI">
			<span>THDI</span>
		</div>
		<div id="Maxima_eficiencia">
			<span>Maxima eficiencia</span>
		</div>
		<div id="MPPT_preciso">
			<span>MPPT precisão</span>
		</div>
		<div id="Proteo_de_isolamento_DC">
			<span>Proteção de isolamento DC</span>
		</div>
		<div id="Proteo_polaridade_reversa">
			<span>Proteção polaridade reversa</span>
		</div>
		<div id="Proteo_de_sobrecorrente_CA">
			<span>Proteção de sobrecorrente CA</span>
		</div>
		<div id="Proteo_contra_superaquecimento">
			<span>Proteção contra superaquecimento</span>
		</div>
		<div id="Peso">
			<span>Peso</span>
		</div>
		<div id="Garantia">
			<span>Garantia</span>
		</div>
		<div id="Interfaces_de_comunicao">
			<span>Interfaces de comunicação</span>
		</div>
		<div id="Link">
			<span>Link</span>
		</div>
	</div>
	<div id="Grupo_60">
		<svg class="Retngulo_189_ex">
			<rect id="Retngulo_189_ex" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_252_ey">
			<rect id="Retngulo_252_ey" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_190_ez">
			<rect id="Retngulo_190_ez" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_251_e">
			<rect id="Retngulo_251_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_191_e">
			<rect id="Retngulo_191_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_250_e">
			<rect id="Retngulo_250_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_192_e">
			<rect id="Retngulo_192_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_249_e">
			<rect id="Retngulo_249_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_193_e">
			<rect id="Retngulo_193_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_248_e">
			<rect id="Retngulo_248_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_194_e">
			<rect id="Retngulo_194_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_247_e">
			<rect id="Retngulo_247_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_195_e">
			<rect id="Retngulo_195_e" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_246_fa">
			<rect id="Retngulo_246_fa" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_196_fb">
			<rect id="Retngulo_196_fb" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_245_fc">
			<rect id="Retngulo_245_fc" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_197_fd">
			<rect id="Retngulo_197_fd" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_244_fe">
			<rect id="Retngulo_244_fe" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_198_ff">
			<rect id="Retngulo_198_ff" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_243_fg">
			<rect id="Retngulo_243_fg" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_199_fh">
			<rect id="Retngulo_199_fh" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_242_fi">
			<rect id="Retngulo_242_fi" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_200_fj">
			<rect id="Retngulo_200_fj" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_241_fk">
			<rect id="Retngulo_241_fk" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_201_fl">
			<rect id="Retngulo_201_fl" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_240_fm">
			<rect id="Retngulo_240_fm" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_202_fn">
			<rect id="Retngulo_202_fn" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_239_fo">
			<rect id="Retngulo_239_fo" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_203_fp">
			<rect id="Retngulo_203_fp" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_238_fq">
			<rect id="Retngulo_238_fq" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_204_fr">
			<rect id="Retngulo_204_fr" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_237_fs">
			<rect id="Retngulo_237_fs" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_205_ft">
			<rect id="Retngulo_205_ft" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_236_fu">
			<rect id="Retngulo_236_fu" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_206_fv">
			<rect id="Retngulo_206_fv" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_235_fw">
			<rect id="Retngulo_235_fw" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_207_fx">
			<rect id="Retngulo_207_fx" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_234_fy">
			<rect id="Retngulo_234_fy" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_208_fz">
			<rect id="Retngulo_208_fz" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_233_f">
			<rect id="Retngulo_233_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_209_f">
			<rect id="Retngulo_209_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_232_f">
			<rect id="Retngulo_232_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_210_f">
			<rect id="Retngulo_210_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_231_f">
			<rect id="Retngulo_231_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_211_f">
			<rect id="Retngulo_211_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_230_f">
			<rect id="Retngulo_230_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_212_f">
			<rect id="Retngulo_212_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_229_f">
			<rect id="Retngulo_229_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_213_f">
			<rect id="Retngulo_213_f" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_228_ga">
			<rect id="Retngulo_228_ga" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_214_gb">
			<rect id="Retngulo_214_gb" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_227_gc">
			<rect id="Retngulo_227_gc" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_215_gd">
			<rect id="Retngulo_215_gd" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_226_ge">
			<rect id="Retngulo_226_ge" rx="0" ry="0" x="0" y="0" width="600" height="100">
			</rect>
		</svg>
		<svg class="Retngulo_216_gf">
			<rect id="Retngulo_216_gf" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_225_gg">
			<rect id="Retngulo_225_gg" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_217_gh">
			<rect id="Retngulo_217_gh" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_224_gi">
			<rect id="Retngulo_224_gi" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_218_gj">
			<rect id="Retngulo_218_gj" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_223_gk">
			<rect id="Retngulo_223_gk" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_219_gl">
			<rect id="Retngulo_219_gl" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_222_gm">
			<rect id="Retngulo_222_gm" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_220_gn">
			<rect id="Retngulo_220_gn" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<svg class="Retngulo_221_go">
			<rect id="Retngulo_221_go" rx="0" ry="0" x="0" y="0" width="525" height="37">
			</rect>
		</svg>
		<div id="Fabricante_gp">
			<span>Fabricante</span>
		</div>
		<div id="x_gq">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['fabricante'];
			}
			?>
			</span>
		</div>
		<div id="x_gr">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['potencia nominal'];
			}
			?>
			</span>
		</div>
		<div id="x_gs">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima potencia AC'];
			}
			?>
			</span>
		</div>
		<div id="x_gt">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima potencia de entrada'];
			}
			?>
			</span>
		</div>
		<div id="x_gu">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima tensao de entrada DC'];
			}
			?>
			</span>
		</div>
		<div id="x_gv">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['MTTP faixa de tensao operacional'];
			}
			?>
			</span>
		</div>
		<div id="x_gw">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['minima tensao DC/startup'];
			}
			?>
			</span>
		</div>
		<div id="x_gx">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['numero de MTTP'];
			}
			?>
			</span>
		</div>
		<div id="x_gy">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima corrente de entrada'];
			}
			?>
			</span>
		</div>
		<div id="x_gz">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['numero de conjuntos de conectores DC'];
			}
			?>
			</span>
		</div>
		<div id="x_g">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tipo de terminal DC'];
			}
			?>
			</span>
		</div>
		<div id="x_ha">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['corrente nominal da saida'];
			}
			?>
			</span>
		</div>
		<div id="x_hb">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima corrente de saida'];
			}
			?>
			</span>
		</div>
		<div id="x_hc">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['tensao nominal da rede eletrica'];
			}
			?>
			</span>
		</div>
		<div id="x_hd">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['frequencia da rede'];
			}
			?>
			</span>
		</div>
		<div id="x_he">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['faixa de tensao AC min'];
			}
			?>
			</span>
		</div>
		<div id="x_hf">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['faixa de tensao AC max'];
			}
			?>
			</span>
		</div>
		<div id="x_hg">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['THDi'];
			}
			?>
			</span>
		</div>
		<div id="x_hh">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['maxima eficiencia'];
			}
			?>
			</span>
		</div>
		<div id="x_hi">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['MPPT precisao'];
			}
			?>
			</span>
		</div>
		<div id="x_hj">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao de isolamento DC'];
			}
			?>
			</span>
		</div>
		<div id="x_hk">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao polaridade reversa'];
			}
			?>
			</span>
		</div>
		<div id="x_hl">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao de sobrecorrente CA'];
			}
			?>
			</span>
		</div>
		<div id="x_hm">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['protecao contra superaquecimento'];
			}
			?>
			</span>
		</div>
		<div id="x_hn">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['peso'];
			}
			?>
			</span>
		</div>
		<div id="x_ho">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				 echo $row['garantia'];
			}
			?>
			</span>
		</div>
		<div id="x_hp">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['interfaces de comunicacao'];
			}
			?>
			</span>
		</div>
		<div id="x_hq">
			<span>
			<?php
				$sql = mysqli_query($link, "SELECT * FROM inversor_fotovoltaico where nome = '$title2'");
			while ($row = mysqli_fetch_array($sql))
			{
				echo $row['link'];
			}
			?>
			</span>
		</div>
		<div id="Potencia_nominal_hi">
			<span>Potencia nominal</span>
		</div>
		<div id="Maxima_potencia_AC_hj">
			<span>Maxima potencia AC</span>
		</div>
		<div id="Maxima_potencia_de_entrada_hk">
			<span>Maxima potencia de entrada</span>
		</div>
		<div id="Maxima_tenso_de_entrada_DC_hl">
			<span>Maxima tensão de entrada DC</span>
		</div>
		<div id="MTTP_faixa_de_tenso_DCstartup_hm">
			<span>MTTP faixa de tensão operacional</span>
		</div>
		<div id="Minima_tenso_DCstartup_hn">
			<span>Minima tensão DC/startup</span>
		</div>
		<div id="Numero_de_MTTP_ho">
			<span>Numero de MTTP</span>
		</div>
		<div id="Maxima_corrente_de_entrada_hp">
			<span>Maxima corrente de entrada</span>
		</div>
		<div id="Numero_de_conjuntos_de_conecto_hq">
			<span>Numero de conjuntos de conectores DC</span>
		</div>
		<div id="Tipo_de_terminal_DC_hr">
			<span>Tipo de terminal DC</span>
		</div>
		<div id="Corrente_nominal_da_saida_hs">
			<span>Corrente nominal da saida</span>
		</div>
		<div id="Maxima_corrente_de_saida_ht">
			<span>Maxima corrente de saida</span>
		</div>
		<div id="Tenso_nominal_da_rede_eletrica_hu">
			<span>Tensão nominal da rede eletrica</span>
		</div>
		<div id="Frequencia_da_rede_hv">
			<span>Frequencia da rede</span>
		</div>
		<div id="Faixa_de_tenso_AC_min_hw">
			<span>Faixa de tensão AC min</span>
		</div>
		<div id="Faixa_de_tenso_AC_max_hx">
			<span>Faixa de tensão AC max</span>
		</div>
		<div id="THDI_hy">
			<span>THDI</span>
		</div>
		<div id="Maxima_eficiencia_hz">
			<span>Maxima eficiencia</span>
		</div>
		<div id="MPPT_preciso_h">
			<span>MPPT precisão</span>
		</div>
		<div id="Proteo_de_isolamento_DC_h">
			<span>Proteção de isolamento DC</span>
		</div>
		<div id="Proteo_polaridade_reversa_h">
			<span>Proteção polaridade reversa</span>
		</div>
		<div id="Proteo_de_sobrecorrente_CA_h">
			<span>Proteção de sobrecorrente CA</span>
		</div>
		<div id="Proteo_contra_superaquecimento_h">
			<span>Proteção contra superaquecimento</span>
		</div>
		<div id="Peso_h">
			<span>Peso</span>
		</div>
		<div id="Garantia_h">
			<span>Garantia</span>
		</div>
		<div id="Interfaces_de_comunicao_h">
			<span>Interfaces de comunicação</span>
		</div>
		<div id="Link_h">
			<span>Link</span>
		</div>
	</div>
	</div>
	<div id="MELHOR2">
		<span><?php
					$potencia_string = "potencia nominal";
					$Maxima_potencia_AC = "maxima potencia AC";
					$Maxima_potencia_de_entrada = "maxima potencia de entrada";
					$Maxima_tensao_de_entrada_DC = "maxima tensao de entrada DC";
					$Minima_tensao_DC = "minima tensao DC/startup";
					$Numero_de_MTTP = "numero de MTTP";
					$Maxima_corrente_de_entrada = "maxima corrente de entrada";
					$Maxima_eficiencia = "maxima eficiencia";
					$MTTP_faixa_de_tensao_operacional = "MTTP faixa de tensao operacional";
					$string_por_entrada_DC =  "string por entrada DC";
					$numero_de_conjuntos_de_conectores_DC = "numero de conjuntos de conectores DC";
					$corrente_nominal_de_saida = "corrente nominal de saida";
					$maxima_corrente_de_saida = "maxima corrente de saida";
					$faixa_de_tensao_AC_min = "faixa de tensao AC min";
					$faixa_de_tensao_AC_max = "faixa de tensao AC max";
					$THDi = "THDi";
					$MPPT_precisao = "MPPT precisao";
					$protecao_de_isolamento_DC = "protecao de isolamento DC"; 
					$protecao_polaridade_reversa = "protecao polaridade reversa";
					$protecao_de_sobrecorrente_CA = "protecao de sobrecorrente CA";
					$protecao_contra_superaquecimento = "protecao contra superaquecimento";
					$tensao_nominal_da_rede_eletrica = "tensao nominal da rede eletrica";
					$tipos_de_terminal_DC = "tipo de terminal DC";
					$frequencia_da_rede = "frequencia da rede";
					

		$score1 = 0;
		$score2 = 0;

		$frequencia_da_rede1 = mysqli_query($link, "SELECT '$frequencia_da_rede' FROM inversor_fotovoltaico where nome = '$title'");
		$frequencia_da_rede2 = mysqli_query($link, "SELECT '$frequencia_da_rede' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_frequencia_da_rede1 = mysqli_fetch_row($frequencia_da_rede1);
		$compara_frequencia_da_rede2 = mysqli_fetch_row($frequencia_da_rede2);
		
			$score_frequencia_da_rede1 = 0;
			$score_frequencia_da_rede2 = 0;

		if($compara_frequencia_da_rede1 == "60Hz"){
			$score_frequencia_da_rede1 += 1;
		}
		if($compara_frequencia_da_rede1 == "50Hz/60Hz"){
			$score_frequencia_da_rede1 += 2;
		}
		//parte 2
		if($compara_frequencia_da_rede2 == "60Hz"){
			$score_frequencia_da_rede2 += 1;
		}
		if($compara_frequencia_da_rede2 == "50Hz/60Hz"){
			$score_frequencia_da_rede2 += 2;
		}
		if($score_frequencia_da_rede1 > $score_frequencia_da_rede2){
			$score1 += 1;
		}
		elseif($score_frequencia_da_rede1 < $score_frequencia_da_rede2){
			$score2 += 1;
		}

		$tipos_de_terminal_DC1 = mysqli_query($link, "SELECT '$tipos_de_terminal_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$tipos_de_terminal_DC2 = mysqli_query($link, "SELECT '$tipos_de_terminal_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_tipos_de_terminal_DC1 = mysqli_fetch_row($tipos_de_terminal_DC1);
		$compara_tipos_de_terminal_DC2 = mysqli_fetch_row($tipos_de_terminal_DC2);
		
			$score_tipos_de_terminal_DC1 = 0;
			$score_tipos_de_terminal_DC2 = 0;

		
			if($compara_tipos_de_terminal_DC1 == "MC4"){
				$score_tipos_de_terminal_DC1 += 1;
			}
			if($compara_tipos_de_terminal_DC1 == "H4"){
				$score_tipos_de_terminal_DC1 += 1;
			}
			if($compara_tipos_de_terminal_DC1 == "MC4/H4"){
				$score_tipos_de_terminal_DC1 += 2;
			}
			if($compara_tipos_de_terminal_DC1 == "SUNCLIX"){
				$score_tipos_de_terminal_DC1 += 1;
			}
			// parte 2
			if($compara_tipos_de_terminal_DC2 == "MC4"){
				$score_tipos_de_terminal_DC2 += 1;
			}
			if($compara_tipos_de_terminal_DC2 == "H4"){
				$score_tipos_de_terminal_DC2 += 1;
			}
			if($compara_tipos_de_terminal_DC2 == "MC4/H4"){
				$score_tipos_de_terminal_DC2 += 2;
			}
			if($compara_tipos_de_terminal_DC2 == "SUNCLIX"){
				$score_tipos_de_terminal_DC2 += 1;
			}
			if($score_tipos_de_terminal_DC1 > $score_tipos_de_terminal_DC2){
				$score1 += 1;
			}
			elseif($score_tipos_de_terminal_DC1 < $score_tipos_de_terminal_DC2){
				$score2 += 1;
			}
		

		$tensao_nominal_da_rede_eletrica1 = mysqli_query($link, "SELECT '$tensao_nominal_da_rede_eletrica' FROM inversor_fotovoltaico where nome = '$title'");
		$tensao_nominal_da_rede_eletrica2 = mysqli_query($link, "SELECT '$tensao_nominal_da_rede_eletrica' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_tensao_nominal_da_rede_eletrica1 = mysqli_fetch_row($tensao_nominal_da_rede_eletrica1);
		$compara_tensao_nominal_da_rede_eletrica2 = mysqli_fetch_row($tensao_nominal_da_rede_eletrica2);
		
			$score_tensao_nominal_da_rede_eletrica1 = 0;
			$score_tensao_nominal_da_rede_eletrica2 = 0;

				if($compara_tensao_nominal_da_rede_eletrica1 == "220V"){
					$score_tensao_nominal_da_rede_eletrica1 += 1;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "230V"){
					$score_tensao_nominal_da_rede_eletrica1 += 2;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "400V"){
					$score_tensao_nominal_da_rede_eletrica1 += 3;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "160V/300V"){
					$score_tensao_nominal_da_rede_eletrica1 += 4;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "176V/242V"){
					$score_tensao_nominal_da_rede_eletrica1 += 5;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "180V/300V"){
					$score_tensao_nominal_da_rede_eletrica1 += 6;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/230V"){
					$score_tensao_nominal_da_rede_eletrica1 += 7;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/230V/240V"){
					$score_tensao_nominal_da_rede_eletrica1 += 8;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/380V, 230V/400V"){
					$score_tensao_nominal_da_rede_eletrica1 += 9;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/380V,230V/400V,240V/415V"){
					$score_tensao_nominal_da_rede_eletrica1 += 10;
				}

				// parte 2

			
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V"){
				$score_tensao_nominal_da_rede_eletrica2 += 1;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "230V"){
				$score_tensao_nominal_da_rede_eletrica2 += 2;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "400V"){
				$score_tensao_nominal_da_rede_eletrica2 += 3;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "160V/300V"){
				$score_tensao_nominal_da_rede_eletrica2 += 4;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "176V/242V"){
				$score_tensao_nominal_da_rede_eletrica2 += 5;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "180V/300V"){
				$score_tensao_nominal_da_rede_eletrica2 += 6;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/230V"){
				$score_tensao_nominal_da_rede_eletrica2 += 7;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/230V/240V"){
				$score_tensao_nominal_da_rede_eletrica2 += 8;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/380V, 230V/400V"){
				$score_tensao_nominal_da_rede_eletrica2 += 9;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/380V,230V/400V,240V/415V"){
				$score_tensao_nominal_da_rede_eletrica2 += 10;
			}
			if($score_tensao_nominal_da_rede_eletrica1 > $score_tensao_nominal_da_rede_eletrica2){
				$score1 += 1;
			}
			elseif($score_tensao_nominal_da_rede_eletrica1 < $score_tensao_nominal_da_rede_eletrica2){
				$score2 += 1;
			}
			


		$protecao_contra_superaquecimento1 = mysqli_query($link, "SELECT '$protecao_contra_superaquecimento' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_contra_superaquecimento2 = mysqli_query($link, "SELECT '$protecao_contra_superaquecimento' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_contra_superaquecimento1 = mysqli_fetch_row($protecao_contra_superaquecimento1);
		$compara_protecao_contra_superaquecimento2 = mysqli_fetch_row($protecao_contra_superaquecimento2);
		
		if($compara_protecao_contra_superaquecimento1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_contra_superaquecimento2 == "Integrado"){
				$score2 += 1;
		}

		$protecao_de_sobrecorrente_CA1 = mysqli_query($link, "SELECT '$protecao_de_sobrecorrente_CA' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_de_sobrecorrente_CA2 = mysqli_query($link, "SELECT '$protecao_de_sobrecorrente_CA' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_de_sobrecorrente_CA1 = mysqli_fetch_row($protecao_de_sobrecorrente_CA1);
		$compara_protecao_de_sobrecorrente_CA2 = mysqli_fetch_row($protecao_de_sobrecorrente_CA2);
		
		if($compara_protecao_de_sobrecorrente_CA1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_de_sobrecorrente_CA2 == "Integrado"){
				$score2 += 1;
		}

		$protecao_polaridade_reversa1 = mysqli_query($link, "SELECT '$protecao_polaridade_reversa' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_polaridade_reversa2 = mysqli_query($link, "SELECT '$protecao_polaridade_reversa' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_polaridade_reversa1 = mysqli_fetch_row($protecao_polaridade_reversa1);
		$compara_protecao_polaridade_reversa2 = mysqli_fetch_row($protecao_polaridade_reversa2);
		
		if($compara_protecao_polaridade_reversa1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_polaridade_reversa2 == "Integrado"){
				$score2 += 1;
		}

		$protecao_de_isolamento_DC1 = mysqli_query($link, "SELECT '$protecao_de_isolamento_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_de_isolamento_DC2 = mysqli_query($link, "SELECT '$protecao_de_isolamento_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_de_isolamento_DC1 = mysqli_fetch_row($protecao_de_isolamento_DC1);
		$compara_protecao_de_isolamento_DC2 = mysqli_fetch_row($protecao_de_isolamento_DC2);
		
		if($compara_protecao_de_isolamento_DC1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_de_isolamento_DC2 == "Integrado"){
				$score2 += 1;
		}
		

		$MPPT_precisao1 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM inversor_fotovoltaico where nome = '$title'");
		$MPPT_precisao2 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_MPPT_precisao1 = mysqli_fetch_row($MPPT_precisao1);
		$compara_MPPT_precisao2 = mysqli_fetch_row($MPPT_precisao2);
		
		if($compara_MPPT_precisao1 > $compara_MPPT_precisao2){
				$score1 += 1;
		}
		elseif($compara_MPPT_precisao1 < $compara_MPPT_precisao2){
				$score2 += 1;
		}

		$THDi1 = mysqli_query($link, "SELECT '$THDi' FROM inversor_fotovoltaico where nome = '$title'");
		$THDi2 = mysqli_query($link, "SELECT '$THDi' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_THDi1 = mysqli_fetch_row($THDi1);
		$compara_THDi2 = mysqli_fetch_row($THDi2);
		
		if($compara_THDi1 < $compara_THDi2){
				$score1 += 1;
		}
		elseif($compara_THDi1 > $compara_THDi2){
				$score2 += 1;
		}

		$faixa_de_tensao_AC_max1 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_max' FROM inversor_fotovoltaico where nome = '$title'");
		$faixa_de_tensao_AC_max2 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_max' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_faixa_de_tensao_AC_max1 = mysqli_fetch_row($faixa_de_tensao_AC_max1);
		$compara_faixa_de_tensao_AC_max2 = mysqli_fetch_row($faixa_de_tensao_AC_max2);
		
		if($compara_faixa_de_tensao_AC_max1 > $compara_faixa_de_tensao_AC_max2){
				$score1 += 1;
		}
		elseif($compara_faixa_de_tensao_AC_max1 < $compara_faixa_de_tensao_AC_max2){
				$score2 += 1;
		}

		$faixa_de_tensao_AC_min1 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_min' FROM inversor_fotovoltaico where nome = '$title'");
		$faixa_de_tensao_AC_min2 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_min' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_faixa_de_tensao_AC_min1 = mysqli_fetch_row($faixa_de_tensao_AC_min1);
		$compara_faixa_de_tensao_AC_min2 = mysqli_fetch_row($faixa_de_tensao_AC_min2);
		
		if($compara_faixa_de_tensao_AC_min1 < $compara_faixa_de_tensao_AC_min2){
				$score1 += 1;
		}
		elseif($compara_faixa_de_tensao_AC_min1 > $compara_faixa_de_tensao_AC_min2){
				$score2 += 1;
		}

		$maxima_corrente_de_saida1 = mysqli_query($link, "SELECT '$maxima_corrente_de_saida' FROM inversor_fotovoltaico where nome = '$title'");
		$maxima_corrente_de_saida2 = mysqli_query($link, "SELECT '$maxima_corrente_de_saida' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_maxima_corrente_de_saida1 = mysqli_fetch_row($maxima_corrente_de_saida1);
		$compara_maxima_corrente_de_saida2 = mysqli_fetch_row($maxima_corrente_de_saida2);
		
		if($compara_maxima_corrente_de_saida1 > $compara_maxima_corrente_de_saida2){
				$score1 += 1;
		}
		elseif($compara_maxima_corrente_de_saida1 < $compara_maxima_corrente_de_saida2){
				$score2 += 1;
		}

		$corrente_nominal_de_saida1 = mysqli_query($link, "SELECT '$corrente_nominal_de_saida' FROM inversor_fotovoltaico where nome = '$title'");
		$corrente_nominal_de_saida2 = mysqli_query($link, "SELECT '$corrente_nominal_de_saida' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_corrente_nominal_de_saida1 = mysqli_fetch_row($corrente_nominal_de_saida1);
		$compara_corrente_nominal_de_saida2 = mysqli_fetch_row($corrente_nominal_de_saida2);
		
		if($compara_corrente_nominal_de_saida1 > $compara_corrente_nominal_de_saida2){
				$score1 += 1;
		}
		elseif($compara_corrente_nominal_de_saida1 < $compara_corrente_nominal_de_saida2){
				$score2 += 1;
		}

		$numero_de_conjuntos_de_conectores_DC1 = mysqli_query($link, "SELECT '$numero_de_conjuntos_de_conectores_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$numero_de_conjuntos_de_conectores_DC2 = mysqli_query($link, "SELECT '$numero_de_conjuntos_de_conectores_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_numero_de_conjuntos_de_conectores_DC1 = mysqli_fetch_row($numero_de_conjuntos_de_conectores_DC1);
		$compara_numero_de_conjuntos_de_conectores_DC2 = mysqli_fetch_row($numero_de_conjuntos_de_conectores_DC2);
		
		if($compara_numero_de_conjuntos_de_conectores_DC1 > $compara_numero_de_conjuntos_de_conectores_DC2){
				$score1 += 1;
		}
		elseif($compara_numero_de_conjuntos_de_conectores_DC1 < $compara_numero_de_conjuntos_de_conectores_DC2){
				$score2 += 1;
		}

		$string_por_entrada_DC1 = mysqli_query($link, "SELECT '$string_por_entrada_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$string_por_entrada_DC2 = mysqli_query($link, "SELECT '$string_por_entrada_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_string_por_entrada_DC1 = mysqli_fetch_row($string_por_entrada_DC1);
		$compara_string_por_entrada_DC2 = mysqli_fetch_row($string_por_entrada_DC2);
		
		if($compara_string_por_entrada_DC1 > $compara_string_por_entrada_DC2){
				$score1 += 1;
		}
		elseif($compara_string_por_entrada_DC1 < $compara_string_por_entrada_DC2){
				$score2 += 1;
		}

		$MTTP_faixa_de_tensao_operacional1 = mysqli_query($link, "SELECT '$MTTP_faixa_de_tensao_operacional' FROM inversor_fotovoltaico where nome = '$title'");
		$MTTP_faixa_de_tensao_operacional2 = mysqli_query($link, "SELECT '$MTTP_faixa_de_tensao_operacional' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_MTTP_faixa_de_tensao_operacional1 = mysqli_fetch_row($MTTP_faixa_de_tensao_operacional1);
		$compara_MTTP_faixa_de_tensao_operacional2 = mysqli_fetch_row($MTTP_faixa_de_tensao_operacional2);
		
			$score_MTTP_faixa_de_tensao_operacional1 = 0;
			$score_MTTP_faixa_de_tensao_operacional2 = 0;


			if($compara_MTTP_faixa_de_tensao_operacional1 == "25 ~ 55V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 1;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "180 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 2;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "80 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 3;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 4;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "50 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "100 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "90 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "390 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "90 ~ 520V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 7;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "50 ~ 490V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 8;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "50 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "100 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "80 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 540V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "320 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "65 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 12;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "60 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 13;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~580V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 580V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "240 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 15;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "210 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 16;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "200 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 17;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "250 ~ 950V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 18;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "140 ~ 1000V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 19;
			}
			// parte 2
			if($compara_MTTP_faixa_de_tensao_operacional2 == "25 ~ 55V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 1;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "180 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 2;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "80 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 3;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 4;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "50 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "100 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "90 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "390 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "90 ~ 520V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 7;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "50 ~ 490V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 8;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "50 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "100 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "80 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 540V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "320 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "65 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 12;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "60 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 13;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~580V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 580V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "240 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 15;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "210 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 16;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "200 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 17;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "250 ~ 950V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 18;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "140 ~ 1000V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 19;
			}
			if($score_MTTP_faixa_de_tensao_operacional1 > $score_MTTP_faixa_de_tensao_operacional2){
				$score1 += 1;
			}
			elseif($score_MTTP_faixa_de_tensao_operacional1 < $score_MTTP_faixa_de_tensao_operacional2){
				$score2 += 1;
			}


		$Maxima_eficiencia1 = mysqli_query($link, "SELECT '$Maxima_eficiencia' FROM inversor_fotovoltaico where nome = '$title'");
		$Maxima_eficiencia2 = mysqli_query($link, "SELECT '$Maxima_eficiencia' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Maxima_eficiencia1 = mysqli_fetch_row($Maxima_eficiencia1);
		$compara_Maxima_eficiencia2 = mysqli_fetch_row($Maxima_eficiencia2);
		
		if($compara_Maxima_eficiencia1 > $compara_Maxima_eficiencia2){
				$score1 += 1;
		}
		elseif($compara_Maxima_eficiencia1 < $compara_Maxima_eficiencia2){
				$score2 += 1;
		}

		$Maxima_corrente_de_entrada1 = mysqli_query($link, "SELECT '$Maxima_corrente_de_entrada' FROM inversor_fotovoltaico where nome = '$title'");
		$Maxima_corrente_de_entrada2 = mysqli_query($link, "SELECT '$Maxima_corrente_de_entrada' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Maxima_corrente_de_entrada1 = mysqli_fetch_row($Maxima_corrente_de_entrada1);
		$compara_Maxima_corrente_de_entrada2 = mysqli_fetch_row($Maxima_corrente_de_entrada2);
		
		if($compara_Maxima_corrente_de_entrada1 > $compara_Maxima_corrente_de_entrada2){
				$score1 += 1;
		}
		elseif($compara_Maxima_corrente_de_entrada1 < $compara_Maxima_corrente_de_entrada2){
				$score2 += 1;
		}

		$Numero_de_MTTP1 = mysqli_query($link, "SELECT '$Numero_de_MTTP' FROM inversor_fotovoltaico where nome = '$title'");
		$Numero_de_MTTP2 = mysqli_query($link, "SELECT '$Numero_de_MTTP' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Numero_de_MTTP1 = mysqli_fetch_row($Numero_de_MTTP1);
		$compara_Numero_de_MTTP2 = mysqli_fetch_row($Numero_de_MTTP2);
		
		if($compara_Numero_de_MTTP1 > $compara_Numero_de_MTTP2){
				$score1 += 1;
		}
		elseif($compara_Numero_de_MTTP1 < $compara_Numero_de_MTTP2){
				$score2 += 1;
		}
		
		$Minima_tensao_DC1 = mysqli_query($link, "SELECT '$Minima_tensao_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$Minima_tensao_DC2 = mysqli_query($link, "SELECT '$Minima_tensao_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Minima_tensao_DC1 = mysqli_fetch_row($Minima_tensao_DC1);
		$compara_Minima_tensao_DC2 = mysqli_fetch_row($Minima_tensao_DC2);
		
		if($compara_Minima_tensao_DC1 < $compara_Minima_tensao_DC2){
				$score1 += 1;
		}
		elseif($compara_Minima_tensao_DC1 > $compara_Minima_tensao_DC2){
				$score2 += 1;
		}

		$maxpe1 = mysqli_query($link, "SELECT '$Maxima_potencia_de_entrada' FROM inversor_fotovoltaico where nome = '$title'");
		$maxpe2 = mysqli_query($link, "SELECT '$Maxima_potencia_de_entrada' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_maxpe1 = mysqli_fetch_row($maxpe1);
		$compara_maxpe2 = mysqli_fetch_row($maxpe2);
		
		if($compara_maxpe1 > $compara_maxpe2){
				$score1 += 1;
		}
		elseif($compara_maxpe1 < $compara_maxpe2){
				$score2 += 1;
		}

		$maxp1 = mysqli_query($link, "SELECT '$Maxima_potencia_AC' FROM inversor_fotovoltaico where nome = '$title'");
		$maxp2 = mysqli_query($link, "SELECT '$Maxima_potencia_AC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_maxp1 = mysqli_fetch_row($maxp1);
		$compara_maxp2 = mysqli_fetch_row($maxp2);
		
		if($compara_maxp1 > $compara_maxp2){
				$score1 += 1;
		}
		elseif($compara_maxp2 < $compara_maxp2){
				$score2 += 1;
		}
		
		$potencia1 = mysqli_query($link, "SELECT '$potencia_string' FROM inversor_fotovoltaico where nome = '$title'");
		$potencia2 = mysqli_query($link, "SELECT '$potencia_string' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_potencia1 = mysqli_fetch_row($potencia1);
		$compara_potencia2 = mysqli_fetch_row($potencia2);
		
		if($compara_potencia1 > $compara_potencia2){
				$score1 += 1;
		}
		elseif($compara_potencia1 < $compara_potencia2){
				$score2 += 1;
		}

		$peso1 = mysqli_query($link, "SELECT peso FROM inversor_fotovoltaico where nome = '$title'");
		$peso2 = mysqli_query($link, "SELECT peso FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_peso1 = mysqli_fetch_row($peso1);
		$compara_peso2 = mysqli_fetch_row($peso2);
		
		if($compara_peso1 < $compara_peso2){
				$score1 -= 1;
		}
		elseif($compara_peso1 > $compara_peso2){
				$score2 -= 1;
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
					$potencia_string = "potencia nominal";
					$Maxima_potencia_AC = "maxima potencia AC";
					$Maxima_potencia_de_entrada = "maxima potencia de entrada";
					$Maxima_tensao_de_entrada_DC = "maxima tensao de entrada DC";
					$Minima_tensao_DC = "minima tensao DC/startup";
					$Numero_de_MTTP = "numero de MTTP";
					$Maxima_corrente_de_entrada = "maxima corrente de entrada";
					$Maxima_eficiencia = "maxima eficiencia";
					$MTTP_faixa_de_tensao_operacional = "MTTP faixa de tensao operacional";
					$string_por_entrada_DC =  "string por entrada DC";
					$numero_de_conjuntos_de_conectores_DC = "numero de conjuntos de conectores DC";
					$corrente_nominal_de_saida = "corrente nominal de saida";
					$maxima_corrente_de_saida = "maxima corrente de saida";
					$faixa_de_tensao_AC_min = "faixa de tensao AC min";
					$faixa_de_tensao_AC_max = "faixa de tensao AC max";
					$THDi = "THDi";
					$MPPT_precisao = "MPPT precisao";
					$protecao_de_isolamento_DC = "protecao de isolamento DC"; 
					$protecao_polaridade_reversa = "protecao polaridade reversa";
					$protecao_de_sobrecorrente_CA = "protecao de sobrecorrente CA";
					$protecao_contra_superaquecimento = "protecao contra superaquecimento";
					$tensao_nominal_da_rede_eletrica = "tensao nominal da rede eletrica";
					$tipos_de_terminal_DC = "tipo de terminal DC";
					$frequencia_da_rede = "frequencia da rede";
					

		$score1 = 0;
		$score2 = 0;

		$frequencia_da_rede1 = mysqli_query($link, "SELECT '$frequencia_da_rede' FROM inversor_fotovoltaico where nome = '$title'");
		$frequencia_da_rede2 = mysqli_query($link, "SELECT '$frequencia_da_rede' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_frequencia_da_rede1 = mysqli_fetch_row($frequencia_da_rede1);
		$compara_frequencia_da_rede2 = mysqli_fetch_row($frequencia_da_rede2);
		
			$score_frequencia_da_rede1 = 0;
			$score_frequencia_da_rede2 = 0;

		if($compara_frequencia_da_rede1 == "60Hz"){
			$score_frequencia_da_rede1 += 1;
		}
		if($compara_frequencia_da_rede1 == "50Hz/60Hz"){
			$score_frequencia_da_rede1 += 2;
		}
		//parte 2
		if($compara_frequencia_da_rede2 == "60Hz"){
			$score_frequencia_da_rede2 += 1;
		}
		if($compara_frequencia_da_rede2 == "50Hz/60Hz"){
			$score_frequencia_da_rede2 += 2;
		}
		if($score_frequencia_da_rede1 > $score_frequencia_da_rede2){
			$score1 += 1;
		}
		elseif($score_frequencia_da_rede1 < $score_frequencia_da_rede2){
			$score2 += 1;
		}

		$tipos_de_terminal_DC1 = mysqli_query($link, "SELECT '$tipos_de_terminal_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$tipos_de_terminal_DC2 = mysqli_query($link, "SELECT '$tipos_de_terminal_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_tipos_de_terminal_DC1 = mysqli_fetch_row($tipos_de_terminal_DC1);
		$compara_tipos_de_terminal_DC2 = mysqli_fetch_row($tipos_de_terminal_DC2);
		
			$score_tipos_de_terminal_DC1 = 0;
			$score_tipos_de_terminal_DC2 = 0;

		
			if($compara_tipos_de_terminal_DC1 == "MC4"){
				$score_tipos_de_terminal_DC1 += 1;
			}
			if($compara_tipos_de_terminal_DC1 == "H4"){
				$score_tipos_de_terminal_DC1 += 1;
			}
			if($compara_tipos_de_terminal_DC1 == "MC4/H4"){
				$score_tipos_de_terminal_DC1 += 2;
			}
			if($compara_tipos_de_terminal_DC1 == "SUNCLIX"){
				$score_tipos_de_terminal_DC1 += 1;
			}
			// parte 2
			if($compara_tipos_de_terminal_DC2 == "MC4"){
				$score_tipos_de_terminal_DC2 += 1;
			}
			if($compara_tipos_de_terminal_DC2 == "H4"){
				$score_tipos_de_terminal_DC2 += 1;
			}
			if($compara_tipos_de_terminal_DC2 == "MC4/H4"){
				$score_tipos_de_terminal_DC2 += 2;
			}
			if($compara_tipos_de_terminal_DC2 == "SUNCLIX"){
				$score_tipos_de_terminal_DC2 += 1;
			}
			if($score_tipos_de_terminal_DC1 > $score_tipos_de_terminal_DC2){
				$score1 += 1;
			}
			elseif($score_tipos_de_terminal_DC1 < $score_tipos_de_terminal_DC2){
				$score2 += 1;
			}
		

		$tensao_nominal_da_rede_eletrica1 = mysqli_query($link, "SELECT '$tensao_nominal_da_rede_eletrica' FROM inversor_fotovoltaico where nome = '$title'");
		$tensao_nominal_da_rede_eletrica2 = mysqli_query($link, "SELECT '$tensao_nominal_da_rede_eletrica' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_tensao_nominal_da_rede_eletrica1 = mysqli_fetch_row($tensao_nominal_da_rede_eletrica1);
		$compara_tensao_nominal_da_rede_eletrica2 = mysqli_fetch_row($tensao_nominal_da_rede_eletrica2);
		
			$score_tensao_nominal_da_rede_eletrica1 = 0;
			$score_tensao_nominal_da_rede_eletrica2 = 0;

				
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V"){
					$score_tensao_nominal_da_rede_eletrica1 += 1;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "230V"){
					$score_tensao_nominal_da_rede_eletrica1 += 2;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "400V"){
					$score_tensao_nominal_da_rede_eletrica1 += 3;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "160V/300V"){
					$score_tensao_nominal_da_rede_eletrica1 += 4;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "176V/242V"){
					$score_tensao_nominal_da_rede_eletrica1 += 5;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "180V/300V"){
					$score_tensao_nominal_da_rede_eletrica1 += 6;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/230V"){
					$score_tensao_nominal_da_rede_eletrica1 += 7;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/230V/240V"){
					$score_tensao_nominal_da_rede_eletrica1 += 8;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/380V, 230V/400V"){
					$score_tensao_nominal_da_rede_eletrica1 += 9;
				}
				if($compara_tensao_nominal_da_rede_eletrica1 == "220V/380V,230V/400V,240V/415V"){
					$score_tensao_nominal_da_rede_eletrica1 += 10;
				}

				// parte 2

			
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V"){
				$score_tensao_nominal_da_rede_eletrica2 += 1;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "230V"){
				$score_tensao_nominal_da_rede_eletrica2 += 2;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "400V"){
				$score_tensao_nominal_da_rede_eletrica2 += 3;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "160V/300V"){
				$score_tensao_nominal_da_rede_eletrica2 += 4;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "176V/242V"){
				$score_tensao_nominal_da_rede_eletrica2 += 5;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "180V/300V"){
				$score_tensao_nominal_da_rede_eletrica2 += 6;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/230V"){
				$score_tensao_nominal_da_rede_eletrica2 += 7;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/230V/240V"){
				$score_tensao_nominal_da_rede_eletrica2 += 8;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/380V, 230V/400V"){
				$score_tensao_nominal_da_rede_eletrica2 += 9;
			}
			if($compara_tensao_nominal_da_rede_eletrica2 == "220V/380V,230V/400V,240V/415V"){
				$score_tensao_nominal_da_rede_eletrica2 += 10;
			}
			if($score_tensao_nominal_da_rede_eletrica1 > $score_tensao_nominal_da_rede_eletrica2){
				$score1 += 1;
			}
			elseif($score_tensao_nominal_da_rede_eletrica1 < $score_tensao_nominal_da_rede_eletrica2){
				$score2 += 1;
			}
			


		$protecao_contra_superaquecimento1 = mysqli_query($link, "SELECT '$protecao_contra_superaquecimento' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_contra_superaquecimento2 = mysqli_query($link, "SELECT '$protecao_contra_superaquecimento' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_contra_superaquecimento1 = mysqli_fetch_row($protecao_contra_superaquecimento1);
		$compara_protecao_contra_superaquecimento2 = mysqli_fetch_row($protecao_contra_superaquecimento2);
		
		if($compara_protecao_contra_superaquecimento1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_contra_superaquecimento2 == "Integrado"){
				$score2 += 1;
		}

		$protecao_de_sobrecorrente_CA1 = mysqli_query($link, "SELECT '$protecao_de_sobrecorrente_CA' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_de_sobrecorrente_CA2 = mysqli_query($link, "SELECT '$protecao_de_sobrecorrente_CA' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_de_sobrecorrente_CA1 = mysqli_fetch_row($protecao_de_sobrecorrente_CA1);
		$compara_protecao_de_sobrecorrente_CA2 = mysqli_fetch_row($protecao_de_sobrecorrente_CA2);
		
		if($compara_protecao_de_sobrecorrente_CA1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_de_sobrecorrente_CA2 == "Integrado"){
				$score2 += 1;
		}

		$protecao_polaridade_reversa1 = mysqli_query($link, "SELECT '$protecao_polaridade_reversa' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_polaridade_reversa2 = mysqli_query($link, "SELECT '$protecao_polaridade_reversa' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_polaridade_reversa1 = mysqli_fetch_row($protecao_polaridade_reversa1);
		$compara_protecao_polaridade_reversa2 = mysqli_fetch_row($protecao_polaridade_reversa2);
		
		if($compara_protecao_polaridade_reversa1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_polaridade_reversa2 == "Integrado"){
				$score2 += 1;
		}

		$protecao_de_isolamento_DC1 = mysqli_query($link, "SELECT '$protecao_de_isolamento_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$protecao_de_isolamento_DC2 = mysqli_query($link, "SELECT '$protecao_de_isolamento_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_protecao_de_isolamento_DC1 = mysqli_fetch_row($protecao_de_isolamento_DC1);
		$compara_protecao_de_isolamento_DC2 = mysqli_fetch_row($protecao_de_isolamento_DC2);
		
		if($compara_protecao_de_isolamento_DC1 == "Integrado"){
				$score1 += 1;
		}
		if($compara_protecao_de_isolamento_DC2 == "Integrado"){
				$score2 += 1;
		}
		

		$MPPT_precisao1 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM inversor_fotovoltaico where nome = '$title'");
		$MPPT_precisao2 = mysqli_query($link, "SELECT '$MPPT_precisao' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_MPPT_precisao1 = mysqli_fetch_row($MPPT_precisao1);
		$compara_MPPT_precisao2 = mysqli_fetch_row($MPPT_precisao2);
		
		if($compara_MPPT_precisao1 > $compara_MPPT_precisao2){
				$score1 += 1;
		}
		elseif($compara_MPPT_precisao1 < $compara_MPPT_precisao2){
				$score2 += 1;
		}

		$THDi1 = mysqli_query($link, "SELECT '$THDi' FROM inversor_fotovoltaico where nome = '$title'");
		$THDi2 = mysqli_query($link, "SELECT '$THDi' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_THDi1 = mysqli_fetch_row($THDi1);
		$compara_THDi2 = mysqli_fetch_row($THDi2);
		
		if($compara_THDi1 < $compara_THDi2){
				$score1 += 1;
		}
		elseif($compara_THDi1 > $compara_THDi2){
				$score2 += 1;
		}

		$faixa_de_tensao_AC_max1 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_max' FROM inversor_fotovoltaico where nome = '$title'");
		$faixa_de_tensao_AC_max2 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_max' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_faixa_de_tensao_AC_max1 = mysqli_fetch_row($faixa_de_tensao_AC_max1);
		$compara_faixa_de_tensao_AC_max2 = mysqli_fetch_row($faixa_de_tensao_AC_max2);
		
		if($compara_faixa_de_tensao_AC_max1 > $compara_faixa_de_tensao_AC_max2){
				$score1 += 1;
		}
		elseif($compara_faixa_de_tensao_AC_max1 < $compara_faixa_de_tensao_AC_max2){
				$score2 += 1;
		}

		$faixa_de_tensao_AC_min1 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_min' FROM inversor_fotovoltaico where nome = '$title'");
		$faixa_de_tensao_AC_min2 = mysqli_query($link, "SELECT '$faixa_de_tensao_AC_min' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_faixa_de_tensao_AC_min1 = mysqli_fetch_row($faixa_de_tensao_AC_min1);
		$compara_faixa_de_tensao_AC_min2 = mysqli_fetch_row($faixa_de_tensao_AC_min2);
		
		if($compara_faixa_de_tensao_AC_min1 < $compara_faixa_de_tensao_AC_min2){
				$score1 += 1;
		}
		elseif($compara_faixa_de_tensao_AC_min1 > $compara_faixa_de_tensao_AC_min2){
				$score2 += 1;
		}

		$maxima_corrente_de_saida1 = mysqli_query($link, "SELECT '$maxima_corrente_de_saida' FROM inversor_fotovoltaico where nome = '$title'");
		$maxima_corrente_de_saida2 = mysqli_query($link, "SELECT '$maxima_corrente_de_saida' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_maxima_corrente_de_saida1 = mysqli_fetch_row($maxima_corrente_de_saida1);
		$compara_maxima_corrente_de_saida2 = mysqli_fetch_row($maxima_corrente_de_saida2);
		
		if($compara_maxima_corrente_de_saida1 > $compara_maxima_corrente_de_saida2){
				$score1 += 1;
		}
		elseif($compara_maxima_corrente_de_saida1 < $compara_maxima_corrente_de_saida2){
				$score2 += 1;
		}

		$corrente_nominal_de_saida1 = mysqli_query($link, "SELECT '$corrente_nominal_de_saida' FROM inversor_fotovoltaico where nome = '$title'");
		$corrente_nominal_de_saida2 = mysqli_query($link, "SELECT '$corrente_nominal_de_saida' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_corrente_nominal_de_saida1 = mysqli_fetch_row($corrente_nominal_de_saida1);
		$compara_corrente_nominal_de_saida2 = mysqli_fetch_row($corrente_nominal_de_saida2);
		
		if($compara_corrente_nominal_de_saida1 > $compara_corrente_nominal_de_saida2){
				$score1 += 1;
		}
		elseif($compara_corrente_nominal_de_saida1 < $compara_corrente_nominal_de_saida2){
				$score2 += 1;
		}

		$numero_de_conjuntos_de_conectores_DC1 = mysqli_query($link, "SELECT '$numero_de_conjuntos_de_conectores_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$numero_de_conjuntos_de_conectores_DC2 = mysqli_query($link, "SELECT '$numero_de_conjuntos_de_conectores_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_numero_de_conjuntos_de_conectores_DC1 = mysqli_fetch_row($numero_de_conjuntos_de_conectores_DC1);
		$compara_numero_de_conjuntos_de_conectores_DC2 = mysqli_fetch_row($numero_de_conjuntos_de_conectores_DC2);
		
		if($compara_numero_de_conjuntos_de_conectores_DC1 > $compara_numero_de_conjuntos_de_conectores_DC2){
				$score1 += 1;
		}
		elseif($compara_numero_de_conjuntos_de_conectores_DC1 < $compara_numero_de_conjuntos_de_conectores_DC2){
				$score2 += 1;
		}

		$string_por_entrada_DC1 = mysqli_query($link, "SELECT '$string_por_entrada_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$string_por_entrada_DC2 = mysqli_query($link, "SELECT '$string_por_entrada_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_string_por_entrada_DC1 = mysqli_fetch_row($string_por_entrada_DC1);
		$compara_string_por_entrada_DC2 = mysqli_fetch_row($string_por_entrada_DC2);
		
		if($compara_string_por_entrada_DC1 > $compara_string_por_entrada_DC2){
				$score1 += 1;
		}
		elseif($compara_string_por_entrada_DC1 < $compara_string_por_entrada_DC2){
				$score2 += 1;
		}

		$MTTP_faixa_de_tensao_operacional1 = mysqli_query($link, "SELECT '$MTTP_faixa_de_tensao_operacional' FROM inversor_fotovoltaico where nome = '$title'");
		$MTTP_faixa_de_tensao_operacional2 = mysqli_query($link, "SELECT '$MTTP_faixa_de_tensao_operacional' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_MTTP_faixa_de_tensao_operacional1 = mysqli_fetch_row($MTTP_faixa_de_tensao_operacional1);
		$compara_MTTP_faixa_de_tensao_operacional2 = mysqli_fetch_row($MTTP_faixa_de_tensao_operacional2);
		
			$score_MTTP_faixa_de_tensao_operacional1 = 0;
			$score_MTTP_faixa_de_tensao_operacional2 = 0;


			if($compara_MTTP_faixa_de_tensao_operacional1 == "25 ~ 55V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 1;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "180 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 2;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "80 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 3;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 4;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "50 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "100 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "90 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "390 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "90 ~ 520V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 7;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "50 ~ 490V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 8;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "50 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "100 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "80 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 540V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "320 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "65 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 12;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "60 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 13;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~580V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "70 ~ 580V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "240 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 15;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "210 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 16;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "200 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 17;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "250 ~ 950V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 18;
			}
			if($compara_MTTP_faixa_de_tensao_operacional1 == "140 ~ 1000V"){
				$score_MTTP_faixa_de_tensao_operacional1 += 19;
			}
			// parte 2
			if($compara_MTTP_faixa_de_tensao_operacional2 == "25 ~ 55V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 1;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "180 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 2;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "80 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 3;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 4;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "50 ~ 450V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "100 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 5;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "90 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "390 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 6;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "90 ~ 520V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 7;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "50 ~ 490V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 8;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "50 ~ 500V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "100 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 9;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "80 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 540V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 10;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "320 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 11;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "65 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 12;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "60 ~ 550V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 13;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~580V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "70 ~ 580V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 14;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "240 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 15;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "210 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 16;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "200 ~ 800V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 17;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "250 ~ 950V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 18;
			}
			if($compara_MTTP_faixa_de_tensao_operacional2 == "140 ~ 1000V"){
				$score_MTTP_faixa_de_tensao_operacional2 += 19;
			}
			if($score_MTTP_faixa_de_tensao_operacional1 > $score_MTTP_faixa_de_tensao_operacional2){
				$score1 += 1;
			}
			elseif($score_MTTP_faixa_de_tensao_operacional1 < $score_MTTP_faixa_de_tensao_operacional2){
				$score2 += 1;
			}

		$Maxima_eficiencia1 = mysqli_query($link, "SELECT '$Maxima_eficiencia' FROM inversor_fotovoltaico where nome = '$title'");
		$Maxima_eficiencia2 = mysqli_query($link, "SELECT '$Maxima_eficiencia' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Maxima_eficiencia1 = mysqli_fetch_row($Maxima_eficiencia1);
		$compara_Maxima_eficiencia2 = mysqli_fetch_row($Maxima_eficiencia2);
		
		if($compara_Maxima_eficiencia1 > $compara_Maxima_eficiencia2){
				$score1 += 1;
		}
		elseif($compara_Maxima_eficiencia1 < $compara_Maxima_eficiencia2){
				$score2 += 1;
		}

		$Maxima_corrente_de_entrada1 = mysqli_query($link, "SELECT '$Maxima_corrente_de_entrada' FROM inversor_fotovoltaico where nome = '$title'");
		$Maxima_corrente_de_entrada2 = mysqli_query($link, "SELECT '$Maxima_corrente_de_entrada' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Maxima_corrente_de_entrada1 = mysqli_fetch_row($Maxima_corrente_de_entrada1);
		$compara_Maxima_corrente_de_entrada2 = mysqli_fetch_row($Maxima_corrente_de_entrada2);
		
		if($compara_Maxima_corrente_de_entrada1 > $compara_Maxima_corrente_de_entrada2){
				$score1 += 1;
		}
		elseif($compara_Maxima_corrente_de_entrada1 < $compara_Maxima_corrente_de_entrada2){
				$score2 += 1;
		}

		$Numero_de_MTTP1 = mysqli_query($link, "SELECT '$Numero_de_MTTP' FROM inversor_fotovoltaico where nome = '$title'");
		$Numero_de_MTTP2 = mysqli_query($link, "SELECT '$Numero_de_MTTP' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Numero_de_MTTP1 = mysqli_fetch_row($Numero_de_MTTP1);
		$compara_Numero_de_MTTP2 = mysqli_fetch_row($Numero_de_MTTP2);
		
		if($compara_Numero_de_MTTP1 > $compara_Numero_de_MTTP2){
				$score1 += 1;
		}
		elseif($compara_Numero_de_MTTP1 < $compara_Numero_de_MTTP2){
				$score2 += 1;
		}
		
		$Minima_tensao_DC1 = mysqli_query($link, "SELECT '$Minima_tensao_DC' FROM inversor_fotovoltaico where nome = '$title'");
		$Minima_tensao_DC2 = mysqli_query($link, "SELECT '$Minima_tensao_DC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_Minima_tensao_DC1 = mysqli_fetch_row($Minima_tensao_DC1);
		$compara_Minima_tensao_DC2 = mysqli_fetch_row($Minima_tensao_DC2);
		
		if($compara_Minima_tensao_DC1 < $compara_Minima_tensao_DC2){
				$score1 += 1;
		}
		elseif($compara_Minima_tensao_DC1 > $compara_Minima_tensao_DC2){
				$score2 += 1;
		}

		$maxpe1 = mysqli_query($link, "SELECT '$Maxima_potencia_de_entrada' FROM inversor_fotovoltaico where nome = '$title'");
		$maxpe2 = mysqli_query($link, "SELECT '$Maxima_potencia_de_entrada' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_maxpe1 = mysqli_fetch_row($maxpe1);
		$compara_maxpe2 = mysqli_fetch_row($maxpe2);
		
		if($compara_maxpe1 > $compara_maxpe2){
				$score1 += 1;
		}
		elseif($compara_maxpe1 < $compara_maxpe2){
				$score2 += 1;
		}

		$maxp1 = mysqli_query($link, "SELECT '$Maxima_potencia_AC' FROM inversor_fotovoltaico where nome = '$title'");
		$maxp2 = mysqli_query($link, "SELECT '$Maxima_potencia_AC' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_maxp1 = mysqli_fetch_row($maxp1);
		$compara_maxp2 = mysqli_fetch_row($maxp2);
		
		if($compara_maxp1 > $compara_maxp2){
				$score1 += 1;
		}
		elseif($compara_maxp1 < $compara_maxp2){
				$score2 += 1;
		}
		
		$potencia1 = mysqli_query($link, "SELECT '$potencia_string' FROM inversor_fotovoltaico where nome = '$title'");
		$potencia2 = mysqli_query($link, "SELECT '$potencia_string' FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_potencia1 = mysqli_fetch_row($potencia1);
		$compara_potencia2 = mysqli_fetch_row($potencia2);
		
		if($compara_potencia1 > $compara_potencia2){
				$score1 += 1;
		}
		elseif($compara_potencia1 < $compara_potencia2){
				$score2 += 1;
		}

		$peso1 = mysqli_query($link, "SELECT peso FROM inversor_fotovoltaico where nome = '$title'");
		$peso2 = mysqli_query($link, "SELECT peso FROM inversor_fotovoltaico where nome = '$title2'");
		$compara_peso1 = mysqli_fetch_row($peso1);
		$compara_peso2 = mysqli_fetch_row($peso2);
		
		if($compara_peso1 < $compara_peso2){
				$score1 -= 1;
		}
		elseif($compara_peso1 > $compara_peso2){
				$score2 -= 1;
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