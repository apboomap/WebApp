$(document).ready(function(){
            // ประเภทการค้นหา
            $("#noti").show();
                $("#show1").hide();
                $("#show2").hide();
                $("#show3").hide();

            $("#press1").click(function(){
                $("#show1").show();
                $("#show2").hide();
                $("#show3").hide();
                    $("#noti").hide();
                    $("#name1").html($(this).text()+' <span class="caret"></span>');
            });

            $("#press2").click(function(){
                $("#show1").hide();
                $("#show2").show();
                $("#show3").hide();
                    $("#noti").hide();
                    $("#name1").html($(this).text()+' <span class="caret"></span>');
            });

            $("#press3").click(function(){               
                $("#show1").hide();
                $("#show2").hide();
                $("#show3").show();               
                    $("#noti").hide();
                    $("#name1").html($(this).text()+' <span class="caret"></span>');
            });

            // ประเภทการวิ่ง
             $("#type1").click(function(){               
                $("#noti").hide();
                $("#name2").html($(this).text()+' <span class="caret"></span>');
            });

            $("#type2").click(function(){               
                $("#noti").hide();
                $("#name2").html($(this).text()+' <span class="caret"></span>');
            });

            $("#type3").click(function(){               
                $("#noti").hide();
                $("#name2").html($(this).text()+' <span class="caret"></span>');
            });
            
            $("#type4").click(function(){               
                $("#noti").hide();
                $("#name2").html($(this).text()+' <span class="caret"></span>');
            });

            $("#type5").click(function(){               
                $("#noti").hide();
                $("#name2").html($(this).text()+' <span class="caret"></span>');
            });
              
});
