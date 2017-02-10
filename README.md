[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_s
===

Hi. I'm a starter theme called `_s`, or `underscores`, if you like. I'm a theme meant for hacking so don't use me as a Parent Theme. Instead try turning me into the next, most awesome, WordPress theme out there. That's what I'm here for.

My ultra-minimal CSS might make me look like theme tartare but that means less stuff to get in your way when you're designing your awesome theme. Here are some of the other more interesting things you'll find here:

* A just right amount of lean, well-commented, modern, HTML5 templates.
* A helpful 404 template.
* A custom header implementation in `inc/custom-header.php` just add the code snippet found in the comments of `inc/custom-header.php` to your `header.php` template.
* Custom template tags in `inc/template-tags.php` that keep your templates clean and neat and prevent code duplication.
* Some small tweaks in `inc/extras.php` that can improve your theming experience.
* A script at `js/navigation.js` that makes your menu a toggled dropdown on small screens (like your phone), ready for CSS artistry. It's enqueued in `functions.php`.
* 2 sample CSS layouts in `layouts/` for a sidebar on either side of your content.
* Smartly organized starter CSS in `style.css` that will help you to quickly get your design off the ground.
* Licensed under GPLv2 or later. :) Use it to make something cool.

Getting Started
---------------

If you want to keep it simple, head over to http://underscores.me and generate your `_s` based theme from there. You just input the name of the theme you want to create, click the "Generate" button, and you get your ready-to-awesomize starter theme.

If you want to set things up manually, download `_s` from GitHub. The first thing you want to do is copy the `_s` directory and change the name to something else (like, say, `megatherium-is-awesome`), and then you'll need to do a five-step find and replace on the name in all the templates.

1. Search for `'_s'` (inside single quotations) to capture the text domain.
2. Search for `_s_` to capture all the function names.
3. Search for `Text Domain: _s` in style.css.
4. Search for <code>&nbsp;_s</code> (with a space before it) to capture DocBlocks.
5. Search for `_s-` to capture prefixed handles.

OR

* Search for: `'_s'` and replace with: `'megatherium-is-awesome'`
* Search for: `_s_` and replace with: `megatherium_is_awesome_`
* Search for: `Text Domain: _s` and replace with: `Text Domain: megatherium-is-awesome` in style.css.
* Search for: <code>&nbsp;_s</code> and replace with: <code>&nbsp;Megatherium_is_Awesome</code>
* Search for: `_s-` and replace with: `megatherium-is-awesome-`

Then, update the stylesheet header in `style.css` and the links in `footer.php` with your own information. Next, update or delete this readme.

Now you're ready to go! The next step is easy to say, but harder to do: make an awesome WordPress theme. :)

Good luck!

Le th�me utilise ici est un th�me qu�on a r�ussi � modifier � notre gout .a la base le th�me utilise �tait un th�me de d�marrage appel� _s, ou underscores. 
C�est un th�me tr�s utilis� mais il ne faut pas se servir de lui comme Th�me parent. 
Ce Th�me fait partie des Th�mes qui seront les plus impressionnant vu la configuration et la facilit� d�insertion de certains articles. 

Le  CSS de base aussi complet et tout aussi simple � utiliser qu�il soit m�a permis de pouvoir faire quelques retouche pour avoir un site a la foi responsive et beau ce css de base est aussi indispensable pour pouvoir faire les modification souhaiter. Bah chacun a son gout non ??  Faites comme si vous pr�parer votre bon repas ce sera extraordinaire et tr�s facile � utiliser
Voici quelques-unes des choses int�ressantes que j�ai pu ins�rer dans ce th�me 
1.	J�ai cr�� un menu � partir de la page de WordPress autrement dit � partir de mon tableau de bord mais attention les amis ici on ne cr�e pas des pages statiques mais ici il s�agit de cr�er des cat�gories comme moi pour pouvoir facilite le filtrage des articles.
2.	Dans chaque article que j�ai cr�� j�ai fait en sorte de cr�er des tags ou �tiquettes sa aussi sa facilite le filtrage c�est comme les identifications sur Facebook 
3.	Bah j�ai cr�� 2 sidebar  �a va vous paraitre bizarre mais c�est ce que j�ai fait mais calmer vous le premier appeler primary sidebar est tout simplement pour l�aside mais le second c�est pour le slider on va vous expliquer comment proc�der pour mettre en forme ce slider d�article
4.	J�ai aussi install� des plugins haaa wey des plugins sont pr�installes mais quand m�me il faut ces plugins appel� Simple Share Buttons Adder et      Ultimate  Recent Posts ce dernier doit �tre install� et activer si vous avez besoin du slider apr�s sa y�aura du codage � faire pour pouvoir l�installer correctement et le mettre partout o� vous voulez sur votre code
5.	apr�s l�installation du dernier plugin vous verrez apparaitre sur la barre de votre menu WordPress un petit smart kit qui a une forme de chat ne vous �tonner pas ce n�est pas un chat mais c�est pour configurer votre slider a votre gout 
6.	allez-y dans le net un tout petit effort pour voir comment installer le plugin Ultimate recent post du coup je vous demande seulement de dupliquer le code du registre sidebar qui se trouve dans function.php � partir de la ligne 90 du code vous pouvez regarder la bas et  apr�s sa faite quelques modification de nom moi j�ai choisi footer mais vous �tes libre de choisir le nom de votre choix ensuite prenez moi ce code (<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(�votre nom au choix�) ) : endif; ?> ) attention ce nom doit �tre le m�me que le nom de votre sidebar qui va contenir le slider Ce code doit �tre mis l� ou vous voulez voir le slider  dans le code index.php
ensuite le reste ce sera comme sur des roulettes
7.	Bonne Chance


