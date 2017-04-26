-- Requêtes de création des tables de données
create table question(id integer primary key, texte text, type integer, justif text);
create table chapitre(id integer primary key, nom text);
create table notion(id integer primary key, nom text);
create table session(id integer primary key, nom text, timer integer);
create table item(id integer primary key, texte text);

create table lier_ch(id_ch integer references chapitre(id), id_qu integer references question(id),
                     primary key (id_ch, id_qu));
create table lier_no(id_no integer references notion(id), id_qu integer references question(id),
                     primary key(id_no, id_qu));
create table lier_se(id_se integer references session(id), id_qu integer references question(id),
                     primary key(id_se, id_qu));
create table est_juste(id_it integer references item(id), id_qu integer references question(id),
                      primary key(id_it, id_qu));
