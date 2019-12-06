<?php

/**
*<div id="class.spltype" class="reference">   <h1 class="title">The SplType class</h1>     <div class="partintro"><p class="verinfo">(PECL spl_types &gt;= 0.1.0)</p>     <div class="section" id="spltype.intro">    <h2 class="title">简介</h2>    <p class="para">     Parent class for all SPL types.    </p>   </div>     <div class="section" id="spltype.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <span class="modifier">abstract</span> <strong class="classname">SplType</strong>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">NULL</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.spltype.php#spltype.constants.default"><var class="varname">__default</var></a></var>      <span class="initializer"> = <strong><span>NULL</span></strong></span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/spltype.construct.php" class="methodname" style="color:#CC7832">__construct</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$initial_value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$strict</span></span>   ]] )</div>     }</div>     </div>       <div class="section" id="spltype.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="spltype.constants.default"><strong><span>SplType::__default</span></strong></dt>       <dd>        <p class="para"/>      </dd>           </dl>    </div>     </div>            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SplType::__construct} — Creates a new value of some type</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.spl-types.php">SPL Types</a></div></div>
*/
abstract class SplType {
    /**
     * @var null Default value
     * @link http://php.net/manual/en/class.spltype.php#spltype.constants.default
     */
    const __default = null;

    /**
     * Creates a new value of some type
     *
     * @param mixed $initial_value
     * @param bool $strict  If set to true then will throw UnexpectedValueException if value of other type will be assigned. True by default
     * @link http://php.net/manual/en/spltype.construct.php
     */
    public function __construct ($initial_value = self::__default, $strict = true ){ }
}

/**
*<div id="class.splint" class="reference">   <h1 class="title">The SplInt class</h1>     <div class="partintro"><p class="verinfo">(PECL spl_types &gt;= 0.1.0)</p>     <div class="section" id="splint.intro">    <h2 class="title">简介</h2>    <p class="para">     The SplInt class is used to enforce strong typing of the integer type.    </p>   </div>     <div class="section" id="splint.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SplInt</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.spltype.php" class="classname">SplType</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">integer</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.splint.php#splint.constants.default"><var class="varname">__default</var></a></var>      <span class="initializer"> = 0</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832">{@link SplType::__construct}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$initial_value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$strict</span></span>   ]] )</div>      }</div>     </div>       <div class="section" id="splint.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="splint.constants.default"><strong><span>SplInt::__default</span></strong></dt>       <dd>        <p class="para"/>      </dd>           </dl>    </div>       <div class="section" id="splint.examples">    <h2 class="title">范例</h2>    <p class="para">     <div class="example" id="example-4796">      <p><strong>Example #1 <strong class="classname">SplInt</strong> usage example</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$int&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SplInt</span><span style="color: #007700">(</span><span style="color: #9876AA">94</span><span style="color: #007700">);<br /><br />try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$int&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Try&nbsp;to&nbsp;cast&nbsp;a&nbsp;string&nbsp;value&nbsp;for&nbsp;fun'</span><span style="color: #007700">;<br />}&nbsp;catch&nbsp;(</span><span style="color: #9876AA">UnexpectedValueException&nbsp;$uve</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$uve</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getMessage</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br />echo&nbsp;</span><span style="color: #9876AA">$int&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>       <div class="example-contents"><p>以上例程会输出：</p></div>      <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Value not an integer 94 </span></div>      </div>     </div>    </p>   </div>     </div>  <div class="up"><a href="http://php.net/manual/zh/book.spl-types.php">SPL Types</a></div></div>
*/
class SplInt extends SplType {
    /**
     * @link http://php.net/manual/en/class.splint.php#splint.constants.default
     */
    const __default = 0 ;
}

