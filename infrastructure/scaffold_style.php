<?php
    require_once "constants.php";
    // Definitions
    $baseSize = "4px";
    $iterations = 12;
    // Style  scaffold    
    function scaffold_style() {
        global $baseSize;
        global $iterations;
        global $BASE_URL;
    ?>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <style>
        @import url('https://fonts.googleapis.com/css?family=Raleway|Ubuntu&display=swap');
        /* Variables */
        :root {
            /* Colors */
            --dark-light-color: <?php echo DARK_LIGHT_COLOR ?>;
            --dark-color: <?php echo DARK_COLOR ?>;
            --primary-color: <?php echo PRIMARY_COLOR ?>;
            --primary-dark-color: <?php echo PRIMARY_DARK_COLOR ?>;
            --accent-color: <?php echo ACCENT_COLOR ?>;
            --error-color: <?php echo ERROR_COLOR ?>;
            /* Dimensions */
            --base-size: <?php echo $baseSize ?>;
        }
        /* Reset */
        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            font-family: 'Ubuntu';
            color: white;
        }
        html {
            min-width: 100vw;
            min-height: 100vh;
        }
        body {
            display: flex;
            flex-direction: column;
            align-items: stretch;
            width: 100%;
            height: 100%;
            background-color: var(--dark-light-color);
            overflow-x: hidden;
        }
        h1, h2, h3, h4, h5, h6 {
            font-weight: 100;
            font-family: 'Raleway';
        }
        a {
            text-decoration: none;
            color: unset;
        }
        /* Containers */
        .bg-primary {
            background-color: var(--primary-color);
        }
        .bg-error {
            background-color: var(--error-color);
        }
        .bg-dark {
            background-color: var(--dark-color);
        }
        .bg-dark-light {
            background-color: var(--dark-light-color);
        }
        .overflow-x-auto {
            overflow-x: auto;
        }
        .overflow-hidden {
            overflow: hidden;
        }
        ul {
            list-style: none;
        }
        .border-radius-circular {
            border-radius: 1e10px;
        }
        .border-white {
            border: white 2px solid;
        }
        .thumb-image {
            height: 32px;
            width: 32px;
        }
        /* Flexbox */
        .flex { display: flex; flex-wrap: wrap; }
        .flex > * { flex-shrink: 0; } 
        .flex-nowrap { flex-wrap: nowrap; }
        .flex-row { flex-direction: row; }
        .flex-column { flex-direction: column; }
        .flex-grow { flex: 1; }
        .justify-center { justify-content: center; }
        .justify-between { justify-content: space-between; }
        .justify-end { justify-content: end; }
        .align-center { align-items: center; }
        .align-start { align-items: flex-start; }
		.align-end { align-items: flex-end; }
        .align-stretch { align-items: stretch; }
        /* Text styles */
        .text-primary { color: var(--primary-color); }
        .text-primary-dark { color: var(--primary-dark-color); }
        .text-accent { color: var(--accent-color); }
        .text-center { text-align: center; }
        .text-justified { text-align: justify; }
        .text-font-title { font-family: 'Raleway'; }
        .text-font-body { font-family: 'Ubuntu'; }
        .text-weight-light { font-weight: lighter; }
        .text-weight-bold { font-weight: bold; }
        .text-small { font-size: .6em; }
        .text-medium { font-size: .8em; }
        /* Forms */
        .data-form .form-title {
            margin-bottom: calc(var(--base-size) * 6);
            border-left: calc(var(--base-size) * 1) solid var(--primary-color);
            margin-left: calc(var(--base-size) * -6);
            padding-left: calc(var(--base-size) * 6 - var(--base-size) * 1);
        }
        .data-form p input, .data-form p textarea {
            border: none;
            padding: calc(var(--base-size) * 2);
            border-bottom: 1px solid white;
            background: transparent;
            transition: border-bottom-color .3s, color .3s;
            font-size: 1.25em;
        }
        .data-form p input:hover, .data-form p textarea:hover {
            border-bottom-color: var(--primary-color);
            color: var(--primary-color);
        }
        .data-form p input:focus, .data-form p textarea:focus {
            border-bottom-color: var(--primary-color);
            border-bottom-width: 2px;
            color: var(--primary-color);
        }
        .data-form p.error {
            font-size: .8em;
            color: var(--error-color);
        }
        .data-form button, .action-button {
            cursor: pointer;
            background: transparent;
            padding: calc(var(--base-size) * 2);
            border: calc(var(--base-size) / 2) solid white;
            font-weight: bold;
            font-family: 'Raleway';
            text-transform: uppercase;
            border-radius: calc(var(--base-size) * 1000);
            padding: calc(var(--base-size) * 2) calc(var(--base-size) * 4);
        }
        .data-form button:hover, .action-button:hover {
            background-color: white;
            color: var(--dark-color);
        }
        .data-form button.primary, .action-button.primary {
            color: var(--primary-color);
            border-color: var(--primary-color);
        }
        .data-form button.primary:hover, .action-button.primary:hover {
            color: var(--dark-color);
            background-color: var(--primary-color);
        }
        .data-form button.remove, .action-button.remove {
            color: var(--error-color);
            border-color: var(--error-color);
        }
        .data-form button.remove:hover, .action-button.remove:hover {
            color: var(--dark-color);
            background-color: var(--error-color);
        }
        /* Layout box */
        <?php
        for($i = 1; $i <= $iterations; $i++) {
        ?>.ma-<?php echo $i ?> {
            margin: calc(var(--base-size) * <?php echo $i; ?>);
        }
        .mx-<?php echo $i ?> {
            margin-left: calc(var(--base-size) * <?php echo $i ?>);
            margin-right: calc(var(--base-size) * <?php echo $i ?>);
        }
        .mt-<?php echo $i ?> {
            margin-top: calc(var(--base-size) * <?php echo $i ?>);
        }
        .mb-<?php echo $i ?> {
            margin-bottom: calc(var(--base-size) * <?php echo $i ?>);
        }
        .mr-<?php echo $i ?> {
            margin-right: calc(var(--base-size) * <?php echo $i ?>);
        }
        .ml-<?php echo $i ?> {
            margin-left: calc(var(--base-size) * <?php echo $i ?>);
        }
        .my-<?php echo $i ?> {
            margin-top: calc(var(--base-size) * <?php echo $i ?>);
            margin-bottom: calc(var(--base-size) * <?php echo $i ?>);
        }
        /*  */
        .pa-<?php echo $i ?> {
            padding: calc(var(--base-size) * <?php echo $i ?>);
        }
        .pt-<?php echo $i ?> {
            padding-top: calc(var(--base-size) * <?php echo $i ?>);
        }
        .pl-<?php echo $i ?> {
            padding-left: calc(var(--base-size) * <?php echo $i ?>);
        }
        .pb-<?php echo $i ?> {
            padding-bottom: calc(var(--base-size) * <?php echo $i ?>);
        }
        .pr-<?php echo $i ?> {
            padding-right: calc(var(--base-size) * <?php echo $i ?>);
        }
        .px-<?php echo $i ?> {
            padding-left: calc(var(--base-size) * <?php echo $i ?>);
            padding-right: calc(var(--base-size) * <?php echo $i ?>);
        }
        .py-<?php echo $i ?> {
            padding-top: calc(var(--base-size) * <?php echo $i ?>);
            padding-bottom: calc(var(--base-size) * <?php echo $i ?>);
        }
        /*  */
        .elevation-<?php echo $i ?> {
            box-shadow: 0px 0px <?php echo $i * 2 ?>px <?php echo $i ?>px rgba(0, 0, 0, .25);
        }
        .border-radius-<?php echo $i ?> {
            border-radius: <?php echo $i * 2 ?>px;
        }
        .laboratory-select {
            display: inline-block;
            font-size: 16px;
            font-family: sans-serif;
            font-weight: 700;
            color: white;
            line-height: 1.3;
            padding: .6em 1.4em .5em .8em;
            width: 100%;
            max-width: 100%;
            box-sizing: border-box;
            border: 1px solid #aaa;
            box-shadow: 0 1px 0 1px rgba(0,0,0,.04);
            border-radius: .5em;
            -moz-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            background-color: transparent;
        }
        .laboratory-select::-ms-expand {
            display: none;
        }
        .laboratory-select:hover {
            border-color: #646464;
        }
        .laboratory-select:focus {
            border-color: #aaa;
            box-shadow: 0 0 1px 3px rgba(59, 153, 252, .7);
            box-shadow: 0 0 0 3px -moz-mac-focusring;
            color: white;
            outline: none;
        }
        .laboratory-select option {
            font-weight:normal;
            background-color: #323232;
            color: white;
        }
        .laboratory-select:active, link
        {
            color: white;
            background-color: transparent;
        }
        <?php } ?>
    </style><?php
    }
?>