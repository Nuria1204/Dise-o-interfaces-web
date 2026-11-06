
/******************************************************/
/*                  JOURNEY.JS                        */
/*             Datos para USER JOURNEY MAP            */
/*                  UX Toolkit v1.0                   */
/******************************************************/

angular.module("angular", [])
    .controller("controller", ["$scope", function($scope) {

        $scope.Grupo_ID = "Individual - ARTEA";
        $scope.Curso = "2026/27";
        $scope.Github_ID = "https://github.com/mgea/UX-DIU-Toolkit";

        $scope.JourneyIndex = 0;

        $scope.Journeys = [

            {
                /****************************************/
                /************ PRIMER JOURNEY ************/
                /****************************************/

                Id: 0,
                Name: "Laura Martinez",
                Photo: "woman.png",

                /* PASO 1: INSPIRACION */

                goal1: "Necesita encontrar informacion sobre obras de arte para realizar un trabajo universitario.",
                touch1: "Universidad y ordenador",
                feel1: "3",
                con1: "No sabe donde encontrar informacion fiable y bien organizada.",
                ima1: "cartoon-planning.png",

                /* PASO 2: DECISION */

                goal2: "Busca en internet paginas web relacionadas con el arte.",
                touch2: "Ordenador y buscador de internet",
                feel2: "2",
                con2: "Encuentra demasiadas paginas y pierde tiempo buscando informacion.",
                ima2: "cartoon-PCangry.png",

                /* PASO 3: ACTUA */

                goal3: "Encuentra ARTÉA y accede a la pagina principal.",
                touch3: "Pagina web ARTÉA",
                feel3: "4",
                con3: "Necesita identificar rapidamente las categorias de arquitectura, pintura y escultura.",
                ima3: "cartoon-phone.png",

                /* PASO 4: OBSERVA */

                goal4: "Entra en la categoria de pintura y explora las obras disponibles.",
                touch4: "Menu y categorias de ARTÉA",
                feel4: "4",
                con4: "Quiere encontrar las obras relacionadas con el tema de su trabajo.",
                ima4: "cartoon-PCtyping.png",

                /* PASO 5: ANALIZA */

                goal5: "Selecciona una obra y consulta su autor, fecha, estilo e historia.",
                touch5: "Ficha de informacion de la obra",
                feel5: "5",
                con5: "Necesita que la informacion sea clara, completa y facil de comprender.",
                ima5: "cartoon-phoning.png",

                /* PASO 6: CONCLUSION */

                goal6: "Encuentra la informacion necesaria para completar su trabajo universitario.",
                touch6: "Pagina web ARTÉA",
                feel6: "5",
                con6: "Consigue consultar la informacion sin tener que visitar diferentes paginas web.",
                ima6: "cartoon-resting.png"

            },

            {

                /****************************************/
                /************ SEGUNDO JOURNEY ***********/
                /****************************************/

                Id: 1,
                Name: "Carlos Fernandez",
                Photo: "man.png",

                /* PASO 1: INSPIRACION */

                goal1: "Durante su tiempo libre quiere descubrir nuevas obras de arte y conocer su historia.",
                touch1: "Tiempo libre y movil",
                feel1: "4",
                con1: "No sabe que obras o estilos artisticos puede descubrir.",
                ima1: "cartoon-going.png",

                /* PASO 2: DECISION */

                goal2: "Busca una pagina web donde pueda consultar obras artisticas.",
                touch2: "Movil y buscador de internet",
                feel2: "3",
                con2: "Encuentra paginas con demasiada informacion y contenidos complicados.",
                ima2: "cartoon-teamthinking.png",

                /* PASO 3: ACTUA */

                goal3: "Accede a ARTÉA y descubre las diferentes categorias artisticas.",
                touch3: "Pagina web ARTÉA",
                feel3: "4",
                con3: "Quiere encontrar facilmente las secciones de arquitectura, pintura y escultura.",
                ima3: "cartoon-phoningangry.png",

                /* PASO 4: OBSERVA */

                goal4: "Explora las diferentes categorias y observa las imagenes de las obras.",
                touch4: "Categorias y galeria de obras",
                feel4: "5",
                con4: "Necesita fotografias de calidad y una presentacion visual atractiva.",
                ima4: "cartoon-phone-street.png",

                /* PASO 5: ANALIZA */

                goal5: "Selecciona una obra que le interesa y lee su informacion.",
                touch5: "Ficha de informacion de la obra",
                feel5: "4",
                con5: "No quiere encontrarse con textos demasiado tecnicos o extensos.",
                ima5: "cartoon-phone-sitting.png",

                /* PASO 6: CONCLUSION */

                goal6: "Descubre nuevas obras y aprende sobre diferentes estilos artisticos.",
                touch6: "Pagina web ARTÉA",
                feel6: "5",
                con6: "Consigue encontrar informacion de forma sencilla y disfruta explorando la pagina.",
                ima6: "cartoon-resting.png"

            }

        ];

        $scope.model = $scope.Journeys[0];

    }]);
