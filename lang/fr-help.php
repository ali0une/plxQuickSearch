<?php if(!defined('PLX_ROOT')) exit; ?>

<h2>Aide</h2>
<p>
Editer pluxml/core/admin/medias.php et modifier ligne 232 :
<br />
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
			&lt;/p&gt;</pre>
en :
<pre>				&lt;input class="button submit" type="submit" name="btn_action" value="&lt;?php echo L_OK &gt;?" /&gt;
# Hook plxQuickSearch Plugin
&lt;?php eval($plxAdmin->plxPlugins->callHook('AdminMediasQuickSearch')); ?&gt;
#/Hook plxQuickSearch Plugin
			&lt;/p&gt;</pre>
</p>
<p>
Editer pluxml/core/admin/index.php et modifier ligne 144 :
<br />
<pre>	echo '&lt;input class="button submit" type="submit" name="submit" value="'.L_OK.'" /&gt;';
	echo '&lt;/p&gt;';</pre>
en :
<pre>	echo '&lt;input class="button submit" type="submit" name="submit" value="'.L_OK.'" /&gt;';
# Hook plxQuickSearch Plugin
eval($plxAdmin->plxPlugins->callHook('AdminMediasQuickSearch'));
#/Hook plxQuickSearch Plugin
	echo '&lt;/p&gt;';</pre>
</p>
