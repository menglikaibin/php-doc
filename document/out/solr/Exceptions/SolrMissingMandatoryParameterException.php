<?php
/**
 * Helper autocomplete for php solr extension.
 *
 * @author Pierre-Julien Mazenot <pj.mazenot@gmail.com>
 * @link   https://github.com/pjmazenot/phpsolr-phpdoc
 */

/**
*<div id="class.solrmissingmandatoryparameterexception" class="reference">   <h1 class="title">The SolrMissingMandatoryParameterException class</h1>     <div class="partintro"><p class="verinfo">(No version information available, might only be in Git)</p>     <div class="section" id="solrmissingmandatoryparameterexception.intro">    <h2 class="title">简介</h2>    <p class="para">     </p>   </div>     <div class="section" id="solrmissingmandatoryparameterexception.synopsis">    <h2 class="title">类摘要</h2>      <div class="classsynopsis">     <div class="ooclass"></div>       <div class="classsynopsisinfo">      <span class="ooclass">       <strong class="classname">SolrMissingMandatoryParameterException</strong>      </span>            <span class="ooclass">       <span class="modifier">extends</span>       <a href="http://php.net/manual/zh/class.solrexception.php" class="classname">SolrException</a>      </span>      {</div>      <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的属性 </div>     <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.message">$<var class="varname">message</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.code">$<var class="varname">code</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.file">$<var class="varname">file</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">int</span>       <var class="varname"><a href="http://php.net/manual/zh/class.exception.php#exception.props.line">$<var class="varname">line</var></a></var>     ;</div>      <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">integer</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrexception.php#solrexception.props.sourceline">$<var class="varname">sourceline</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrexception.php#solrexception.props.sourcefile">$<var class="varname">sourcefile</var></a></var>     ;</div> <div class="fieldsynopsis">      <span class="modifier">protected</span>      <span class="type">string</span>       <var class="varname"><a href="http://php.net/manual/zh/class.solrexception.php#solrexception.props.zif-name">$<var class="varname">zif_name</var></a></var>     ;</div>            <div class="classsynopsisinfo classsynopsisinfo_comment">// 继承的方法 </div>     <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getMessage}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">Throwable</span> <span class="methodname">{@link Exception::getPrevious}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getCode}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getFile}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">int</span> <span class="methodname">{@link Exception::getLine}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link Exception::getTrace}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">public</span> <span class="type">string</span> <span class="methodname">{@link Exception::getTraceAsString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">string</span>  <span class="methodname">{@link Exception::__toString}</span>     ( <span class="methodparam">void</span>    )</div> <div class="methodsynopsis dc-description">    <span class="modifier">final</span> <span class="modifier">private</span> <span class="type">void</span> <span class="methodname">{@link Exception::__clone}</span>     ( <span class="methodparam">void</span>    )</div>      <div class="methodsynopsis dc-description">    <span class="modifier">public</span> <span class="type">array</span> <span class="methodname">{@link SolrException::getInternalInfo}</span>     ( <span class="methodparam">void</span>    )</div>      }</div>     </div>   </div>     <div class="up"><a href="http://php.net/manual/zh/book.solr.php">Solr</a></div></div>
*/
class SolrMissingMandatoryParameterException extends SolrException {

}