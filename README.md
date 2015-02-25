# Antiscrape

[![Build Status](https://travis-ci.org/sebastianwestberg/antiscrape.svg?branch=master)](https://travis-ci.org/sebastianwestberg/antiscrape)


Tanken är att paketet ska innehålla funktionalitet som försvårar/förhindrar/avskräckar eventuell automatisk skrapning av publik data på webbsidor. Exempel på känslig data:

	•	e-postadresser i syfte att undvika spam
	•	produktpriser (undvika konkurrenter med automatisk prissättning)
	•	Dynamisk data som bör hållas unik till den specifika webbplatsen

Inspirationen har jag fått från http://proxylist.hidemyass.com. IP-adresserna är relativt skrapskyddade då skräpdata lagts in och dolts med inline CSS eller CSS-klasser. Besökaren märker ingen skillnad, men ett program som skrapar webbsidan kommer få det svårare att tolka innehållet.
