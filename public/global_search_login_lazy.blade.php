<?php 
$user_data = session('user_data');
if (!empty($user_data)) {
    $user_data1 = session('user_data')['userID'];
} else {
    $user_data1 = 0;
}

?>
<style>
    .headerSearchBar i.fa-search {
        position: absolute;
        right: 186px;
        width: 35px;
        height: 25px;
        background: #F68B29;
        animation: changeBackground 5s infinite alternate;
        color: #fff;
        top: 20px;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 5px #e8e8e8;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    /* Define the keyframes for the animation */
    @keyframes changeBackground {
        0% {
            background-color: #F68B29;
            /* Initial color */
        }

        50% {
            background-color: #4578C6;
            /* Intermediate color */
        }

        100% {
            background-color: #F68B29;
            /* Final color */
        }
    }

    form#linkForm {
        width: 100%;
        margin: auto;
    }

    #input-drop-down {
        border-radius: 50px;
        padding: 1rem !important;
        z-index: 999;
        width: 100%;
        font-size: 16px;
        border: solid 1px #d5d5d5;
        margin-top: 1.6rem;
    }


    ul#suggestions {
        border-radius: 10px;
        width: 100%;
        background: #fff;
        z-index: 9999;
        text-align: left;
        padding: 1rem;
        box-shadow: 0 10px 15px #ccc;
        margin: auto;
    }

    ul#suggestions li {
        list-style: none;
        font-size: 14px;
        margin-bottom: 0;
        padding: 6px;
        cursor: pointer;
    }

    #suggestions {
        display: none;
    }


    ul#suggestions li:hover {
        background-color: #f5f5f5;
    }

    .searchArrow {
        width: 0;
        height: 0;
        border-style: solid;
        border-right: 10px solid transparent;
        border-left: 10px solid transparent;
        border-bottom: 10px solid #f68a28;
        border-top: 0;
        /* border-bottom: 0; */
        top: 2px;
        right: 178px;
        position: absolute;
    }

    .searchBarSection {
        background: #fff;
        padding: 20px;
        width: 100vw;
        position: fixed;
        left: 0;
        top: 0;
        height: 20vh;
        z-index: 9999;
        transform: translateY(-110%);
        transition: transform .6s cubic-bezier(.86, 0, .07, 1);
    }

    .sectionBarOuterBox::before {
        content: '';
        position: fixed;
        top: 0;
        left: 0;
        height: 100vh;
        width: 100vw;
        background: #0000007a;
        z-index: 9999;
        opacity: 0;
        visibility: hidden;
        transition: opacity .6s;
    }

    .searchBarSection h2 {
        margin-bottom: 1rem;
        font-size: 1.2rem;
    }


    .sectionBarOuterBox.open:before {
        opacity: 1;
        visibility: visible;
    }

    .popup-search {
        transform: translateY(0);
    }

    .searchBarSection i.fa-times {
        position: absolute;
        right: 12px;
        top: 12px;
        width: 30px;
        height: 30px;
        background: rgb(246, 139, 41);
        background: linear-gradient(180deg, rgba(246, 139, 41, 1) 0%, rgba(249, 119, 0, 1) 100%);
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 50px;
        cursor: pointer;
    }

    .suggestionsHide {
        display: none !important;
    }

    @media(min-width:767px) {
        .headerSearchBar i.fa-search {
            right: 264px;
            top: 12px;
            height: 35px;
        }

        ul#suggestions {
            border-radius: 10px;
            width: 50%;
        }

        .logout .headerSearchBar i {
            right: 195px;
            top: 15px;
        }


        .searchArrow {
            right: 253px;
            top: -1px;
        }

        form#linkForm {
            width: 50%;
            margin: auto;
        }

        .searchBarSection h2 {
            font-size: 1.6rem;
        }

        .searchBarSection {
            height: 20vh;
        }

        .searchBarSection i.fa-times {
            right: 50px;
            top: 20px;
        }

    }


    #submitButton {
        display: none;
    }

    li.active {
        background-color: #f1f1f1;
    }

    /* 
i#searchBarToggle::after {
    content: "";
    display: block;
    background: linear-gradient(90deg, hsl(0deg 0% 100%) 0%, hsl(214.77deg 83.61% 76.93%) 100%);
    height: 33px;
    width: 33px;
    position: absolute;
    animation: rotate 8s linear infinite;
    z-index: 0;
    opacity: 0.5;
    border-radius: 0.5rem;
    border: 0;
}

@keyframes rotate {
  from {
    transform: rotate(0);
  }

  to {
    transform: rotate(360deg);
  }
} */
</style>


