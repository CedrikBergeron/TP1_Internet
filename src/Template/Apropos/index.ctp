<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Flight[]|\Cake\Collection\CollectionInterface $flights
 */
?>
<h2>Cédrik Bergeron</h2>
<h2>420-5b7 MO Applications internet</h2>
<h2>Automne 2018, Collège Montmorency</h2>
<p>Il est possible de modifier, ajouter, consulter et supprimer des objets dans les 5 tables proposées.</p>
<p>Il faut être connecté pour effectuer ces actions, mais tous les utilisateurs peuvent faire les mêmes actions</p>
<p>En se rendant sur la page emails, un email sera envoyer à l'adresse désirée.</p>
<p>Il est possible de changer entre le français, l'anglais et l'espagnol à partir du menu principal.</p>
<p>Suite à un changement de langue. Il est possible de changer le nom d'un niveau pour la langue sélectionnée.</p>
<p>La confirmation par uuid ne fonctionne pas encore.</p>
<?php
echo $this->Html->link(
    $this->Html->image('diagramme.png',array('height' => '350', 'width' => '450')),
    array(
        'controller' => 'zones', 
        'action' => 'index'
    ), array('escape' => false)
);
?>
<a href="http://www.databaseanswers.org/data_models/travel_routes/index.htm">Base de donnée d'origine</a>

