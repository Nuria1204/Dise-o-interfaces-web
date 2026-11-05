/******************************************************/
/*                  PERSONA.JS                        */
/*             Datos para PERSONA TEMPLATE            */
/*               UX Toolkit v1.0                       */
/******************************************************/

angular.module("angular", [])
    .controller("controller", ["$scope", function($scope) {

        $scope.Grupo_ID = "Individual - ARTEA";
        $scope.Curso = "2026/27";
        $scope.Github_ID = "https://github.com/mgea/UX-DIU-Toolkit";

        $scope.PersonaIndex = 0;

        $scope.Personas = [

            {
                /****************************************/
                /************ PRIMERA PERSONA ***********/
                /****************************************/

                Id: 0,
                Name: "Laura Martinez",
                Photo: "woman.png",
                Quote: "Quiero encontrar informacion sobre obras de arte sin consultar muchas paginas diferentes.",
                Age: 21,
                Occupation: "Estudiante universitaria",
                Family: "Vive con su familia",
                Location: "Granada",
                Character: "Curiosa, organizada y responsable.",

                PersonalityTraits: [
                    { Name: "Introvertido/reservado Vs Extrovertido/activo", Value: 3 },
                    { Name: "Realista/practico Vs Intuicion/imaginativo", Value: 4 },
                    { Name: "Racional/analitico Vs Emocional/impulsivo", Value: 2 },
                    { Name: "Flematico/apatico Vs Colerico/visceral", Value: 3 }
                ],

                Goals: [
                    "Encontrar obras importantes de cada estilo artistico",
                    "Consultar informacion sobre autores y fechas",
                    "Conocer las caracteristicas de las obras",
                    "Encontrar informacion fiable y organizada"
                ],

                Frustrations: [
                    "Paginas con demasiada informacion y textos dificiles",
                    "Tener que visitar muchas webs para encontrar todos los datos",
                    "Imagenes de mala calidad",
                    "Menus complicados y busquedas poco intuitivas"
                ],

                Bio: "Laura tiene 21 anos y estudia en la universidad. Le interesa la historia del arte y suele buscar informacion para realizar trabajos y estudiar. No es experta en arte, por lo que necesita explicaciones claras, imagenes de calidad e informacion facil de entender.",

                Tech: [
                    { Name: "TIC/Internet", Value: 5 },
                    { Name: "Movil", Value: 5 },
                    { Name: "RRSS", Value: 5 },
                    { Name: "Software", Value: 4 }
                ],

                Contextos: "Necesita encontrar informacion sobre diferentes obras artisticas para realizar un trabajo universitario. Busca una pagina donde pueda consultar rapidamente autores, fechas y caracteristicas de las obras.",

                PreferredChannels: [
                    { Name: "Publicidad Tradicional", Value: 2 },
                    { Name: "Online & Social Media", Value: 5 },
                    { Name: "Recomendaciones & sugerencias", Value: 4 },
                    { Name: "Persona confianza (amigos, boca a boca)", Value: 3 }
                ]
            },

            {
                /****************************************/
                /************ SEGUNDA PERSONA **********/
                /****************************************/

                Id: 1,
                Name: "Carlos Fernandez",
                Photo: "man.png",
                Quote: "Me gusta descubrir obras interesantes y conocer su historia de una manera sencilla.",
                Age: 42,
                Occupation: "Administrativo",
                Family: "Vive con su pareja y sus hijos",
                Location: "Granada",
                Character: "Tranquilo, observador y curioso.",

                PersonalityTraits: [
                    { Name: "Introvertido/reservado Vs Extrovertido/activo", Value: 2 },
                    { Name: "Realista/practico Vs Intuicion/imaginativo", Value: 4 },
                    { Name: "Racional/analitico Vs Emocional/impulsivo", Value: 3 },
                    { Name: "Flematico/apatico Vs Colerico/visceral", Value: 2 }
                ],

                Goals: [
                    "Descubrir obras artisticas importantes",
                    "Explorar diferentes estilos y epocas",
                    "Consultar fotografias de las obras",
                    "Conocer la historia de cada obra",
                    "Navegar por la pagina sin complicaciones"
                ],

                Frustrations: [
                    "Textos demasiado tecnicos o especializados",
                    "Paginas con demasiadas opciones",
                    "Dificultad para encontrar informacion concreta",
                    "Disenos poco claros o con letras demasiado pequenas"
                ],

                Bio: "Carlos tiene 42 anos y trabaja como administrativo. En su tiempo libre disfruta visitando museos y exposiciones. Le interesan la arquitectura, la pintura y la escultura, aunque no tiene conocimientos especializados. Busca una pagina visual y sencilla donde pueda descubrir obras importantes y conocer su historia sin complicaciones.",

                Tech: [
                    { Name: "TIC/Internet", Value: 3 },
                    { Name: "Movil", Value: 4 },
                    { Name: "RRSS", Value: 3 },
                    { Name: "Software", Value: 3 }
                ],

                Contextos: "Durante su tiempo libre quiere descubrir nuevas obras artisticas y conocer sus historias. Accede a la pagina desde su movil y busca informacion breve, visual y facil de comprender.",

                PreferredChannels: [
                    { Name: "Publicidad Tradicional", Value: 3 },
                    { Name: "Online & Social Media", Value: 3 },
                    { Name: "Recomendaciones & sugerencias", Value: 4 },
                    { Name: "Persona confianza (amigos, boca a boca)", Value: 5 }
                ]
            }

        ];

        $scope.model = $scope.Personas[0];

    }]);
