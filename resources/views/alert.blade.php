<style>
    #alert {
        background-color: rgba(221, 13, 13, 0.8);
        border: 1px solid rgba(0, 0, 0, 0.8);
        margin: 20px 20px 0px 20px;
        padding: 15px;
        color: white;
        border-radius: 5px;
        transition: 0.5s;
        z-index: 99999;
    }

    #alert:hover {
        background-color: rgba(209, 15, 15);
        border: 1px solid rgba(0, 0, 0);
    }

    text-area {
        display: inline-block;
        font-size: 14px
    }

    #btn-close {
        border: 0px;
        background-color: rgba(255, 255, 255, 0);
        transition: 0.7s;
    }

    #btn-close-img:hover {
        width: 12px;
        height: 14px;
    }

</style>

<div id="alert">
    <div class="text-area">
        {{ $slot }}
    </div>
    <button id="btn-close" value="close" onclick="removeAlert();">
        <img id="btn-close-img"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/77/Letter_x.svg/569px-Letter_x.svg.png"
            alt="close button" height="13px" width="10px">
    </button>
</div>

<script>
    function removeAlert() {
        var alert = document.getElementById('alert');
        alert.parentNode.removeChild(alert);
    }
</script>
