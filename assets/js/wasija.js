$(document).ready(function(){
    $('#btn_submit').on('click', function(){
        let user = $('#log_nis').val()
        let pwd = $('#log_pas').val()
        console.log(user);
        

        $.ajax({
            type: 'post',
            data: {
                user: user,
                pwd: pwd
            },
            url:'localhost/WaSIJA/submit',
            beforesend : function(){
                html: 'Loading....'
            },
            success: function(data){
                alert(data)
            }
        })
    })
})