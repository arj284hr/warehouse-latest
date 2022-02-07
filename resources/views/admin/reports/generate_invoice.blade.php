<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="row justify-content-center" class="">
    
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
        <h4 class="text-center">Customer Invoice</h4>
        <table cellspacing="0" border="0">
    <colgroup width="131"></colgroup>
    <colgroup width="191"></colgroup>
    <colgroup width="119"></colgroup>
    <colgroup width="168"></colgroup>
    <colgroup width="79"></colgroup>
    <colgroup width="91"></colgroup>
    <colgroup width="98"></colgroup>
    <colgroup width="227"></colgroup>
    <colgroup width="62"></colgroup>
    <tbody><tr>
        <td style="border-top: 2px solid #000000; border-left: 2px solid #000000" height="25" align="left" valign="middle"><b><font face="Calibri" size="4" color="#262626">EXE LOGISTICS SOLUTIONS, LLC</font></b></td>
        <td style="border-top: 2px solid #000000" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-top: 2px solid #000000" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-top: 2px solid #000000" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-top: 2px solid #000000" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-top: 2px solid #000000" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Phone:</font></b></td>
        <td style="border-top: 2px solid #000000; border-right: 2px solid #000000" colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">Accounts Receivable:
        @if(!empty($detail))
        @if( $detail->phone )
                        {{ $detail->phone }}
                        @else
                        N/A
                        @endif
                        @else
                        N/A
                                                @endif
                        </font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="3" height="21" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">P.O. BOX 
         @if(!empty($detail))
        @if( $detail->ssn )
                        {{ $detail->ssn }}
                        @else
                        N/A
                        @endif
                        @else
                        N/A
                                                @endif</font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-right: 2px solid #000000" colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="3" height="21" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">
            @if(!empty($detail))
            @if( $detail->city )
                        {{ $detail->city }},
                        @else
                        N/A
                        @endif
                        @if( $detail->state )
                        {{ $detail->state }}
                        @else
                        N/A
                        @endif
                        @if( $detail->zipcode )
                        {{ $detail->zipcode }}
                        @else
                        N/A
                        @endif
                        @endif</font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Email:</font></b></td>
        <td style="border-right: 2px solid #000000" colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">
             @if(!empty($detail))
             @if( $detail->email )
                        {{ $detail->email }}
                        @else
                        N/A
                        @endif
                        @else
                        N/A
                         @endif</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" height="21" align="left" valign="bottom"><font face="Calibri" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-right: 2px solid #000000" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" height="31" align="left" valign="middle"><b><i><font face="Calibri" size="4" color="#595959">Invoice</font></i></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Bill To:</font></b></td>
        <td style="border-right: 2px solid #000000" colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->customer_name )
                        {{ $invoices->customer_name }}
                        @else
                        N/A
                        @endif 
                        </font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Invoice #:</font></b></td>
        <td colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->id )
                        {{ $invoices->id }}
                        @else
                        N/A
                        @endif</font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-right: 2px solid #000000" colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">Attn: @if( $invoices->driver_name )
                        {{ $invoices->driver_name }}
                        @else
                        N/A
                        @endif</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Date:</font></b></td>
        <td colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->load_project_date )
                        {{ $invoices->load_project_date }}
                        @else
                        N/A
                        @endif</font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-right: 2px solid #000000" colspan="2" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000"> @if( $invoices->location )
                        {{ $invoices->location }}<br>
                        @else
                       
                        @endif
                        @if( $invoices->city )
                        {{ $invoices->city }}
                        @else
                       
                        @endif
                        @if( $invoices->state )
                        {{ $invoices->state }}
                        @else
                       
                        @endif
                        
                        @if( $invoices->zipcode )
                        {{ $invoices->zipcode }}
                        @else
                       
                        @endif</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Customer ID:</font></b></td>
        <td colspan="3" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->customer_name )
                        {{ $invoices->customer_name }}
                        @else
                        N/A
                        @endif 
                        @if( $invoices->city )
                        , {{ $invoices->city }}
                        @else
                       
                        @endif
                        @if( $invoices->state )
                        , {{ $invoices->state }}
                        @else
                       
                        @endif</font></td>
        <td align="left" colspan="4" style="
    border-right: 2px solid #000000;" valign="bottom"><font face="Calibri" size="3" color="#000000"><br></font></td>
       
       
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="2" height="21" align="left" valign="middle" bgcolor="#D8D8D8"><b><font face="Calibri" size="3" color="#000000">Remittance Amount Enclosed:</font></b></td>
        <td colspan="5" align="left" valign="bottom" bgcolor="#B7E1CD"><font face="Calibri" size="3" color="#000000">Remittance amount:</font></td>
        <td style="border-right: 2px solid #000000" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" height="21" align="left" valign="top"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="top"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="top"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="top"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="top"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="top"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td style="border-right: 2px solid #000000" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" height="42" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">Date</font></b></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">PO#</font></b></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">Vendor</font></b></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">Carrier</font></b></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">Pieces</font></b></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">Beginning / End Pallets</font></b></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">Ticket #</font></b></td>
        <td style="border-top: 2px solid #000000; border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 2px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000">Rate Charged</font></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign="middle" sdval="44420" sdnum="1033;0;M/D/YY"><b><font face="Calibri" size="3" color="#000000">@if( $invoices->load_project_date )
                        {{ $invoices->load_project_date }}
                        @else
                        N/A
                        @endif</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" bgcolor="#FFFFFF" sdval="362641" sdnum="1033;"><b><font face="Calibri" size="3" color="#000000">@if( $invoices->po_no )
                        {{ $invoices->po_no }}
                        @else
                        N/A
                        @endif</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" bgcolor="#FFFFFF"><b><font face="Calibri" size="3" color="#000000">@if( $invoices->vendor )
                        {{ $invoices->vendor }}
                        @else
                        N/A
                        @endif</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" bgcolor="#FFFFFF"><b><font face="Calibri" size="3" color="#000000">@if( $invoices->carrier )
                        {{ $invoices->carrier }}
                        @else
                        N/A
                        @endif</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" bgcolor="#FFFFFF" sdval="1950" sdnum="1033;"><b><font face="Calibri" size="3" color="#000000">@if( $invoices->pieces )
                        {{ $invoices->pieces }}
                        @else
                        N/A
                        @endif</font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF"><b><font face="Calibri" size="3">0 / 22</font></b></td>
        <td style="border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF" sdnum="1033;0;@"><b><font face="Calibri" size="3">N/A</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" bgcolor="#FFFFFF" sdval="-530" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#FF0000">@if( $invoices->charge_amount )
                        ${{ $invoices->charge_amount }}
                        @else
                        N/A
                        @endif</font></b></td>
        
    </tr>
    <tr>
        <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign="middle" sdnum="1033;1033;M/D/YYYY"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF" sdnum="1033;0;_(&quot;$&quot;* #,##0.00_);_(&quot;$&quot;* \(#,##0.00\);_(&quot;$&quot;* &quot;-&quot;??_);_(@_)"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="bottom" bgcolor="#FFFFFF" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign="middle" sdnum="1033;1033;M/D/YYYY"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;#,##0"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign="middle" sdnum="1033;1033;M/D/YYYY"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;#,##0"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-bottom: 1px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" height="21" align="center" valign="middle" sdnum="1033;1033;M/D/YYYY"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;#,##0"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-bottom: 1px solid #000000; border-left: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" height="21" align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000"><br></font></b></td>
        <td style="border-top: 1px solid #000000; border-right: 1px solid #000000" align="left" valign="middle"><b><font face="Calibri" size="3" color="#000000">Total Due:</font></b></td>
        <td style="border-top: 1px solid #000000; border-bottom: 1px solid #000000; border-right: 1px solid #000000" align="center" valign="middle" sdval="0" sdnum="1033;0;&quot;$&quot;#,##0.00"><b><font face="Calibri" size="3" color="#000000">@if( $invoices->charge_amount )
                        ${{ $invoices->charge_amount }}
                        @else
                        N/A
                        @endif</font></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000; border-right: 1px solid #000000" colspan="8" height="21" align="left" valign="top"><b><font face="Calibri" size="3" color="#595959">Terms: Balance due in 15 days.</font></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000; border-right: 1px solid #000000" colspan="8" height="21" align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="7" height="20" align="left" valign="middle" bgcolor="#D8D8D8"><b><font face="Calibri" size="3" color="#000000">REMITTANCE</font></b></td>
        <td style="border-bottom: 2px solid #000000; border-left: 1px solid #000000; border-right: 2px solid #000000" rowspan="7" align="center" valign="middle"><b><font face="Calibri" size="1" color="#000000">NOTICE OF ASSIGNMENT: THIS INVOICE HAS BEEN ASSIGNED TO, AND MUST BE PAID DIRECTLY TO: LOOKOUT CAPITAL LLC. ALL PAYMENTS SHOULD BE MADE BY ACH TO: MILLENIUM BANK ABA/ROUTING# 064208518 ACCOUNT# 20003146 SEND REMIT TO: REMIT@LOOKOUTCAPITALLLC.COM IF PAYING BY MAIL, SEND PAYMENTS TO: LOOKOUT CAPITAL LLC P.O. BOX 11471 CHATTANOOGA, TN 37401 SHOULD YOU HAVE ANY QUESTIONS, PLEASE CONTACT (423)201-4794</font></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="2" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Customer Name:</font></b></td>
        <td colspan="5" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->customer_name )
                        {{ $invoices->customer_name }}
                        @else
                        N/A
                        @endif</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="2" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Customer ID:</font></b></td>
        <td colspan="5" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->customer_name )
                        {{ $invoices->customer_name }}
                        @else
                        N/A
                        @endif 
                        @if( $invoices->city )
                        , {{ $invoices->city }}
                        @else
                       
                        @endif
                        @if( $invoices->state )
                        , {{ $invoices->state }}
                        @else
                       
                        @endif</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="2" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Invoice #:</font></b></td>
        <td colspan="5" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->id )
                        {{ $invoices->id }}
                        @else
                        N/A
                        @endif</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="2" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Date:</font></b></td>
        <td colspan="5" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">@if( $invoices->load_project_date )
                        {{ $invoices->load_project_date }}
                        @else
                        N/A
                        @endif</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-left: 2px solid #000000" colspan="2" height="21" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Amount Due:</font></b></td>
        <td colspan="5" align="left" valign="middle" sdval="0" sdnum="1033;0;&quot;$&quot;#,##0.00_);[RED]\(&quot;$&quot;#,##0.00\)"><b><font face="Calibri" size="3" color="#000000">@if( $invoices->charge_amount )
                        ${{ $invoices->charge_amount }}
                        @else
                        N/A
                        @endif </font></b></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
    <tr>
        <td style="border-bottom: 2px solid #000000; border-left: 2px solid #000000" colspan="2" height="40" align="left" valign="bottom"><b><font face="Calibri" size="3" color="#000000">Amount Enclosed:</font></b></td>
        <td style="border-bottom: 2px solid #000000" colspan="5" align="left" valign="bottom"><font face="Calibri" size="3" color="#000000">Remittance amount</font></td>
        <td align="left" valign="middle"><font face="Calibri" size="3" color="#000000"><br></font></td>
    </tr>