/**
*<div id="class.splfloat" class="reference">   <h1 class="title">The SplFloat class</h1>     <div class="partintro"><p class="verinfo">(PECL spl_types &gt;= 0.1.0)</p>     <div class="section" id="splfloat.intro">    <h2 class="title">简介</h2>    <p class="para">     The SplFloat class is used to enforce strong typing of the float type.    </p>   </div>     <div class="section" id="splfloat.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SplFloat</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.spltype.php" class="classname">SplType</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">float</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.splfloat.php#splfloat.constants.default"><var class="varname">__default</var></a></var>      <span class="initializer"> = 0</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832">{@link SplType::__construct}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$initial_value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$strict</span></span>   ]] )</div>      }</div>     </div>       <div class="section" id="splfloat.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="splfloat.constants.default"><strong><span>SplFloat::__default</span></strong></dt>       <dd>        <p class="para"/>      </dd>           </dl>    </div>       <div class="section" id="splfloat.examples">    <h2 class="title">范例</h2>    <p class="para">     <div class="example" id="example-4797">      <p><strong>Example #1 <strong class="classname">SplFloat</strong> usage example</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$float&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SplFloat</span><span style="color: #007700">(</span><span style="color: #9876AA">3.154</span><span style="color: #007700">);<br /></span><span style="color: #9876AA">$newFloat&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SplFloat</span><span style="color: #007700">(</span><span style="color: #9876AA">3</span><span style="color: #007700">);<br /><br />try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$float&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #DD0000">'Try&nbsp;to&nbsp;cast&nbsp;a&nbsp;string&nbsp;value&nbsp;for&nbsp;fun'</span><span style="color: #007700">;<br />}&nbsp;catch&nbsp;(</span><span style="color: #9876AA">UnexpectedValueException&nbsp;$uve</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$uve</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getMessage</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br />echo&nbsp;</span><span style="color: #9876AA">$float&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />echo&nbsp;</span><span style="color: #9876AA">$newFloat&nbsp;</span><span style="color: #007700">.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>       <div class="example-contents"><p>以上例程会输出：</p></div>      <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Value not a float 3.154 3 </span></div>      </div>     </div>    </p>   </div>     </div>  <div class="up"><a href="http://php.net/manual/zh/book.spl-types.php">SPL Types</a></div></div>
*/
class SplFloat extends SplType {
    const __default = 0 ;
}

/**
*<div id="class.splenum" class="reference">   <h1 class="title">The SplEnum class</h1>     <div class="partintro"><p class="verinfo">(PECL spl_types &gt;= 0.1.0)</p>     <div class="section" id="splenum.intro">    <h2 class="title">简介</h2>    <p class="para">     SplEnum gives the ability to emulate and create enumeration objects     natively in PHP.    </p>   </div>     <div class="section" id="splenum.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SplEnum</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.spltype.php" class="classname">SplType</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">NULL</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.splenum.php#splenum.constants.default"><var class="varname">__default</var></a></var>      <span class="initializer"> = <strong><span>NULL</span></strong></span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><a href="http://php.net/manual/zh/splenum.getconstlist.php" class="methodname" style="color:#CC7832">getConstList</a></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$include_default</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832">{@link SplType::__construct}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$initial_value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$strict</span></span>   ]] )</div>      }</div>     </div>       <div class="section" id="splenum.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="splenum.constants.default"><strong><span>SplEnum::__default</span></strong></dt>       <dd>        <p class="para"/>      </dd>           </dl>    </div>       <div class="section" id="splenum.examples">    <h2 class="title">范例</h2>    <p class="para">     <div class="example" id="example-4798">      <p><strong>Example #1 <strong class="classname">SplEnum</strong> usage example</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br /></span><span style="color: #007700">class&nbsp;</span><span style="color: #9876AA">Month&nbsp;</span><span style="color: #007700">extends&nbsp;</span><span style="color: #9876AA">SplEnum&nbsp;</span><span style="color: #007700">{<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">__default&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">self</span><span style="color: #007700">::</span><span style="color: #9876AA">January</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">January&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">1</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">February&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">2</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">March&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">3</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">April&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">4</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">May&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">5</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">June&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">6</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">July&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">7</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">August&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">8</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">September&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">9</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">October&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">10</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">November&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">11</span><span style="color: #007700">;<br />&nbsp;&nbsp;&nbsp;&nbsp;const&nbsp;</span><span style="color: #9876AA">December&nbsp;</span><span style="color: #007700">=&nbsp;</span><span style="color: #9876AA">12</span><span style="color: #007700">;<br />}<br /><br />echo&nbsp;new&nbsp;</span><span style="color: #9876AA">Month</span><span style="color: #007700">(</span><span style="color: #9876AA">Month</span><span style="color: #007700">::</span><span style="color: #9876AA">June</span><span style="color: #007700">)&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br /><br />try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;new&nbsp;</span><span style="color: #9876AA">Month</span><span style="color: #007700">(</span><span style="color: #9876AA">13</span><span style="color: #007700">);<br />}&nbsp;catch&nbsp;(</span><span style="color: #9876AA">UnexpectedValueException&nbsp;$uve</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$uve</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getMessage</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>       <div class="example-contents"><p>以上例程会输出：</p></div>      <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> 6 Value not a const in enum Month </span></div>      </div>     </div>    </p>   </div>     </div>            <h2>Table of Contents</h2><ul class="chunklist chunklist_reference"><li>{@link SplEnum::getConstList} — Returns all consts (possible values) as an array</li></ul> <div class="up"><a href="http://php.net/manual/zh/book.spl-types.php">SPL Types</a></div></div>
*/
class SplEnum extends SplType {
    /**
     * @link http://php.net/manual/en/class.splenum.php#splenum.constants.default
     */
    const __default = null ;

/**
*<div id="splenum.getconstlist" class="refentry">  <div class="refnamediv">   <h1 class="refname">SplEnum::getConstList</h1>   <p class="verinfo">(PECL spl_types &gt;= 0.1.0)</p><p class="refpurpose"><span class="refname">SplEnum::getConstList</span> &mdash; <span class="dc-title">Returns all consts (possible values) as an array</span></p>   </div>   <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 description" id="refsect1-splenum.getconstlist-description">   <h3 class="title">说明</h3>   <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832"><strong>SplEnum::getConstList</strong></span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$include_default</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div>    <p class="para rdfs-comment">    </p>    <div class="warning"><strong class="warning">Warning</strong><p class="simpara">本函数还未编写文档，仅有参数列表。</p></div>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 parameters" id="refsect1-splenum.getconstlist-parameters">   <h3 class="title">参数</h3>   <dl>          <dt> <span class="parameter" style="color:#2EACF9">include_default</span></dt>      <dd>       <span>       Whether to include <em>__default</em> property.      </span>     </dd>        </dl>   </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 returnvalues" id="refsect1-splenum.getconstlist-returnvalues">   <h3 class="title">返回值</h3>   <p class="para">    </p>  </div>    <br></br><div style="BORDER-TOP: gray 1px dashed; OVERFLOW: hidden; HEIGHT: 1px"></div><div class="refsect1 examples" id="refsect1-splenum.getconstlist-examples">   <h3 class="title">范例</h3>   <span>    <div class="example" id="example-4799">     <p><strong>Example #1 <span class="function"><strong style="color:#CC7832">SplEnum::getConstList()</strong></span> example</strong></p>     <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$bool&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SplBool</span><span style="color: #007700">;<br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$bool</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getConstList</span><span style="color: #007700">(</span><span style="color: #9876AA">true</span><span style="color: #007700">));<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>     </div>      <div class="example-contents"><p>以上例程会输出：</p></div>     <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> array(3) {   [&quot;__default&quot;]=&gt;   bool(false)   [&quot;false&quot;]=&gt;   bool(false)   [&quot;true&quot;]=&gt;   bool(true) } </span></div>     </div>    </div>   </span>  </div>   <div class="up"><a href="http://php.net/manual/zh/class.splenum.php">SplEnum</a></div></div>
     * @return array*/
    public function getConstList ($include_default = false) {}
}

