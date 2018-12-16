$("#accordion")
            .accordion({
                collapsible: true,
                active: false,
                heightStyle: "content",
                beforeActivate: function (event, ui) {
                    var oldInput = ui.oldHeader.find('input');
                    oldInput.prop('checked', !oldInput.prop('checked')) // this bit unchecks when the accordion is closed

                    var newInput = ui.newHeader.find('input'); // this bit checks when the accordion is opened
                    newInput.prop('checked', !newInput.prop('checked'))
                }
            });