$(function() {
    
    let update = {
        init: function () {
            this.setDOMElements();
            this.setElementsEvents();
        },

        setDOMElements: function () {
            this.nameInput = $('#name');
            this.nicknameInput = $('#nickname');
            this.weightInput = $('#weight');
            this.heightInput = $('#height');
            this.colorInput = $('#color');
            this.genderSelect = $('#gender');
            this.friendlinessSelect = $('#friendliness');
            this.bdayInput = $('#birthday');
        },
        setElementsEvents: function () {
            $( "#birthday" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat: "yy-mm-dd"
            });
            $('#Submit').on('click', update.saveKangarooDetails);
        },
        saveKangarooDetails: async function () {
            try {
                update.clearErrors();
                const requestBody = {
                    "name"         : update.nameInput.val(),
                    "nickname"     : update.nicknameInput.val(),
                    "weight"       : update.weightInput.val(),
                    "height"       : update.heightInput.val(),
                    "color"        : update.colorInput.val(),
                    "gender"       : update.genderSelect.val(),
                    "friendliness" : update.friendlinessSelect.val(),
                    "birthday"     : update.bdayInput.val()
                }
                const response = await axios.put(`/api/kangaroo/${id}`, requestBody);
                alert('Save Success');
                location.reload();
            } catch(error) {
                if (error.response.status !== 422) {
                    alert(error.message);
                    return
                }
                update.showError(error.response.data.errors);
            }
        },
        showError: function(errors) {
            let keys = Object.keys(errors);

            if (keys.length === 0) {
                return
            }

            for (let key of keys) {
                $(`#${key}-error`).text(errors[key][0]);
                $(`#${key}`).addClass('error-input');
            }
        },
        clearErrors: function() {
            $('input').removeClass('error-input');
            $('select').removeClass('error-input');
            $('.error').text('');
        }
    }

    update.init();
});