/**
*<div id="class.splbool" class="reference">   <h1 class="title">The SplBool class</h1>     <div class="partintro"><p class="verinfo">(PECL spl_types &gt;= 0.1.0)</p>     <div class="section" id="splbool.intro">    <h2 class="title">简介</h2>    <p class="para">     The SplBool class is used to enforce strong typing of the bool type.    </p>   </div>     <div class="section" id="splbool.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SplBool</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.splenum.php" class="classname">SplEnum</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">boolean</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.splbool.php#splbool.constants.default"><var class="varname">__default</var></a></var>      <span class="initializer"> = <strong><span>FALSE</span></strong></span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">boolean</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.splbool.php#splbool.constants.false"><var class="varname">false</var></a></var>      <span class="initializer"> = <strong><span>FALSE</span></strong></span>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">boolean</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.splbool.php#splbool.constants.true"><var class="varname">true</var></a></var>      <span class="initializer"> = <strong><span>TRUE</span></strong></span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="modifier">public</span> <span class="type" style="color:#EAB766">array</span> <span class="methodname" style="color:#CC7832">{@link SplEnum::getConstList}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$include_default</span><span class="initializer"> = <strong><span>FALSE</span></strong></span></span>   ] )</div>      }</div>     </div>       <div class="section" id="splbool.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="splbool.constants.default"><strong><span>SplBool::__default</span></strong></dt>       <dd>        <p class="para"/>      </dd>                  <dt id="splbool.constants.false"><strong><span>SplBool::false</span></strong></dt>       <dd>        <p class="para"/>      </dd>                  <dt id="splbool.constants.true"><strong><span>SplBool::true</span></strong></dt>       <dd>        <p class="para"/>      </dd>           </dl>    </div>       <div class="section" id="splbool.examples">    <h2 class="title">范例</h2>    <p class="para">     <div class="example" id="example-4800">      <p><strong>Example #1 <strong class="classname">SplBool</strong> usage example</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$true&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SplBool</span><span style="color: #007700">(</span><span style="color: #9876AA">true</span><span style="color: #007700">);<br />if&nbsp;(</span><span style="color: #9876AA">$true</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"TRUE\n"</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">$false&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SplBool</span><span style="color: #007700">;<br />if&nbsp;(</span><span style="color: #9876AA">$false</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #DD0000">"FALSE\n"</span><span style="color: #007700">;<br />}<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>       <div class="example-contents"><p>以上例程会输出：</p></div>      <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> TRUE </span></div>      </div>     </div>    </p>   </div>     </div>  <div class="up"><a href="http://php.net/manual/zh/book.spl-types.php">SPL Types</a></div></div>
*/
class SplBool extends SplEnum {
    /**
     * @link http://php.net/manual/en/class.splbool.php#splbool.constants.default
     */
    const __default = false ;

