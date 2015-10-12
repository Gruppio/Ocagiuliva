<?php

include_once 'Localize.php';

function getTitleForYear($year)
{
    if (isItalian())
    {
        if ($year == "2015")
        {
            return "Le intermittenze dell’amore: Un esperimento di stampo abbastanza sociologico alla maniera di Josè Saramago";
        }
        
        if ($year == "2014")
        {
            return "C’era una volta in Italia, racconto fintamente cinematografico dell’andare e del restare";
        }
        
        if ($year == "2013")
        {
            return "Stelle, Stelline, Stellone. Musical mediamente realistico sull’amore, sul potere e sul mestiere";
        }
        
        if ($year == "2012")
        {
            return "L’Uomo dei sogni";
        }
        
        if ($year == "2011")
        {
            return "Il Comune del luogo comune";
        }
        
        if ($year == "2010")
        {
            return "Ciò che fece il Dottor F.: storia abbastanza horror del moderno Prometeo e della follia che lo generò";
        }
        
        if ($year == "2009")
        {
            return "L’anello dei Nibelunghi, opera buffa in forma di Spillo alla maniera di Gioachino Rossini";
        }
        
        if ($year == "2008")
        {
            return "Di nuvole e di sogni: piccolo ragionamento filosofico in braghe corte";
        }
        
        if ($year == "2007")
        {
            return "Un opera da tre soldi (Tecnica mista su carro di carnevale 1200cm. X 250cm. firmato in basso dagli autori)";
        }
        
        if ($year == "2006")
        {
            return "Torbide gelosie…travolgenti passioni…tra vestiti e paillettes";
        }
        
        if ($year == "2005")
        {
            return "Viaggi avventure e storie altrui del piccolo signor G.";
        }
        if ($year == "2004")
        {
            return "Binario triste, solitario y final";
        }
    }
    else
    {
        if ($year == "2015")
        {
            return "The intermittence of love , a rather sociology based experiment on the footsteps of Josè Saramago";
        }
        
        if ($year == "2014")
        {
            return "Once upon time in Italy, a  story told with a cinematic pretence , that narrates a tale of migration";
        }
        
        if ($year == "2013")
        {
            return "Stars, Small Stars , Big Stars, a  rather realistic musical on love its power and on profession of love";
        }
        
        if ($year == "2012")
        {
            return "The man of dream";
        }
        
        if ($year == "2011")
        {
            return "The town of platitude";
        }
        
        if ($year == "2010")
        {
            return "What did Dottor F do:  a fairly horror story of a modern Prometeo and the insanity that generated it";
        }
        
        if ($year == "2009")
        {
            return "Ring of the Nibelungs , a comical act on on the form of Spillo on the footsteps of Gioachino Rossini";
        }
        
        if ($year == "2008")
        {
            return "Made of clouds and dreams; a small philosophical thought while wearing short";
        }
        
        if ($year == "2007")
        {
            return "The threepenny opera (Mix technique artwork on the wagon 1200cm x 250cm signed by the author)";
        }
        
        if ($year == "2006")
        {
            return "Shady jealousies, overwhelming  passions between dresses and palettes";
        }
        
        if ($year == "2005")
        {
            return "Travels of the small Mr G  and the story of the others";
        }
        if ($year == "2004")
        {
            return "Sad binary solitario y final";
        }
    }
    return "";
}


?>