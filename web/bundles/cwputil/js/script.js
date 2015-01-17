/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$(function(){
    
});

/**
 * 
 * @param {type} editorid
 * @param {type} inputId
 * @param {type} disId
 * @param {type} showId
 * @returns {undefined}
 */
function initImageUpload(editorid, inputId, disId,showId) {
    var image = {
        editor: null,
        init: function(editorid, keyid, disId) {
            var _editor = this.getEditor(editorid);
            _editor.ready(function() {
                _editor.setDisabled();
                _editor.hide();
                _editor.addListener('beforeInsertImage', function(t, args) {
                    var imgsrc = args[0].src;
                    $("#" + keyid).val(imgsrc);
                    $("#" + disId).html('<img src="' + imgsrc + '" width="120" height="120" />');
                });
            });
        },
        getEditor: function(editorid) {
            this.editor = UE.getEditor(editorid);
            return this.editor;
        },
        show: function(id) {
            var _editor = this.editor;
            //注意这里只需要获取编辑器，无需渲染，如果强行渲染，在IE下可能会不兼容（切记）  
            //和网上一些朋友的代码不同之处就在这里  
            $("#" + id).click(function() {
                var image = _editor.getDialog("insertimage");
                image.render();
                image.open();
            });
        },
        render: function(editorid) {
            var _editor = this.getEditor(editorid);
            _editor.render();
        }
    };
    image.init(editorid, inputId, disId);
    image.show(showId);
}