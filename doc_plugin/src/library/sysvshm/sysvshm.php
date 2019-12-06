<?php

// Start of sysvshm v.

/**
*<div id="function.shm-attach" class="refentry">  <div class="refnamediv">   <h1 class="refname">shm_attach</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">shm_attach</span> &mdash; <span class="dc-title">Creates or open a shared memory segment</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.shm-attach-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">resource</span> <span class="methodname" style="color:#CC7832"><strong>shm_attach</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$key</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$memsize</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$perm</span><span class="initializer"> = 0666</span></span>   ]] )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">shm_attach()</strong></span> returns an id that can be used to access    the System V shared memory with the given <span class="parameter" style="color:#2EACF9">key</span>, the    first call creates the shared memory segment with     <span class="parameter" style="color:#2EACF9">memsize</span> and the optional perm-bits     <span class="parameter" style="color:#2EACF9">perm</span>.   </p>   <p class="para">    A second call to <span class="function"><strong style="color:#CC7832">shm_attach()</strong></span> for the same    <span class="parameter" style="color:#2EACF9">key</span> will return a different shared memory    identifier, but both identifiers access the same underlying    shared memory. <span class="parameter" style="color:#2EACF9">memsize</span> and    <span class="parameter" style="color:#2EACF9">perm</span> will be ignored.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.shm-attach-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">key</span></dt>       <dd>        <p class="para">        A numeric shared memory segment ID       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">memsize</span></dt>       <dd>        <p class="para">        The memory size. If not provided, default to the        <em>sysvshm.init_mem</em> in the <var class="filename">php.ini</var>, otherwise 10000        bytes.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">perm</span></dt>       <dd>        <p class="para">        The optional permission bits. Default to 0666.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.shm-attach-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns a shared memory segment identifier.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 changelog" id="refsect1-function.shm-attach-changelog">   <h3 class="title">更新日志</h3>   <span>    <table class="doctable informaltable">           <thead>       <tr>        <th>版本</th>        <th>说明</th>       </tr>       </thead>       <tbody class="tbody">       <tr>        <td>5.3.0</td>        <td>          This function now returns a <a href="http://php.net/manual/zh/language.types.resource.php" class="link">资源(resource)</a> instead of an           <a href="http://php.net/manual/zh/language.types.integer.php" class="link">integer</a>.        </td>       </tr>       </tbody>         </table>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 notes" id="refsect1-function.shm-attach-notes">   <h3 class="title">注释</h3>   <blockquote class="note" style="border:1px gray solid"><p><strong class="note" style="border:1px gray solid">Note</strong>:     <p class="para">     This function used to return an integer value prior to      PHP 5.3.0. To achieve the same value in a portable manner, the      return value can be cast to an integer like:    </p>    <p class="para">     <div class="example" id="example-4449">      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #FF8000">//&nbsp;Create&nbsp;a&nbsp;temporary&nbsp;file&nbsp;and&nbsp;return&nbsp;its&nbsp;path<br /></span><span style="color: #9876AA">$tmp&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">tempnam</span><span style="color: #007700">(</span><span style="color: #DD0000">'/tmp'</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'PHP'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Get&nbsp;the&nbsp;file&nbsp;token&nbsp;key<br /></span><span style="color: #9876AA">$key&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">ftok</span><span style="color: #007700">(</span><span style="color: #9876AA">$tmp</span><span style="color: #007700">,&nbsp;</span><span style="color: #DD0000">'a'</span><span style="color: #007700">);<br /><br /></span><span style="color: #FF8000">//&nbsp;Attach&nbsp;the&nbsp;SHM&nbsp;resource,&nbsp;notice&nbsp;the&nbsp;cast&nbsp;afterwards<br /></span><span style="color: #9876AA">$id&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">shm_attach</span><span style="color: #007700">(</span><span style="color: #9876AA">$key</span><span style="color: #007700">);<br /><br />if&nbsp;(</span><span style="color: #9876AA">$id&nbsp;</span><span style="color: #007700">===&nbsp;</span><span style="color: #9876AA">false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;die(</span><span style="color: #DD0000">'Unable&nbsp;to&nbsp;create&nbsp;the&nbsp;shared&nbsp;memory&nbsp;segment'</span><span style="color: #007700">);<br />}<br /><br /></span><span style="color: #FF8000">//&nbsp;Cast&nbsp;to&nbsp;integer,&nbsp;since&nbsp;prior&nbsp;to&nbsp;PHP&nbsp;5.3.0&nbsp;the&nbsp;resource&nbsp;id&nbsp;<br />//&nbsp;is&nbsp;returned&nbsp;which&nbsp;can&nbsp;be&nbsp;exposed&nbsp;when&nbsp;casting&nbsp;a&nbsp;resource<br />//&nbsp;to&nbsp;an&nbsp;integer<br /></span><span style="color: #9876AA">$id&nbsp;</span><span style="color: #007700">=&nbsp;(integer)&nbsp;</span><span style="color: #9876AA">$id</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>      </div>    </p>   </p></blockquote>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.shm-attach-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link shm_detach()} - Disconnects from shared memory segment</span></li>     <li class="member"><span class="function">{@link ftok()} - Convert a pathname and a project identifier to a System V IPC key</span></li>    </ul>   </span>  </div>     <div class="up"><a href="http://php.net/manual/zh/ref.sem.php">Semaphore 函数</a></div></div>
 * @return resource a shared memory segment identifier.*/
