<?php
	
//	����� ���������� ����� � �������
	$array = array (
		'a' => 12,
		3 => 3,
		'd' => 60,
		2 => 55,
		4 => 18,
		0 => 32,
	);
	
	echo "<pre>";
	print_r ($array);
	echo "</pre>";
	
//	�������
	$size = count ($array) - 1; // ���������� ���������� ��������
	$max = reset($array);
	while ($size > $i++) {
		
		if (next($array) > $max) {
			$max = current($array);
		}
	}
	
	
	print "<i>������������ ����� �����:</i> " . $max;

	/*
	�������� ������������ �������:
	
	http://php.net/manual/ru/function.reset.php
	reset		� ������������� ���������� ��������� ������� �� ��� ������ �������
	
	current()	- ���������� ������� ������� �������
	each()		- ���������� ������� ���� ����/�������� �� ������� � ������� ��� ���������
	end()		- ������������� ���������� ��������� ������� �� ��� ��������� �������
	next()		- ����������� ���������� ��������� ������� �� ���� ������� �����
	prev()		- ����������� ���������� ��������� ������� �� ���� ������� �����

	
	
	
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	