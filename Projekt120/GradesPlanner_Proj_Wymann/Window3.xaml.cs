using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows;
using System.Windows.Controls;
using System.Windows.Data;
using System.Windows.Documents;
using System.Windows.Input;
using System.Windows.Media;
using System.Windows.Media.Imaging;
using System.Windows.Shapes;

namespace $safeprojectname$
{
    /// <summary>
    /// Interaktionslogik für Window3.xaml
    /// </summary>
    public partial class Window3 : Window
    {
        public Window3()
        {
            InitializeComponent();
        }

        private void Window_Loaded(object sender, RoutedEventArgs e)
        {

            $safeprojectname$.modul120DataSet modul120DataSet = (($safeprojectname$.modul120DataSet)(this.FindResource("modul120DataSet")));
            // Lädt Daten in Tabelle "testlist". Sie können diesen Code nach Bedarf ändern.
            $safeprojectname$.modul120DataSetTableAdapters.testlistTableAdapter modul120DataSettestlistTableAdapter = new $safeprojectname$.modul120DataSetTableAdapters.testlistTableAdapter();
            modul120DataSettestlistTableAdapter.Fill(modul120DataSet.testlist);
            System.Windows.Data.CollectionViewSource testlistViewSource = ((System.Windows.Data.CollectionViewSource)(this.FindResource("testlistViewSource")));
            testlistViewSource.View.MoveCurrentToFirst();
        }

        private void Button_Click(object sender, RoutedEventArgs e)
        {

        }

        private void Button_MouseDown(object sender, MouseButtonEventArgs e)
        {
            Window Window2 = new Window2();
            Window2.Show();
            this.Close();
        }
    }
}
