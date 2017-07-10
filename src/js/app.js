// Import Foundation 
import 'script-loader!what-input/dist/what-input';
import 'script-loader!foundation-sites/dist/js/foundation';

// Import the apps styles
import sass from '../scss/app.scss'

// Import our modules
import './modules/_header.js'

// Foundation init
$(function() {
  $(document).foundation();
});