SELECT UCASE(fiche_personne.nom)
AS 'NOM',fiche_personne.prenom, abonnement.prix FROM `fiche_personne`
LEFT JOIN membre
ON fiche_personne.id_perso = membre.id_fiche_perso
LEFT JOIN abonnement
ON membre.id_abo = abonnement.id_abo
WHERE abonnement.prix > 42
ORDER BY fiche_personne.nom, fiche_personne.prenom;
