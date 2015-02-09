<?php
	include("lang/nav.php");
	$title = $bio;
	switch ($_SESSION["country"])
	{
		case "fr":
			$premier_h1 = "Biographie";
			$bio_atesa = "
						Atesa Hedayat est née en 1970 à Téhéran.<br /><br />
						Elle a grandi à Abadan, à la frontière irakienne, avant que la guerre ne ramène sa famille à Téhéran, où elle a poursuivi sa scolarité à l’école américaine.<br /><br />
						Son enfance a été bercée par la littérature des écrivains et poètes issus de la famille, dont le plus célèbre est Sadegh Hedayat, un cousin de son père. Au-delà de son destin tragique, il jouissait d’une vive aura dans la famille.<br /><br />
						Atesa se souvient encore rêver de Paris, de la culture française et des amis surréalistes parisiens que Sadegh avait tant touchés. Aussi, ce n’est pas tant l’Iran qu’elle quitta que Paris qu’elle rejoignit en 2000.<br /><br />
						Dans cette solitude qu’elle avait tant enviée à Sadegh, elle finit par trouver une vérité plus proche d’elle-même. La richesse de l’environnement artistique et culturel parisien y fut pour beaucoup, l’écriture aussi. Un jour ou l’autre, se disait-elle, l’art traverserait sa vie.
						";
			$bio_olivier = "
						Olivier Pannone est un artiste-peintre franco-italien, âgé de 38 ans.<br />
						Né en banlieue parisienne de parents italiens, il grandit en prenant très tôt la mesure du monde.<br /> 
						Lorsqu’il a 8 ans, sa famille s’installe en Australie ; il y découvre les grands espaces et l’art aborigène. Un an plus tard, la famille revient en Europe, à Rome où il passera 2 ans. Il arpente ses rues , les ruines, les églises et les musées, joue au ballon devant Saint-Jean de Latran. Ce n’est que bien plus tard qu’il réalisera à quel point Rome a marqué son esprit et façonné ses désirs. Il sera peintre et rien d’autre.<br />
						Après un bac littéraire, il prépare le concours des Beaux-Arts de Paris en écrivant et en peignant. Il échoue à l’épreuve du dessin, un souvenir qui le fait maintenant sourire. Mais la fille de Jean-Claude Vertongen, professeur des Arts Décoratifs, l’a repéré. Olivier se rend à l’atelier du Maître avec ses travaux. Un long moment d’observation et juste ces quelques mots : « Reviens demain, je fournis le matériel ».<br />
						Olivier restera 5 ans dans cet atelier et en oubliera de repasser le concours, même devant l’insistance de l’un des directeurs de l’école parisienne. Jean-Claude veut qu’il apprenne à voir, qu’il dessine tout. Olivier ne veut peindre que des corps, mais le Maître l’obligera à croquer des carafes, des fruits, des chevaux, jusqu’à ses chiens et chats. Il doit pouvoir tout dessiner, les modèles vivants défilent, la liberté viendra plus tard, la maîtrise technique d’abord. Il lui faudra aussi étudier la philosophie et l’esthétique, l’histoire de l’art et sa sociologie. Et modeler, graver, sculpter… Une authentique formation, les deux se querellant amicalement ; Italiens contre Flamands.<br />
						Durant son apprentissage, il exposera lors d’expositions collectives organisées par son maître et avec d’autres élèves. Il découvrira Gromaire, le Maître de Vertongen, rencontrera Dado et Popille, ses amis.<br />
						A 24 ans, il est temps de quitter le nid. Il pose ses pinceaux dans la cuisine de sa mère, avant de s’installer dans une petite pièce à lui, puis dans son atelier de Suresnes. Il sait que le chemin sera long et difficile, alors c’est le tennis qui le fera vivre.<br />
						De 1996 à 2006, il enchaîne les expositions dans les centres culturels et dans des galeries à Paris, Chantilly, Rueil et Deauville, dans un salon à Bordeaux. Mais il remarque bien vite que ses ventes se font le plus souvent en direct avec des amateurs et des collectionneurs qui suivent son travail. Les galeries et leur catalogue de dizaines de peintres lui semblent inadaptés à son travail. Il s’épanouit dans une communication directe avec les spectateurs, sans intermédiaire commercial aux commissions parfois excessives et aux discours souvent limités. Certains galeristes lui demanderont de peindre plus petit, d’autres lui parleront du prix de revient de leurs mètres carrés…<br />
						Certaines rencontres le marqueront particulièrement. Louis Cane, (Supports-Surfaces), lui dira : « tu peux faire une carrière à la Balthus, même si c’est dur de vendre aux gens leurs propres névroses, mais peu importe ce que tu peins, ce qui compte c’est comment tu le peins ». Jean-Paul Chambas, dont il admire « le Requin », soulignera son incessant bavardage sur les toiles. Les encouragements les plus marquants seront paradoxalement ceux de Jean Fournier, pourtant célèbre galeriste de l’art abstrait puis conceptuel, un art dont Olivier est le plus éloigné : «  votre registre n’est pas celui de ma galerie mais c’est de la très bonne peinture, patience, la roue tourne! ».<br />
						Depuis quelques années, Olivier ne montre ses œuvres que dans son atelier, son temps est consacré à la création. Il dessine longuement, choisissant avec une extrême exigence les dessins qui mériteront de passer sur la toile.<br />
						Ses racines comme son art sont italiens, ses maîtres les plus chers sont au-delà des Alpes. Son désir ? Renouer les liens avec une tradition picturale majeure et la poursuivre avec la liberté que les artistes modernes ont su conquérir.<br />
						";
			$deuxieme_h1 = "Entretien avec";
			$deuxieme_h1_atesa = "Rencontre avec Pannone";
			$interview_atesa = "
							C’est un concours de circonstances qui lui fit connaître Pannone, au détour d’une amitié. La curiosité d’Atesa l’amena rapidement à l’atelier du peintre. Les émotions qu’elle ressentit devant les toiles la ramenaient au cœur de sa vie : la beauté, l’amour, la douleur, la solitude, la liberté. Toutes ces images de vie et de mort entremêlées la touchèrent profondément.<br /><br />
							Elle voulait, elle devait les faire partager, et cela la ramenait à son rêve, devenir « art dealer ».<br /><br />
							« Je l’ai su dès que je l’ai vu », insiste-t-elle aujourd’hui. « J’aime la vision de la vie et de l’humanité qu’a Olivier, comme une contradiction ou une confrontation permanente. Ses toiles me montrent une vérité qui n’a rien de trivial, ma vie. »<br /><br />
							En collaboration étroite avec Pannone, Atesa est devenu son agent. Elle contribue à faire connaître et diffuser le travail du peintre, en France et à l’étranger.
							";
			$interview_olivier = "
						<em><acronym title=\"Ceci est un mot\">Vous</acronym> parlez souvent de tradition picturale, qui sont les maîtres de l’histoire de la peinture que vous admirez le plus ?</em><br />
						Ils se comptent en dizaines ou en centaines, j’aime tant d’artistes… je préfère vous citer les grands maîtres envers lesquels je me sens le plus redevable : Michelangelo et Caravaggio, El Greco et Van Gogh, Egon Schiele et Francis Bacon ! Ils ont su peindre les corps au-delà de la virtuosité technique, en les transformant en langage d’expression à eux seuls. J’admire tous les artistes qui me font ressentir la puissance et le possible de l’humanité.<br />
						<br /><em>Votre travail est centré sur les corps, pourquoi cette fascination ?</em><br />
						J’expose les corps, mais je cherche l’âme, ce membre fantôme. Cela fait plus de trente mille ans que les hommes dessinent. Et toujours ce fantôme d’en haut qui nous amène à explorer nos sensations. Cette intimité fondatrice de l’individu, je la cherche sans cesse dans les déformations ou les excroissances du moi. Je me sers des corps pour sonder l’impalpable. Et pour cela, je dispose de tous les schémas corporels. Je ne peins ni scènes ni décors, je peux utiliser les arrière-plans d’une manière « abstraite » pour faire apparaître d’autres sujets ou les supprimer, sur certaines toiles. Il faut parfois savoir se taire.<br />
						<br /><em>Vos corps ne laissent pas indifférent, vous voulez nous perturber ?</em><br />
						Je vis très loin des concepts iconoclastes et je n’ai aucun désir de choquer en soi. L’artiste provocateur est une veille rengaine qui ne me convient pas. L’expressivité de mes figures est un moyen d’approcher l’existence propre sans hasard, les corps rendent lisible ce qui parfois est à peine perceptible. Une bâtisse, un palais, le cœur d’une cathédrale gothique, une chambre à l’acoustique parfaite… cette cage thoracique de pierre, de chair ou de pigments. J’ai été largement précédé par mes pairs, les corps sont mon héritage, mon travail et mes gammes.<br />
						De leur côté, les amateurs d’art sont d’abord soumis à leurs affects et admettent difficilement que, si l’œuvre est pourvoyeuse d’émotions, elle est d’abord vue de l’esprit : « La pittura è cosa mentale » Léonard de Vinci. Nous en remettre complètement à nos affects ne nous rend pas plus libre. J’apprécie que mes toiles émeuvent. Je préfère qu’elles touchent, au sens propre. Je parle de notre rapport au corps  et de notre vue de la sensualité. Car on est là dans un registre plus conscient.<br />
						Le spectateur n’est pas réellement libre dans sa confrontation à une œuvre d’art. Sans doute est-ce le résultat d’une distraction innée. L’art, qu’on dit libérateur, n’est peut-être qu’une illusion qui nous fait oublier, comme l’a dit Rimbaud, que nous sommes absents au monde. Cette notion d’absence est ambiguë : elle désigne à la fois le vide, la vacance, et le flot anarchique, incontrôlable, de nos pensées. Elle suppose que nous croyons penser alors que nous « sommes pensés ». Elle nous présume somnambules. C’est un peu cela que je cherche à provoquer chez le spectateur.<br />
						<br /><em>Doit-on recevoir votre peinture uniquement sur le mode de l’émotion ?</em><br />
						Support obligatoire de l’émotion, le fait pictural est une affaire d’accords, de contrastes, d’oppositions, qui jouent sans que nous en soyons conscients un rôle important dans notre perception de l’œuvre d’art. Les peintres sont les premiers à souligner que pour être bien perçue la peinture demande, comme complément nécessaire à la sensibilité, un certain apprentissage du regard. Savoir comment une œuvre s’exprime est aussi important que ce qu’elle tente de dire. Ce n’est pas forcément pour des raisons narratives que Van Gogh accordait les tourbillons du vent dans les blés aux arabesques des nuages. Contrairement à ce qu’on pense trop souvent, la connaissance ne tue pas l’émotion. Porter un regard critique sur une œuvre d’art n’empêche pas d’y être sensible ; ce n’est pas parce qu’on sait comment elle fonctionne qu’on l’apprécie moins. Au contraire cela permet de l’aimer davantage, car la découverte de son originalité formelle et de son organisation s’ajoute à notre plaisir. Donc je conteste le tout-émotion.<br />
						<br /><em>Vous est-il difficile de parler ou d’écrire sur votre travail ?</em><br />
						Je préfèrerais que d’autres le fassent, mais je suis aussi très ambigu à ce sujet. Écrire sur l’art, c’est d’abord parler de soi-même. La critique d’art est de son côté le lieu idéal des phrases creuses, de l’autosatisfaction, de l’auto-analyse inconsciente. L’envie de briller et le désir de faire œuvre d’écrivain rendent tout écrit sur l’art approximatif. Ce qui fait la force d’un texte, l’originalité des idées, la confrontation des mots, les libertés prises avec la langue, dérive vers le superficiel lorsque l’on écrit sur la peinture. Le langage plastique, qui s’autorise comme la littérature des audaces, a lui aussi ses règles qui sont souvent mal connues de ceux dont le métier consiste d’abord à écrire. Écrire sur la peinture, c’est se servir d’un outil difficile pour décrire des objets compliqués. Le bleu sera toujours complémentaire de l’orange et un objet clair paraîtra toujours plus grand sur un fond sombre ! « Les mêmes principes et les mêmes éléments se retrouvent dans toute expérience artistique » Picasso.
						";
		break;
		case 'es':
			$premier_h1 = "";
			$bio_atesa = "";
			$bio_olivier = "";
			$deuxieme_h1 = "";
			$interview_atesa = "";
			$interview_olivier = "";
		break;
		default:
			$premier_h1 = "Biography";
			$bio_atesa = "Atesa Hedayat is Iranian, she was born in Tehran in 1970.<br /><br />
							She grew up in Abadan, near the Iraki Border, before the war sent her family back to Tehran. In the capital, she was educated at the American School.<br /><br />
							Her childhood was lulled with the literature of writers and poets from her own family, among which the most famous is clearly Sadegh Hedayat, her father’s cousin. Beyond his tragic fate, he was adored and revered in the family.<br /><br />
							Atesa can still remember how, as a young girl, she dreamt about Paris, the French culture and her cousin’s Surrealists friends, who had been so deeply touched by Sadegh’s pieces. When she decided to go, it was not so much Iran she was leaving than Paris she was finally meeting.<br /><br />
							Feeling the loneliness she had long envied Sadegh, she ended up finding a deeper and closer truth to herself. The treasures of the Parisian cultural and artistic environment proved decisive, so did writing. One day or another, she thought, art would play a central role in her life.<br /><br />
							";
			$bio_olivier = "";
			$deuxieme_h1 = "Interview of";
			$deuxieme_h1_atesa = "Encounter with Pannone";
			$interview_atesa = "She met with Pannone thanks to a combination of circumstances and a friend. Atesa’s curiosity took her rapidly to the studio. The emotions she felt looking at the paintings took her right back to the heart of her life: beauty, love, pain, loneliness, freedom. All these images of life and death intermingled touched her profoundly.<br /><br />
								She wanted to, she needed to share them; and this was bringing her back to her dream of becoming an “art dealer”.<br /><br />
								“I knew it when I saw it” she still insists today. “I love Olivier’s vision of life and humanity, as a permanent contradiction, a relentless confrontation. His paintings and drawings tell me about a truth that is nothing simple, it is my life I see there.”<br /><br />
								Working in close collaboration with Pannone, Atesa has naturally become his agent. She helps to introduce him to art collectors and spread his work in France and abroad.<br /><br />
								";
			$interview_olivier = "";
		break;
	}
?>