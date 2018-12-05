<?php
	/* Oldja meg a feladatokat és a kapott eredményt irassa ki a <pre> és </pre> tag-ek közé. */
	
	/* ************************* 1. feladat ************************* */
	
	// Rendezze ABC sorrendbe a szinek tömböt.
	
	$szinek = array("piros", "citromsárga", "kék", "barna", "narancs");
	
	/* Elvárt eredmény:
		Array
		(
			[3] => barna
			[1] => citromsárga
			[2] => kék
			[4] => narancs
			[0] => piros
		)
	*/
	
	
	/* ************************* 2. feladat ************************* */
	
	// Rendezze ABC sorrendbe visszafele a $szinek tömböt. A kapott eredményt irassa ki a <pre> és </pre> tag-ek közé.
	
	/* Elvárt eredmény:
		Array
		(
			[0] => piros
			[4] => narancs
			[2] => kék
			[1] => citromsárga
			[3] => barna
		)
	*/
	
	
	/* ************************* 3. feladat ************************* */
	
	// Alakítsa kisbetûkké és irssa ki a $szoveg változó értékét.
	
	$szoveg = "MiNtA fElAdAt";
	
	/* Elvárt eredmény:
		minta feladat
	*/
	
	
	/* ************************* 4. feladat ************************* */
	
	// Alakítsa nagybetûkké és irssa ki a $szoveg változó értékét.
	
	/* Elvárt eredmény:
		MINTA FELADAT
	*/
	
	
	/* ************************* 5. feladat ************************* */
	
	// Cserélje ki a $szoveg változóban az ,A' betûket ,4'-re.
	
	/* Elvárt eredmény:
		MiNt4 fEl4d4t
	*/
	
	
	/* ************************* 6. feladat ************************* */
	
	// Számolja meg, hogy a $szoveg változó értéke hány karakter hosszú.
	
	/* Elvárt eredmény:
		13
	*/
	
	/* ************************* 7. feladat ************************* */
	
	// Határozza meg, hogy a $szoveg változóban hanyadik karakter a szóköz.
	
	/* Elvárt eredmény:
		5
	*/
	
	
	/* ************************* 8. feladat ************************* */
	
	// Keresse meg a $szamok tömb maximumát (Legnagyobb érték a tömbben).
	
	$szamok = array(11, 5, 14, 8, 17, 42, 27, 33, 85);
	
	/* Elvárt eredmény:
		85
	*/
	
	
	/* ************************* 9. feladat ************************* */
	
	// Keresse meg a $szamok tömb minimumát (Legkisebb érték a tömbben).
	
	/* Elvárt eredmény:
		5
	*/
	
	
	/* ************************* 10. feladat ************************ */
	
	// Rendezze a $szamok tömböt növekvõ sorrendbe.
	
	/* Elvárt eredmény:
		Array
		(
			[1] => 5
			[3] => 8
			[0] => 11
			[2] => 14
			[4] => 17
			[6] => 27
			[7] => 33
			[5] => 42
			[8] => 85
		)
	*/
	
	
	/* ************************* 11. feladat ************************ */
	
	// Rendezze a $szamok tömböt csökkenõ sorrendbe.
	
	/* Elvárt eredmény:
		Array
		(
			[8] => 85
			[5] => 42
			[7] => 33
			[6] => 27
			[4] => 17
			[2] => 14
			[0] => 11
			[3] => 8
			[1] => 5
		)	
	*/
	
	
	/* ************************* 12. feladat ************************ */
	
	// Ciklus segítségével irassa ki a $szamok tömbõl a 15-nél nagyobb számokat sortöréssel elválasztva.
	
	/* Elvárt eredmény:
		17
		42
		27
		33
		85
	*/
	
	
	/* ************************* 13. feladat ************************ */
	
	// Ciklus segítségével irassa ki a $szinek tömbbõl azokat a színeket - sortöréssel elválasztva - amiknek a karakterhossza 4-nél több.
	
	/* Elvárt eredmény:
		piros
		citromsárga
		barna
		narancs
	*/
?>