/* -----------------------------------------------
/* How to use? : Check the GitHub README
/* ----------------------------------------------- */

/* To load a config file (particles.json) you need to host this demo (MAMP/WAMP/local)... */
/*
particlesJS.load('particles-js', 'particles.json', function() {
  console.log('particles.js loaded - callback');
});
*/

/* Otherwise just put the config content (json): */

particlesJS('particles-js',

    {
        "particles": {
            "number": {
                "value": 30,
                "density": {
                    "enable": true,
                    "value_area": 680
                }
            },

            "color": { "value": "#bb0000"},
           
            "size": {"value": 3},


            "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#55acee",
                "opacity": 0.9,
                "width": 2
            },

            "move": {
                "enable": true,
                "speed": 5,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "attract": {
                    "enable": false,
                    "rotateX": 800,
                    "rotateY": 1500
                }
            }
        },

        "interactivity": {
            "events": {
                "onhover": {
                    "enable": true,
                    "mode": "repulse"
                },
                "onclick": {
                    "enable": true,
                    "mode": "push"
                },
                "resize": true
            },

            "modes": {
                
                "repulse": {
                    "distance": 150
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 8
                }
            }
        },

        

    }

);