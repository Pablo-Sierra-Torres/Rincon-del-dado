-- INSERT INTO `TABLA` (`COLUMNA1`,...,`COLUMNAZ`) VALUES ('VALOR 1',..., 'VALORZ')
-- insert Usuarios base

INSERT INTO `usuarios`(`Nombre`, `Apellidos`, `Correo`, `Pass`, `CodPos`, `Poblacion`, `Direccion`, `Telefijo`, `Telemovil`, `Notificaciones`) VALUES  ('admin','admin','superusuario@gmail.com','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','28015','Madrid','Calle de la Esperanza','913456367','623456723','0');


-- Insert Productos

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Catán','Sois los primeros colonos en llegar a la isla de Catan. Muy pronto empiezan a aparecer los primeros poblados y las primeras carreteras, mientras que los fértiles terrenos os aportan abundantes materias primas.
                                    \n Poco a poco el comercio florece y los poblados se convierten en ciudades.
                                    \n Pero enseguida el espacio en la isla empieza a escasear y se desata una encarnizada disputa por las tierras, los recursos y el poder.
                                    \n ¡No tendrás otra opción que planificar con astucia, comerciar con picardía y confiar en tu suerte!',
                        'catan.png',45.99,100,'Estrategia');


INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Karmaggan','Adéntrate hasta el centro del Templo para robar el Huevo Alienígena y salir con vida. Pero el suelo gira aleatoriamente, reconfigurando el tablero en cualquier momento. Aunque trampas acechan por todas partes, la amenaza más letal son los demás jugadores. Si fallan las negociaciones, prepárate para un feroz combate en tiempo real.',
                         'karma.jpg',50,100,'Estrategia');

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Mascarade','Mascarade es un juego de cartas que se basa en el engaño rápido y divertido con unas reglas muy básicas que lo hace perfecto para reuniones de amigos o familia que sean o no jugones.
                                       \n A modo resumen, en una partida dde Mascarade, cada jugador recibe una carta de personaje y durante los turnos los jugadores intercambiarán sus personajes o no, por lo que no se sabrá seguro qué carta tiene cada uno y será dificil conseguir monedas a través de los poderes de los personajes.',
                        'mascarade.jpg',22.99,100,'Estrategia');

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Monopoly','Monopoly es un juego de mesa clásico y fácil de jugar que puede ser disfrutado por 2-8 jugadores. Evita la bancarrota y conviértete en el jugador más rico que juegue para ganar este juego.',
                        'monopoly.png',40.99,100,'Clasicos');

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Parchis','El Parchís es un juego de carreras, heredero del juego de origen indio denominado Parchisi.
                                    \n Se utilizan dados para determinar el avance que las fichas realizan a través de un recorrido en forma de cruz. El objetivo es completar el recorrido con todas las fichas.',
                        'parchis.jpg',15.99,100,'Clasicos');

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Ajedrez','El ajedrez es un juego que se desarrolla sobre un tablero y que enfrenta a dos personas. Cada jugador cuenta con dieciséis piezas que puede desplazar, respetando ciertas reglas, sobre el tablero que está dividido en sesenta y cuatro casilleros, conocidos como escaques.
                                        \n Dichas piezas son un rey, una reina, dos torres, dos caballos, dos alfiles y ocho peones. El objetivo es llegar a derrocar al rey del rival, para lo cual es posible capturar a las diversas piezas del contrario.',
                        'ajedrez.jpg',9.99,100,'Clasicos');

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Pokemon','¡Conviértete en un Entrenador Pokémon y combate contra otros Entrenadores usando increíbles Pokémon en JCC Pokémon! Los Entrenadores usan ataques para dejar Fuera de Combate a los Pokémon del otro y ganar cartas de Premio. El primer jugador en coger las 6 cartas de Premio gana la partida.',
                        'pokemon.jpg',999.99,1000,'TCG');

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Yu-gi-oh','Yu-Gi-Oh! Juego de Cartas Coleccionables en español (también conocido con su nombre en inglés como Yu-Gi-Oh! Trading Card Game y usualmente con la abreviatura TCG, adaptada al español como JCC) es parte del juego de cartas basado en el fenómeno manga y anime de Yu-Gi-Oh!, siendo este producido por Konami como su dueño actual.
                            \n Acorde con el "Libro de los Récord Guinness" es el juego de cartas más vendido de todos los tiempos, sobrepasando las 22.000 millones de cartas vendidas desde agosto del 2009.',
                        'yugi.jpg',999.99,1000,'TCG');

INSERT INTO `productos`(`Nombre`, `Descripcion`, `Imagen`, `Precio`, `Cantidad`, `Categoria`) VALUES ('Magic','En Magic: The Gathering cada jugador, debe derrotar a su enemigo usando sus poderes: criaturas mágicas, artefactos, y encantamientos, extrayendo el poder o maná de sus tierras, algunas también con sus propios poderes.',
                        'magic.jpg',999.99,1000,'TCG');


-- Insert Reseñas

INSERT INTO `Resenas`(`Nombre`,`Correo`,`Texto`) VALUES  ('Pablo','superusuariogmail.com','Me encanta esta tienda, siempre tienen lo que necesito');
INSERT INTO `Resenas`(`Nombre`,`Correo`,`Texto`) VALUES  ('Fran','superusuario2gmail.com','Los empleados saben aconsejar bien y hay ofertas interesantes');
