<?PHP
$_OPTIMIZATION["title"] = "������� ������������";
$_OPTIMIZATION["description"] = "������� ��� ������������, ������� ������";
?>
<div class="alert alert-info">
<b>������� ���������� ��� ������� ���� ������������ ������ �������� �������, ��� �������, �����, ������ � �.�.<BR />
��������: ��� ������ �� ������� 100 ������, ���������� 100 ������ �������.</b>
</div><BR />

<?PHP
$db->Query("SELECT pay_points FROM db_users_b WHERE id = '".$_SESSION["user_id"]."' LIMIT 1");
?>
<center class="progress" style="font-size: 18px;text-transform: uppercase;height: 30px;line-height: 30px;width: 380px;margin: 0 auto;"><b>������ ���� �������: <font color="red"><?=sprintf("%.2f", $db->FetchRow()); ?></font> ������</b></center> 
<BR />
<b>�� ��������� ������� �� ��������� ��������:</b><BR />
- ���������� ����� ��������� 1-�� ������, +30% ������� �� ����� ����������;<BR />
- ���������� ����� ��������� 2-�� ������, +20% ������� �� ����� ����������;<BR />
- ���������� ����� ��������� 3-�� ������, +5% ������� �� ����� ����������;<BR />
- ��������� ���������� �������, ������ ��� +10% ������ ������� �� ����� ������;<BR />
- ������� �������� ������ ������, ��������� +50% �������, �� ��������� ��������� � ������;<BR />
- ������� ������� �� ����� ��� ������, +50% �������, 1000 ����� = 5 �������;<BR />
- ��� ���������� ������� ����� ���������� 5% �� ����� ���������� ����������� ����� ���� ����������, ������� ���� ������� � ������� 24� �����;<BR /><BR />
������ �����������... <br/><br/>
<font color="red"><b>������ ������� � ������ �� ���:</b></font><BR />
�: ���� ���������� ��� �������, � ����� �������� �������?<BR />
�: ������� ����������� ���� ���� � ��� ��� ���������, ��� ������ ���������� ������ ������������ ������� 5% �� ����� ���������� ������� ����� ����������, ������� �������� �� ������ � ������� 24� �����.<BR />

<BR />
�: �������� ������� - ��� ���?<BR />
�: �������� ��������� ��������� ������������, ������� �������� ������ ��� � �������� ������� ��������, ������� ��������� ������.<BR />


<BR />
�: ������� �� ��������� ������� ��� �����?<BR />
�: �� ������ �������� ������� �� ������ ����� +10 ��������� ��������, ������ ������ ����� ���������� � �������� ���-������.<BR />


<BR />
�: ���� ���������� �������� ������� ������� ������?<BR />
�: ������ ������ ��������� ��������� 50 ��������� �������, ������� �� ��������� ���������..<BR />


<BR />
�: ����� �� ��������� ������� � ������� ������?<BR />
�: �� ������ ��������� �������, �������� 1000 ����� �� �������� 5 �������.<BR />

<?php
include "_energy_pay.php";
?>