<script>
    function copyToClipboard() {
        alert("API Token copied to clipboard!")
        navigator.clipboard.writeText("{{ Auth::user()->api_token }}");
    }
</script>
<div class="profile">
    <img src="{{ Gravatar::get(Auth::user()->email, ['size' => 200]) }}" alt="Paris" class="profile" style="width:200px;height:200px;">
    <div style="font-size: 30px">{{ Auth::user()->name ?? "No User Logged In" }}</div>
    <div><a href="javascript:copyToClipboard()">Copy API Token</a></div>
</div>
