# Generated by Django 4.0.4 on 2022-04-18 06:07

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('emprestimos', '0001_initial'),
    ]

    operations = [
        migrations.AlterField(
            model_name='emprestimo',
            name='status_emprestimo',
            field=models.CharField(choices=[('PEN.', 'Pendente'), ('QUI.', 'Quitado')], default='PEN.', max_length=5, verbose_name='Status do emprestimo'),
        ),
    ]
