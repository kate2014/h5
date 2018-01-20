function GetUser(userCookie)
{
     if(userCookie.UserId!=0){
         var data = {
                  "UserId": userCookie.UserId,
                  "Username": userCookie.Username,
                  "Action": "login",
                  "sig":userCookie.Sig,
                  "time":userCookie.time
              }
         var url="/apiHandler.html?Action=login&UserId="+userCookie.UserId+"&Username="+userCookie.Username+"&time="+userCookie.time+"&sig="+userCookie.Sig;
         $.ajax(url, {
              type: "post", dataType: "json",
              data: data
          }).done(function(d) {
              if(d.msg=="YES"){
                    window.location.href="Default.html";
              }else{
                    $("body").show();
              }
          })
          .fail(function() { alert("网络异常") });
    }else{
        $("body").show();
    } 
}