function shm_attach ($key, $memsize = null, $perm = 0666) {}

/**
*<div id="function.shm-remove" class="refentry">  <div class="refnamediv">   <h1 class="refname">shm_remove</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">shm_remove</span> &mdash; <span class="dc-title">Removes shared memory from Unix systems</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.shm-remove-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>shm_remove</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$shm_identifier</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">shm_remove()</strong></span> removes the shared memory    <span class="parameter" style="color:#2EACF9">shm_identifier</span>. All data will be destroyed.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.shm-remove-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">shm_identifier</span></dt>       <dd>        <p class="para">        The shared memory identifier as returned by        <span class="function">{@link shm_attach()}</span>       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.shm-remove-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.shm-remove-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link shm_remove_var()} - Removes a variable from shared memory</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.sem.php">Semaphore 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function shm_remove ($shm_identifier) {}

/**
*<div id="function.shm-detach" class="refentry">  <div class="refnamediv">   <h1 class="refname">shm_detach</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">shm_detach</span> &mdash; <span class="dc-title">Disconnects from shared memory segment</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.shm-detach-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>shm_detach</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$shm_identifier</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">shm_detach()</strong></span> disconnects from the shared memory given    by the <span class="parameter" style="color:#2EACF9">shm_identifier</span> created by    <span class="function">{@link shm_attach()}</span>. Remember, that shared memory still exist    in the Unix system and the data is still present.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.shm-detach-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">shm_identifier</span></dt>       <dd>        <p class="para">        A shared memory resource handle as returned by        <span class="function">{@link shm_attach()}</span>       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.shm-detach-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    <span class="function"><strong style="color:#CC7832">shm_detach()</strong></span> always returns <strong><span>TRUE</span></strong>.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.shm-detach-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link shm_attach()} - Creates or open a shared memory segment</span></li>     <li class="member"><span class="function">{@link shm_remove()} - Removes shared memory from Unix systems</span></li>     <li class="member"><span class="function">{@link shm_remove_var()} - Removes a variable from shared memory</span></li>    </ul>   </span>  </div>     <div class="up"><a href="http://php.net/manual/zh/ref.sem.php">Semaphore 函数</a></div></div>
 * @return bool <b>shm_detach</b> always returns <b>TRUE</b>.*/
function shm_detach ($shm_identifier) {}

/**
*<div id="function.shm-put-var" class="refentry">  <div class="refnamediv">   <h1 class="refname">shm_put_var</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">shm_put_var</span> &mdash; <span class="dc-title">Inserts or updates a variable in shared memory</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.shm-put-var-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>shm_put_var</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$shm_identifier</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$variable_key</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$variable</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">shm_put_var()</strong></span> inserts or updates the    <span class="parameter" style="color:#2EACF9">variable</span> with the given    <span class="parameter" style="color:#2EACF9">variable_key</span>.   </p>   <p class="para">    Warnings (<strong><span>E_WARNING</span></strong> level) will be issued if    <span class="parameter" style="color:#2EACF9">shm_identifier</span> is not a valid SysV shared memory    index or if there was not enough shared memory remaining to complete your    request.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.shm-put-var-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">shm_identifier</span></dt>       <dd>        <p class="para">        A shared memory resource handle as returned by        <span class="function">{@link shm_attach()}</span>       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">variable_key</span></dt>       <dd>        <p class="para">        The variable key.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">variable</span></dt>       <dd>        <p class="para">        The variable. All <a href="http://php.net/manual/zh/language.types.php" class="link">variable types</a>        that <span class="function">{@link serialize()}</span> supports may be used: generally        this means all types except for resources and some internal objects        that cannot be serialized.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.shm-put-var-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.shm-put-var-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link shm_get_var()} - Returns a variable from shared memory</span></li>     <li class="member"><span class="function">{@link shm_has_var()} - Check whether a specific entry exists</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.sem.php">Semaphore 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function shm_put_var ($shm_identifier, $variable_key, $variable) {}

/**
*<div id="function.shm-has-var" class="refentry">  <div class="refnamediv">   <h1 class="refname">shm_has_var</h1>   <p class="verinfo">(PHP 5 &gt;= 5.3.0, PHP 7)</p><p class="refpurpose"><span class="refname">shm_has_var</span> &mdash; <span class="dc-title">Check whether a specific entry exists</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.shm-has-var-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>shm_has_var</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$shm_identifier</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$variable_key</span></span>    )</div>    <p class="para rdfs-comment">    Checks whether a specific key exists inside a shared memory segment.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.shm-has-var-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">shm_identifier</span></dt>       <dd>        <p class="para">        Shared memory segment, obtained from <span class="function">{@link shm_attach()}</span>.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">variable_key</span></dt>       <dd>        <p class="para">        The variable key.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.shm-has-var-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns <strong><span>TRUE</span></strong> if the entry exists, otherwise <strong><span>FALSE</span></strong>   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.shm-has-var-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link shm_get_var()} - Returns a variable from shared memory</span></li>     <li class="member"><span class="function">{@link shm_put_var()} - Inserts or updates a variable in shared memory</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.sem.php">Semaphore 函数</a></div></div>
 * @return bool <b>TRUE</b> if the entry exists, otherwise <b>FALSE</b>*/