<div class="headerSearchBar">
    <i class="fas fa-search" id="searchBarToggle" onclick="toggleSearchBar()"></i>
    <div class="sectionBarOuterBox">
        <div class="searchBarSection">
            <i class="fas fa-times closeSearchModalBox"></i>
            <form action="{{url('/')}}/submitlink" method="post" id="linkForm">
                @csrf
                <div id="searchBarInputBox">
                    <input type="text" placeholder="Search Exam / Courses / Mock Test / Beepedia" id="input-drop-down"
                        name="input-drop-down"><br>
                </div>
                <button type="submit" id="submitButton">Submit</button>
            </form>
            <ul id="suggestions"></ul>
        </div>
    </div>
</div>


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->

<!-- <script>
    $(document).ready(function () {
        $("#linkForm").on("keypress", function (event) {
            if (event.key == "Enter") {
                event.preventDefault();
            }
        })
        console.log("api started");
        $("#input-drop-down").attr("autocomplete", "off");

        let debounceTimeout;

        $('#input-drop-down').on('input', function (event) {
            clearTimeout(debounceTimeout);

            debounceTimeout = setTimeout(function () {
                var formData = {
                    param: $('#input-drop-down').val().trim(),
                    user_id: '<?php //echo $user_data1; ?>',
                    page_url: "{{url()->full()}}"

                };

                if ($("#input-drop-down").val().trim() != "") {
                    $.ajax({
                        url: "{{url('/')}}/api/linksuggester",
                        type: 'POST',
                        data: formData,
                        dataType: 'json',
                        success: function (response) {
                            $("#suggestions").html("");
                            for (var key in response) {
                                $("#suggestions").append("<li onclick='linkClicked(this)'>" + response[key]["term"] + "</li>");
                            }
                            if (response.length == 0) {
                                $("#suggestions").append("<li>No result found, try something else</li>");
                            }
                            $("#suggestions").css("display", "block");
                            navigation();
                        },
                        error: function (xhr, status, error) {
                            $('#suggestions').html('<p>An error occurred: ' + error + '</p>');
                            $("#suggestions").css("display", "block");
                        }

                    });
                }
                else {
                    $("#suggestions").css("display", "none");
                    $("#suggestions").html("");
                }
            }, 1000);
        });
    });
    function linkClicked(element) {
        let value = $(element).text();
        document.getElementById("input-drop-down").value = value;
        document.getElementById("submitButton").click();
    }
</script>

<script>
    function toggleSearchBar() {
        if (document.getElementById("linkForm").style.display === "block") {
            document.getElementById("suggestions").style.display = "none";
        }
        else {
            document.getElementById("linkForm").style.display = "block";
            document.getElementById("input-drop-down").focus();
        }
    }
</script>

<script>

    let eventHandler;

    function navigation() {
        if (eventHandler != null) {
            document.removeEventListener("keydown", eventHandler);
            console.log("eventHandler removed");
        }

        a = document.getElementById("suggestions");
        var li = a.getElementsByTagName("li");
        var current = -1;

        eventHandler = function (event) {
            const key = event.key;
            switch (key) {
                case "Enter":
                    event.preventDefault();
                    li[current].click();

                    break;
                case "ArrowUp":
                    if (current != -1) {
                        li[current].classList.remove("active");
                    }
                    if (current - 1 >= 0) {
                        current = current - 1;
                    } else {
                        current = li.length - 1;
                    }
                    li[current].classList.add("active");
                    break;
                case "ArrowDown":
                    if (current != -1) {
                        li[current].classList.remove("active");
                    }
                    current = (current + 1) % li.length;
                    li[current].classList.add("active");
                    break;
            }
        };

        document.addEventListener("keydown", eventHandler);
    }


</script> -->

<!-- toggle class on click -->
<!-- <script>
    $(document).ready(function () {
        $('#searchBarToggle').click(function () {
            $('.sectionBarOuterBox').addClass('open');
            $('.searchBarSection').addClass('popup-search')
            $('#suggestions').removeClass('suggestionsHide')
        });

        $('.closeSearchModalBox').click(function () {
            $('.sectionBarOuterBox').removeClass('open');
            $('.searchBarSection').removeClass('popup-search')
            $('#suggestions').addClass('suggestionsHide')
        });

        // Remove popup-search class and open class when clicking outside of searchBarSection
        $(document).mouseup(function (e) {
            var $searchBarSection = $('.searchBarSection');
            var $sectionBarOuterBox = $('.sectionBarOuterBox');
            var $suggestionsHide = $('#suggestions');
            $("#input-drop-down").val("");

            if (!$searchBarSection.is(e.target) && $searchBarSection.has(e.target).length === 0) {
                $searchBarSection.removeClass('popup-search');
                $sectionBarOuterBox.removeClass('open');
                $suggestionsHide.addClass('suggestionsHide');
            }
        });
    });

</script> -->