<table class="subcopy" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <!-- imagem -->
            <div class="subcopy-item">
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td align="center" valign="top">
                            <span class="avatar rounded-circle fe-img-center">
                                    <img src="{{ asset('images/default/default-user.png') }}" alt="" width="50" border="0">
                                </span>
                        </td>
                    </tr>
                </table>
            </div>

            <!-- texto -->
            <div class="subcopy-item">
                <table cellpadding="0" cellspacing="0" border="0" width="100%">
                    <tr>
                        <td align="left" valign="top">
                            <span class="footer-text-1">{{ config('app.name', 'Nfs-e') }}</span>
                            <div class="space">&nbsp;</div>
                            <span class="footer-text-2">Desenvolvido por <a class="no-link" href="http://www.codintop.com/" target="_blank">Luan Araujo</a></span>
                        </td>
                    </tr>
                </table>
                <div class="space">&nbsp;</div>
                <div class="space">&nbsp;</div>
                <div class="space">&nbsp;</div>
            </div>
            <div class="space-max">&nbsp;</div>

            {{ Illuminate\Mail\Markdown::parse($slot) }}
        </td>
    </tr>
</table>