</tbody></table>
      <!--   <table class="table table-sm table-hover">
            <tbody>
                <tr>EXE LOGISTICS SOLUTIONS, LLC</tr>
                <tr>
                    <td>ID</td>
                    <td>@if( $invoices->id )
                        {{ $invoices->id }}
                        @else
                        N/A
                        @endif
                       </td>
                </tr>
                <tr>
                    <td>Customer ID:</td>
                    <td>@if( $invoices->customer_name )
                        {{ $invoices->customer_name }}
                        @else
                        N/A
                        @endif
                       </td>
                </tr>
                <tr>
                    <td>Load/Project Control No</td>
                    <td>@if( $invoices->load_project_control_no )
                        {{ $invoices->load_project_control_no }}
                        @else
                        N/A
                        @endif
                       </td>
                </tr>
                 <tr>
                    <td>Load/Project Date</td>
                    <td>@if( $invoices->load_project_date )
                        {{ $invoices->load_project_date }}
                        @else
                        N/A
                        @endif
                       </td>
                </tr>
               
                <tr>
                    <td>Location</td>
                    <td>@if( $invoices->location )
                        {{ $invoices->location }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>Morning</td> --}}
                </tr>
                {{--  <td>{{ \Carbon\Carbon::parse($delivery->end_time)->format('Y-m-d') }}</td>
                        <td>{{ \Carbon\Carbon::parse($delivery->start_time)->format('H:i') }}</td> --}}
                <tr>
                    <td>Product</td>
                    <td>@if( $invoices->department_id )
                        {{ $invoices->department_id }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->morning_opening_time)->format('H:i') }}</td>  --}}
                </tr>
                <tr>
                    <td>Shift</td>
                    <td>@if( $invoices->shift )
                        {{ $invoices->shift }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->morning_closing_time)->format('H:i') }}</td> --}}
                </tr>
                 <tr>
                    <td>Trailer Type</td>
                    <td>@if( $invoices->trailer_type )
                        {{ $invoices->trailer_type }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>Evening</td> --}}
                </tr>
                <tr>
                    <td>Trailer Size</td>
                    <td>@if( $invoices->trailer_size )
                        {{ $invoices->trailer_size }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->evening_opening_time)->format('H:i') }}</td> --}}
                </tr>
                <tr>
                    <td>In/Out Load/Project</td>
                    <td>@if( $invoices->in_out_load )
                        {{ $invoices->in_out_load }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->evening_closing_time)->format('H:i') }}</td> --}}
                </tr>
                 <tr>
                    <td>Door No.</td>
                    <td>@if( $invoices->door_no )
                        {{ $invoices->door_no }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>Night</td> --}}
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>@if( $invoices->weight )
                        {{ $invoices->weight }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->night_opening_time)->format('H:i') }}</td> --}}
                </tr>
                <tr>
                    <td>Begin Case Ct</td>
                    <td>@if( $invoices->begin_case_ct )
                        {{ $invoices->begin_case_ct }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->night_closing_time)->format('H:i') }}</td> --}}
                </tr>
                 <tr>
                    <td>Ending Case Ct</td>
                    <td>@if( $invoices->ending_case_ct )
                        {{ $invoices->ending_case_ct }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>Weekend</td> --}}
                </tr>
                <tr>
                    <td>Total Skus</td>
                    <td>@if( $invoices->total_skus )
                        {{ $invoices->total_skus }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->weekend_opening_time)->format('H:i') }}</td> --}}
                </tr>
                <tr>
                    <td>Pieces</td>
                    <td>@if( $invoices->pieces )
                        {{ $invoices->pieces }}
                        @else
                        N/A
                        @endif
                       </td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->weekend_closing_time)->format('H:i') }}</td> --}}
                </tr>
                <tr>
                    <td>Total load/project Charge</td>
                    <td>@if( $invoices->charge_amount )
                        {{ $invoices->charge_amount }}
                        @else
                        N/A
                        @endif
                       </td>
                       <td>
                    {{-- <td>{{ \Carbon\Carbon::parse($warehouse->weekend_closing_time)->format('H:i') }}</td> --}}
                    
                </tr>

                
                    

            </tbody>
        </table> -->
        <button type="button" style="margin-top:20px;" onclick="window.print()" class="btn btn-primary">Print</button>
        
    
    </div>
    <div class="col-md-2">
    </div>
</div>
</body>
</html>