function shm_has_var ($shm_identifier, $variable_key) {}

/**
*<div id="function.shm-get-var" class="refentry">  <div class="refnamediv">   <h1 class="refname">shm_get_var</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">shm_get_var</span> &mdash; <span class="dc-title">Returns a variable from shared memory</span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.shm-get-var-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="methodname" style="color:#CC7832"><strong>shm_get_var</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$shm_identifier</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$variable_key</span></span>    )</div>    <p class="para rdfs-comment">    <span class="function"><strong style="color:#CC7832">shm_get_var()</strong></span> returns the variable with a given    <span class="parameter" style="color:#2EACF9">variable_key</span>, in the given shared memory segment.    The variable is still present in the shared memory.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.shm-get-var-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">shm_identifier</span></dt>       <dd>        <p class="para">        Shared memory segment, obtained from <span class="function">{@link shm_attach()}</span>.       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">variable_key</span></dt>       <dd>        <p class="para">        The variable key.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.shm-get-var-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    Returns the variable with the given key.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.shm-get-var-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link shm_has_var()} - Check whether a specific entry exists</span></li>     <li class="member"><span class="function">{@link shm_put_var()} - Inserts or updates a variable in shared memory</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.sem.php">Semaphore 函数</a></div></div>
 * @return mixed the variable with the given key.*/
function shm_get_var ($shm_identifier, $variable_key) {}

/**
*<div id="function.shm-remove-var" class="refentry">  <div class="refnamediv">   <h1 class="refname">shm_remove_var</h1>   <p class="verinfo">(PHP 4, PHP 5, PHP 7)</p><p class="refpurpose"><span class="refname">shm_remove_var</span> &mdash; <span class="dc-title">Removes a variable from shared memory   </span></p>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-function.shm-remove-var-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="type" style="color:#EAB766">bool</span> <span class="methodname" style="color:#CC7832"><strong>shm_remove_var</strong></span>     ( <span class="methodparam"><span class="type" style="color:#EAB766">resource</span> <span class="parameter" style="color:#2EACF9">$shm_identifier</span></span>    , <span class="methodparam"><span class="type" style="color:#EAB766">int</span> <span class="parameter" style="color:#2EACF9">$variable_key</span></span>    )</div>    <p class="para rdfs-comment">    Removes a variable with a given <span class="parameter" style="color:#2EACF9">variable_key</span>    and frees the occupied memory.   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-function.shm-remove-var-parameters">   <h3 class="title">参数</h3>   <span>    <dl>            <dt> <span class="parameter" style="color:#2EACF9">shm_identifier</span></dt>       <dd>        <p class="para">        The shared memory identifier as returned by        <span class="function">{@link shm_attach()}</span>       </p>      </dd>                 <dt> <span class="parameter" style="color:#2EACF9">variable_key</span></dt>       <dd>        <p class="para">        The variable key.       </p>      </dd>          </dl>    </span>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-function.shm-remove-var-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    成功时返回 <strong><span>TRUE</span></strong>， 或者在失败时返回 <strong><span>FALSE</span></strong>。   </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 seealso" id="refsect1-function.shm-remove-var-seealso">   <h3 class="title">参见</h3>   <span>    <ul class="simplelist">     <li class="member"><span class="function">{@link shm_remove()} - Removes shared memory from Unix systems</span></li>    </ul>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/ref.sem.php">Semaphore 函数</a></div></div>
 * @return bool <b>TRUE</b> on success or <b>FALSE</b> on failure.*/
function shm_remove_var ($shm_identifier, $variable_key) {}

// End of sysvshm v.
?>
