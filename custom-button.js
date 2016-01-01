(function() {
    tinymce.create('tinymce.plugins.jinda_buttons', {
        /**
         * Initializes the plugin, this will be executed after the plugin has been created.
         * This call is done before the editor instance has finished it's initialization so use the onInit event
         * of the editor instance to intercept that event.
         *
         * @param {tinymce.Editor} ed Editor instance that the plugin is initialized in.
         * @param {string} url Absolute URL to where the plugin is located.
         */
        init : function(ed, url) {
           ed.addButton('dropcap', {
                title : 'DropCap letter',
                cmd : 'dropcap',
                image : url + '/img/dropcap.png'
           });
           ed.addButton('vdoyoutube', {
                title : 'Add Youtube video',
                cmd : 'youtube',
                image : url + '/img/youtube.png'
           });
           ed.addButton('vdovimeo', {
                title : 'Add Vimeo video',
                cmd : 'vimeo',
                image : url + '/img/vimeo.png'
           });
           ed.addButton('responsivebtn', {
                title : 'Add Responsive element',
                cmd : 'responsive',
                image : url + '/img/dailymotion.png'
           });

           //command button

           ed.addCommand('dropcap', function() {
                var selected_text = ed.selection.getContent();
                var return_text = '';
                return_text = '<span class="dropcap">' + selected_text + '</span>';
                ed.execCommand('mceInsertContent', 0, return_text);
            });

           ed.addCommand('youtube', function(){
                var youtube_link = prompt(" Please insert youtube video link "), shortcode;
                if( youtube_link != null ){
                    shortcode = '[youtube]'+youtube_link+'[/youtube]';
                    ed.execCommand('mceInsertContent', 0, shortcode);
                }
           })

           ed.addCommand('vimeo', function(){
                var vimeo_link = prompt(" Please insert vimeo video link "), shortcode;
                if( vimeo_link != null ){
                    shortcode = '[vimeo]'+vimeo_link+'[/vimeo]';
                    ed.execCommand('mceInsertContent', 0, shortcode);
                }
           })

           ed.addCommand('responsive', function(){
                var responsive_unit = prompt(" Paste an iframe or embed code below.. "), shortcode;
                if( responsive_unit != null ){
                    shortcode = '[responsive]'+responsive_unit+'[/responsive]';
                    ed.execCommand('mceInsertContent', 0, shortcode);
                }
           })

        },
 
        /**
         * Creates control instances based in the incomming name. This method is normally not
         * needed since the addButton method of the tinymce.Editor class is a more easy way of adding buttons
         * but you sometimes need to create more complex controls like listboxes, split buttons etc then this
         * method can be used to create those.
         *
         * @param {String} n Name of the control to create.
         * @param {tinymce.ControlManager} cm Control manager to use inorder to create new control.
         * @return {tinymce.ui.Control} New control instance or null if no control was created.
         */
        createControl : function(n, cm) {
            return null;
        },
 
        /**
         * Returns information about the plugin as a name/value array.
         * The current keys are longname, author, authorurl, infourl and version.
         *
         * @return {Object} Name/value array containing information about the plugin.
         */
        getInfo : function() {
            return {
                longname : 'Jinda Buttons',
                author : 'Jirayu L.',
                authorurl : 'http://www.jir4yu.me',
                infourl : 'http://wiki.moxiecode.com/index.php/TinyMCE:Plugins/example',
                version : "0.1"
            };
        }
    });
 
    // Register plugin
    tinymce.PluginManager.add( 'jinda_buttons', tinymce.plugins.jinda_buttons );
})();