    /**
     * @link http://php.net/manual/en/class.splbool.php#splbool.constants.false
     */
    const false = false ;

    /**
     * @link http://php.net/manual/en/class.splbool.php#splbool.constants.true
     */
    const true = true ;
}

/**
*<div id="class.splstring" class="reference">   <h1 class="title">The SplString class</h1>      <div class="partintro"><p class="verinfo">(PECL spl_types &gt;= 0.1.0)</p>     <div class="section" id="splstring.intro">    <h2 class="title">简介</h2>    <p class="para">     The SplString class is used to enforce strong typing of the string type.    </p>   </div>     <div class="section" id="splstring.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SplString</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.spltype.php" class="classname">SplType</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// Constants </div>     <div class="fieldsynopsis">      <span class="modifier">const</span>      <span class="type" style="color:#EAB766">string</span>       <var class="fieldsynopsis_varname"><a href="http://php.net/manual/zh/class.splstring.php#splstring.constants.default"><var class="varname">__default</var></a></var>      <span class="initializer"> = &#039;&#039;</span>     ;</div>           <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description" style="border:1px gray;padding-left:5px;background:#232525">    <span class="methodname" style="color:#CC7832">{@link SplType::__construct}</span>     ([ <span class="methodparam"><span class="type" style="color:#EAB766"><a href="http://php.net/manual/zh/language.pseudo-types.php#language.types.mixed" class="type mixed" style="color:#EAB766">mixed</a></span> <span class="parameter" style="color:#2EACF9">$initial_value</span></span>    [, <span class="methodparam"><span class="type" style="color:#EAB766">bool</span> <span class="parameter" style="color:#2EACF9">$strict</span></span>   ]] )</div>      }</div>     </div>       <div class="section" id="splstring.constants">    <h2 class="title">预定义常量</h2>    <dl>             <dt id="splstring.constants.default"><strong><span>SplString::__default</span></strong></dt>       <dd>        <p class="para"/>      </dd>           </dl>    </div>       <div class="section" id="splstring.examples">    <h2 class="title">范例</h2>    <p class="para">     <div class="example" id="example-4801">      <p><strong>Example #1 <strong class="classname">SplString</strong> usage example</strong></p>      <div class="example-contents"> <div class="phpcode" style="border-color:gray;background:#232525"><span><span style="color: #000000"> <span style="color: #9876AA">&lt;?php<br />$string&nbsp;</span><span style="color: #007700">=&nbsp;new&nbsp;</span><span style="color: #9876AA">SplString</span><span style="color: #007700">(</span><span style="color: #DD0000">"Testing"</span><span style="color: #007700">);<br /><br />try&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;</span><span style="color: #9876AA">$string&nbsp;</span><span style="color: #007700">=&nbsp;array();<br />}&nbsp;catch&nbsp;(</span><span style="color: #9876AA">UnexpectedValueException&nbsp;$uve</span><span style="color: #007700">)&nbsp;{<br />&nbsp;&nbsp;&nbsp;&nbsp;echo&nbsp;</span><span style="color: #9876AA">$uve</span><span style="color: #007700">-&gt;</span><span style="color: #9876AA">getMessage</span><span style="color: #007700">()&nbsp;.&nbsp;</span><span style="color: #9876AA">PHP_EOL</span><span style="color: #007700">;<br />}<br /><br /></span><span style="color: #9876AA">var_dump</span><span style="color: #007700">(</span><span style="color: #9876AA">$string</span><span style="color: #007700">);<br />echo&nbsp;</span><span style="color: #9876AA">$string</span><span style="color: #007700">;&nbsp;</span><span style="color: #FF8000">//&nbsp;Outputs&nbsp;"Testing"<br /></span><span style="color: #9876AA">?&gt;</span> </span> </span></div>      </div>       <div class="example-contents"><p>以上例程会输出：</p></div>      <div class="example-contents screen" style="background:black;padding-left:5px;"> <div class="cdata"><span> Value not a string object(SplString)#1 (1) {   [&quot;__default&quot;]=&gt;   string(7) &quot;Testing&quot; } Testing </span></div>      </div>     </div>    </p>   </div>     </div>  <div class="up"><a href="http://php.net/manual/zh/book.spl-types.php">SPL Types</a></div></div>
*/
class SplString extends SplType {
    /**
     * @link http://php.net/manual/en/class.splstring.php#splstring.constants.default
     */
    const __default = 0 ;
}
