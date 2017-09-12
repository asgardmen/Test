using System;
using System.Net;
using System.Net.Sockets;
using System.Text;
using System.Threading;
using System.Collections.Generic;

namespace UdpClientApp
{
    class Program
    {
        static string remoteAddress;
        static int remotePort; 
        static int localPort; 
        static string name;
        static List<string> users = new List<string>();
        static void Main(string[] args)
        {
            try
            {
                localPort = 5555;
                Console.Write("Введите удаленный адрес для подключения: ");
                remoteAddress = Console.ReadLine(); 
                remotePort = 5555; // 
                Console.Write("Введите имя: ");
                name = Console.ReadLine();
                users.Add(remoteAddress);
                Thread receiveThread = new Thread(new ThreadStart(ReceiveMessage));
                receiveThread.Start();
                SendMessage(); 
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
        }
        private static void SendMessage()
        {
            UdpClient sender = new UdpClient(); 
            try
            {
                while (true)
                {
                    string message = name + "‡" + Console.ReadLine(); 
                    byte[] data = Encoding.Unicode.GetBytes(message);
                    for(int i=0;i<users.Count;i++)
                    sender.Send(data, data.Length, users[i], remotePort); 
                    
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                sender.Close();
            }
        }

        private static void ReceiveMessage()
        {
            
            UdpClient receiver = new UdpClient(localPort); 
            IPEndPoint remoteIp = null; 
            try
            {
                while (true)
                {
                    byte[] data = receiver.Receive(ref remoteIp);
                    if(!users.Contains(remoteIp.Address.ToString()))
                    users.Add(remoteIp.Address.ToString());
                    string message = Encoding.Unicode.GetString(data);
                    string []part=message.Split("‡".ToCharArray());
                    Console.WriteLine("{0}: {1}",part[0],part[1]);
                }
            }
            catch (Exception ex)
            {
                Console.WriteLine(ex.Message);
            }
            finally
            {
                receiver.Close();
            }
        }
    }
}